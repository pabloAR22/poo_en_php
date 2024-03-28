<?php

use PHPUnit\Framework\TestCase;
use App\Author;
use App\Category;
use App\Post;

class PostTest extends TestCase
{
    public function test_post()
    {
        // Creamos un usuario
        $author = new Author();
        // Crear categoría
        $category = new Category("PHP");
        // Crear post
        $post = new Post("Título", "Contenido", $category);
        // Agregar post al autor
        $author->addPosttoPostList($post);

        // Aserción o afirmación para comprobar que tenemos 1 post agregado
        $this->assertEquals(1, $author->countPost());
        // Aserción o afirmación para comprobar que la categoría es una instancia de la clase Category
        $this->assertInstanceOf(Category::class, $post->getCategory()[0]);

        $author->deleteLatestPost();

        $this->assertEquals(0, $author->countPost());
    }
}