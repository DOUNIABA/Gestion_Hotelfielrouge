
<?php
class User
{
    public function getUser($data)
    {
        $stmt = DB::connect()->prepare('SELECT * FROM client WHERE email =:email');
        $stmt->bindParam(':email', $data['email']);
        $stmt->execute();
        return $stmt->fetch();
    }
    static public function createuser($data)
    {
        $stm = DB::connect()->prepare('INSERT INTO client (name, email,  password) VALUES (:name,:email,:password)');
        $stm->bindParam(':name', $data['name']);
        $stm->bindParam(':email', $data['email']);
        $stm->bindParam(':password', $data['password']);
        if ($stm->execute()) {
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['id'] = $data['id'];
            header('location:login');
        } else {
            return 'error';
        }
        $stm = null;
    }
   
}
?>