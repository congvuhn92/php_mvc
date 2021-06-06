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

    public function add()
    {
        if (!empty($_POST)) {
            Student::create($_POST);
            return $this->listStudent();
        }
        $this->render('add-student');
    }

    public function edit()
    {
        $studentId = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($studentId == 0) {
            return $this->listStudent();
        }
        $student = Student::getStudent($studentId);
        if (!empty($_POST)) {
            Student::update($studentId, $_POST);
            return $this->listStudent();
        }
        $this->render('edit-student', ['student' => $student]);
    }

    public function delete()
    {
        $studentId = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($studentId != 0) {
            Student::delete($studentId);
        }
        return $this->listStudent();
    }
}