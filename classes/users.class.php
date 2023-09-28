
<?php

class Users extends DBH {


    protected function getUser($name){

        $sql = "SELECT * FROM USERS WHERE users_firstname =?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);

            $results =$stmt->fetchAll();
            return $results;
    }
    protected function setUser($userid,$firstname,$lastname,$dateofbirth){

        $sql ="INSERT INTO users (users_id,users_firstname,users_lastname,users_datebirth)values(?,?,?,?);";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$userid,$firstname,$lastname,$dateofbirth]);

    }
}