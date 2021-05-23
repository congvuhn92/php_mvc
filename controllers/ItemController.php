<?php
require 'BaseController.php';
class ItemController extends BaseController{
    function __construct()
    {
        $this->folder ='item';
    }
    public function showItem(){
        echo '11111';
    }

    public function showSmt()
    {
        echo 'bla bla';
    }
    public function helloWorld()
    {
        $this->render('show-item');
    }
}
