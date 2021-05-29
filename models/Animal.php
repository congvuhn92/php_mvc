<?php
class Animal {
    public static function getAll(){
        $db= DB::getInstance();
        $req = $db->query('SELECT * FROM animal');
        return $req->fetchAll();
    }
    public static function search($keyword)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM animal WHERE name LIKE "%' . $keyword . '%"' .
            ' OR leg LIKE "%' . $keyword . '%"' .
            ' OR height LIKE "%' . $keyword . '%"'.
            ' OR weight LIKE "%' . $keyword . '%"';
        $req = $db->query($sql);
        return $req->fetchAll();
    }
}