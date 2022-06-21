<?php
class Admin{
    public function getAdmin($data){
        $stmt = DB::connect()->prepare('SELECT * FROM admin WHERE name =:name');
        $stmt->bindParam(':name', $data['name']);
        $stmt->execute();
        return $stmt->fetch();
    }
    static public function loginAdmin($id){
        $stm=DB::connect()->prepare('SELECT * FROM admin where email="?"');
        $stm->execute([$id]);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        $stm = null;
     }
    }
?>