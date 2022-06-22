<?php
class Admin
{
    public function getAdmin($data)
    {
        $stmt = DB::connect()->prepare('SELECT * FROM admin WHERE name =:name');
        $stmt->bindParam(':name', $data['name']);
        $stmt->execute();
        return $stmt->fetch();
    }
    static public function loginAdmin($email,$pass)
    {
        $stm = DB::connect()->query("SELECT * FROM admin where email='$email' and password='$pass'");
        return $stm->fetch();
        $stm = null;
    }
}
