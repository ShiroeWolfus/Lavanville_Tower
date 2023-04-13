<?php

require('database.php') ;

class UserDAO extends Controller {

    public function insert($data){

        $db = connectToDB();
        $Firstname = $data['firstname'];
        $Lastname = $data['lastname'];
        $Email = $data['email'];
        $Password = $data['password'];
        $Password = hash('sha256', $Password,);
        $Username = $data['username'];
        $sth = $db->prepare("
                    INSERT INTO user(nom,prénom,email,password, username)
                    VALUES (:firstname, :lastname, :email, :password, :username)
                ");

        try {
            $sth->execute(array(
                ':username' => $Username,
                ':firstname' => $Firstname,
                ':lastname' => $Lastname,
                ':password' => $Password,
                ':email'=>$Email    
            ));
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function verify($data)
    {
        $db = connectToDB();
        $Username = $data['username'];
        $Password = hash('sha256', $data['password']);
        $sth = $db->prepare("
                    SELECT *
                    FROM user
                    WHERE username = :username
                ");


        $sth->execute(array(
            ':username' => $Username,

        ));
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        if ($result != FALSE) {

            if ($result['password'] == $Password) {
                $_SESSION['username'] = $Username;
                $_SESSION['id'] = $result['id_user'];
                return 10;
            } else {
                return 12;
            }
        } else {
            return 11;
        }
    }
}
