

<?php
class DB{
    static public function connect(){
        $conn=new PDO("mysql:host=localhost;dbname=hotel_management","root","");
        $conn->exec("set names utf8");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $conn;
    }   
    public function GetData($req){
        try{
            return $this->connect()->prepare($req);
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    } 

}

?>

