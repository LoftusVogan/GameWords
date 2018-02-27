<?php

namespace application\models;


use application\core\Model;

class Authorization extends Model
{
    public function register($mail, $password)
    {
        $mail = $this->db->quote($mail);
        $password = md5($password);
        //print $mail.' '.$password;
        $sql = "SELECT id, password FROM users WHERE email=$mail";
        if(!$stmt = $this->db->pdo->query($sql)){
            return false;
        } else {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if(!$row){
                return false; // нет такого мыла в базе
            } else {
                $db_password = $row['password'];
                $db_id = $row['id'];

                if($password == $db_password){
                    $hash = md5(rand(0, 6400000));
                    $sql_update = "UPDATE ts_users SET hash='$hash' WHERE id='$db_id'";
                    if($this->db->exec($sql_update)){
                        setcookie("id", $db_id, time() + 3600);
                        setcookie("hash", $hash, time() + 3600);
                        return true;
                    }else{
                        print 'Exception';
                    }
                }
                return false;
            }
        }
    }

}