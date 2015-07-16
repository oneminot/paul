<?php
include_once 'vendor/autoload.php';

$my_publisher = new Kus\Publication\Publisher();
$my_publisher->id = 1;
$my_publisher->title = "Pearson";
$my_publisher->location = "New York";
$my_publisher->year = "2010";

$my_author = new Kus\Publication\Author();
$my_author->id = 1;
$my_author->name = "Professor Plum";

$your_author = new Kus\Publication\Author();
$your_author->id = 2;
$your_author->name = "Professor Slughorn";

$my_author_article = new Kus\Publication\Author_Article();
//$my_author_article->article_id = $my_article;
$my_author_article->author_id = $my_author;
$my_author_article->sequence_number = 2;

$my_article_author = new Kus\Publication\ArticleAuthor();
$my_article_author->id = $my_author->id;
$my_article_author->name = $my_author->name;
$my_article_author->sequence_number = $my_author_article->sequence_number;

$your_author_article = new Kus\Publication\Author_Article();
//$your_author_article->article_id = $my_article;
$your_author_article->author_id = $my_author;
$your_author_article->sequence_number = 3;

$your_article_author = new Kus\Publication\ArticleAuthor();
$your_article_author->id = $your_author->id;
$your_article_author->name = $your_author->name;
$your_article_author->sequence_number = $your_author_article->sequence_number;

$my_article = new Kus\Publication\Article();
$my_article->id = 1;
$my_article->title = "Article title";
$my_article->relative_file_location = "p1.pdf";
$my_article->page_reference = "p7-9";
$my_article->publisher_id = $my_publisher;
$my_article->author_list = array($my_article_author, $your_article_author);

var_dump($my_article);
//object(Kus\Article)[10]
//  public 'id' => int 1
//  public 'title' => string 'Article title' (length=13)
//  public 'relative_file_location' => string 'p1.pdf' (length=6)
//  public 'publisher_id' =>
//    object(Kus\Publisher)[3]
//      public 'id' => int 1
//      public 'title' => string 'Pearson' (length=7)
//      public 'location' => string 'New York' (length=8)
//      public 'year' => string '2010' (length=4)
//  public 'page_reference' => string 'p7-9' (length=4)
//  public 'author_list' =>
//    array (size=2)
//      0 =>
//        object(Kus\ArticleAuthor)[7]
//          public 'sequence_number' => int 2
//          public 'id' => int 1
//          public 'name' => string 'Professor Plum' (length=14)
//      1 =>
//        object(Kus\ArticleAuthor)[9]
//          public 'sequence_number' => int 3
//          public 'id' => int 2
//          public 'name' => string 'Professor Slughorn' (length=18)