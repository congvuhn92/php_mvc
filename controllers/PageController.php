<?php
require_once('BaseController.php');

class PageController extends BaseController
{
    function __construct()
    {
        $this->folder = 'page';
    }

    public function home()
    {
        $data = array(
            'name' => 'Sang Beo',
            'age' => 22
        );
        $this->render('home', $data);
    }

    public function haha()
    {
        echo 'haha';
    }

    public function error()
    {
        $this->render('error');
    }
}