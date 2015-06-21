<?php
require_once "vendor/autoload.php";
$config = array(
    // required
    'access_token' => '4cccea83a0e54bc883c623883d373e1e',
    // optional - environment name. any string will do.
    'environment' => 'production',
    // optional - path to directory your code is in. used for linking stack traces.
    'root' => '/Users/brian/www/myapp'
);
Rollbar::init($config);
function __autoload($class_name)
{
    include_once 'class.' . $class_name . '.inc';
}

try {
    $my_publisher = new Publisher();
    $my_publisher->id = 1;
    $my_publisher->title = "Pearson";
    $my_publisher->location = "New York";
    $my_publisher->year = $my_publisher;
} catch (Exception $e) {
    Rollbar::report_exception($e);
}

$my_article = new Article();
$my_article->id = 1;
$my_article->title = "Article title";
$my_article->relative_file_location = "p1.pdf";
$my_article->page_reference = "p7-9";
$my_article->publisher_id = $my_publisher;

$my_publisher->id = 99;

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

