

<?php
class DB{
    static public function connect(){
        $conn=new PDO("mysql:host=localhost;dbname=gestion_hotel","root","");
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

const RESERVATION_STATUS_ACCEPTED=1;
const RESERVATION_STATUS_REJECTED=0;
const RESERVATION_STATUS_PENDING=11;

function getStatusText(int $status){
        switch ($status) {
            case RESERVATION_STATUS_ACCEPTED :
                return 'accepté';
            case RESERVATION_STATUS_REJECTED :
                return 'refusé';
            case RESERVATION_STATUS_PENDING :
                return 'En attent';
            default:
            return 'non connu';
                break;
            }
}
?>

