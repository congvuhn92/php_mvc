<?php
require_once('BaseController.php');
require_once('../models/Post.php');

class PostController extends BaseController
{
    function __construct()
    {
        $this->folder = 'post';
    }

    public function index()
    {
        $posts = Post::all();
        $data = array('post' => $posts);
        $this->render('index', $data);
    }
}