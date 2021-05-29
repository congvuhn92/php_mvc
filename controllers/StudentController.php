<?php
require_once('BaseController.php');
require_once(__DIR__ . '/../models/Student.php');

class StudentController extends BaseController
{

    /**
     * StudentController constructor.
     */
    public function __construct()
    {
        $this->folder = 'student';
    }

    public function listStudent()
    {
        $keyword = isset($_POST['search']) ? $_POST['search'] : '';
        if ($keyword) {
            $students = Student::search($keyword);
        } else {
            $students = Student::getAll();
        }
        $this->render('list', ['students' => $students, 'keyword' => $keyword]);
    }
}