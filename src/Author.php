<?php

namespace App;
use App\User;
use App\Post;
use App\Category;

class Author extends User
{

    protected $posts = [];

    public function setPost(Post $post)
    {
        $this->posts[] = $post;
    }

    public function getAllPost()
    {
        return $this->posts;
    }

    public function addPosttoPostList($post)
    {
        array_push($this->posts, $post);
    }

    public function countPost()
    {
        return count($this->posts);
    }

    public function deleteLatestPost()
    {
        array_pop($this->posts);
    }
}