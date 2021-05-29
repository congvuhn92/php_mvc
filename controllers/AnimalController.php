<?php
require_once('BaseController.php');
require_once(__DIR__ . '/../models/Animal.php');

class AnimalController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'animal';
    }

    public function listAnimal()
    {
        $keyword = isset($_POST['search']) ? $_POST['search'] : '';
        if (isset($_POST['search'])) {
            $animals = Animal::search($keyword);
        } else {
            $animals = Animal::getAll();
        }
        $this->render('list', ['animals' => $animals, 'keyword'=>$keyword]);
    }
}