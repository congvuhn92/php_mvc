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
}