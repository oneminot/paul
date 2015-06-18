<?php
function __autoload($class_name)
{
    include_once 'class.' . $class_name . '.inc';
}

$my_publisher = new Publisher();
$my_publisher->id = 1;
$my_publisher->title = "Pearson";
$my_publisher->location = "New York";
$my_publisher->year = 2004;

$my_article = new Article();
$my_article->id = 1;
$my_article->title = "Article title";
$my_article->relative_file_location = "p1.pdf";
$my_article->page_reference = "p7-9";
$my_article->publisher_id = $my_publisher;

$my_author = new Author();
$my_author->id = 1;
$my_author->name = "Professor Plum";

$your_author = new Author();
$your_author->id = 2;
$your_author->name = "Professor Slughorn";

$my_author_article = new Author_Article();
$my_author_article->article_id = $my_article;
$my_author_article->author_id = $my_author;
$my_author_article->sequence_number = 2;

$your_author_article = new Author_Article();
$your_author_article->article_id = $my_article;
$your_author_article->author_id = $my_author;
$your_author_article->sequence_number = 2;

var_dump($my_author_article);
var_dump($your_author_article);

// result of var dump
//object(Author_Article)[5]
//  public 'author_id' =>
//    object(Author)[3]
//      public 'id' => int 1
//      public 'name' => string 'Professor Plum' (length=14)
//  public 'article_id' =>
//    object(Article)[2]
//      public 'id' => int 1
//      public 'title' => string 'Article title' (length=13)
//      public 'relative_file_location' => string 'p1.pdf' (length=6)
//      public 'publisher_id' =>
//        object(Publisher)[1]
//          public 'id' => int 1
//          public 'title' => string 'Pearson' (length=7)
//          public 'location' => string 'New York' (length=8)
//          public 'year' => int 2004
//      public 'page_reference' => string 'p7-9' (length=4)
//  public 'sequence_number' => int 2
//object(Author_Article)[6]
//  public 'author_id' =>
//    object(Author)[3]
//      public 'id' => int 1
//      public 'name' => string 'Professor Plum' (length=14)
//  public 'article_id' =>
//    object(Article)[2]
//      public 'id' => int 1
//      public 'title' => string 'Article title' (length=13)
//      public 'relative_file_location' => string 'p1.pdf' (length=6)
//      public 'publisher_id' =>
//        object(Publisher)[1]
//          public 'id' => int 1
//          public 'title' => string 'Pearson' (length=7)
//          public 'location' => string 'New York' (length=8)
//          public 'year' => int 2004
//      public 'page_reference' => string 'p7-9' (length=4)
//  public 'sequence_number' => int 2