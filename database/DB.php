<?php
class Connection{
    public function connect(){
        $conn=new PDO("mysql:host=localhost;dbname=gestion_hotel",root,"");
        return $conn;
    }   
    public function GetData($req){
        try{
            return $this->connect()->prepare($req);
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    } 
//     public function getAsset($par){
//         return ('http://localhost/Gestion_Hotelfielrouge/views/assets/'.$par.'')
//     }
}
?>