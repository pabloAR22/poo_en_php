<?php
namespace App;

use App\Category;

class Post
{
    private $title;
    private $content;
    private $category = [];

    public function __construct($title, $content, Category $category)
    {
        $this->title = $title;
        $this->content = $content;
        $this->setCategory($category);
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setCategory(Category $category)
    {
        array_push($this->category, $category);
    }

    public function getCategory()
    {
        return $this->category;
    }
}