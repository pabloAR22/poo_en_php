<?php

require_once('vendor/autoload.php');

use App\Author;
use App\Category;
use App\Post;
use App\User;

$author = new Author();
$author->setName('Pablo Rada');
$author->setEmail('Radabeca23@gmail.com');
$author->setPassword('1234');

$firtsCategory = new Category('Tech');
$secondCategory = new Category('Life');
$thirtsCategory = new Category('Games');

// Crear tres post
$postOne    = new Post("Primer Post","Contenido del primer post.", $firtsCategory, $author);
$postTwo    = new Post("Segundo Post","Contenido del segundo post.", $secondCategory, $author);
$postThree  = new Post("Tercer Post","Contenido del tercer post.", $thirtsCategory, $author);

$author->addPosttoPostList($postOne);
$author->addPosttoPostList($postTwo);