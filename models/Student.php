<?php

class Student
{
    public static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM students');
        return $req->fetchAll();
    }

    public static function search($keyword)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM students WHERE first_name LIKE "%' . $keyword . '%"' .
            ' OR last_name LIKE "%' . $keyword . '%"' .
            ' OR address LIKE "%' . $keyword . '%"';
        $req = $db->query($sql);
        return $req->fetchAll();
    }

    public static function create($data)
    {
        $db = DB::getInstance();
        $firstName = isset($data['firstname']) ? $data['firstname'] : '';
        $lastName = isset($data['lastname']) ? $data['lastname'] : '';
        $address = isset($data['address']) ? $data['address'] : '';
        $age = isset($data['age']) ? $data['age'] : 0;
        $gender = isset($data['gender']) ? $data['gender'] : '';
        $score = isset($data['score']) ? $data['score'] : 0;
        $sql = "INSERT INTO `students`(`first_name`, `last_name`, `address`, `age`, `gender`, `score`)
                VALUES ('" . $firstName . "', '" . $lastName . "', '" . $address . "',  $age, '" . $gender . "', $score) ";
        $req = $db->query($sql);
    }

    public static function getStudent($id)
    {
        $db = DB::getInstance();
        $sql = "SELECT * FROM students WHERE id = $id";
        $req = $db->query($sql);
        return $req->fetch();
    }

    public static function update($id, $data)
    {
        $firstName = isset($data['firstname']) ? $data['firstname'] : '';
        $lastName = isset($data['lastname']) ? $data['lastname'] : '';
        $address = isset($data['address']) ? $data['address'] : '';
        $age = isset($data['age']) ? $data['age'] : 0;
        $gender = isset($data['gender']) ? $data['gender'] : '';
        $score = isset($data['score']) ? $data['score'] : 0;
        $db = DB::getInstance();
        $sql = "UPDATE students
                SET first_name= '" . $firstName . "', 
                    last_name= '" . $lastName . "', 
                    address= '" . $address . "', 
                    age= $age, 
                    gender= '" . $gender . "', 
                    score= '" . $score . "'
                WHERE id = $id";
        $req = $db->query($sql);
    }

    public static function delete($id)
    {
        $sql =  "DELETE FROM students WHERE id = $id";
        $db = DB::getInstance();
        $db->query($sql);
    }
}