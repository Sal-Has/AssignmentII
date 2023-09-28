<?php



class Test extends DBH{
 

    public function getuser(){
        $sql="SELECT * FROM USERS;";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row["users_firstname"] . "<br>" ;
        }
    }
 
    public function getuserStmt($firstname,$lastname){
        $sql="SELECT * FROM USERS WHERE users_firstname=? AND users_lastname=?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname,$lastname]);
        $names= $stmt->fetchAll();
    

    foreach($names as $name){
        echo $name["users_firstname"] . "<br>" ;
    }


}

public function setuserStmt($userid,$firstname,$lastname,$datebirth){
    $sql="INSERT INTO users (users_id,users_firstname,users_lastname,users_datebirth)values(?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userid,$firstname,$lastname,$datebirth]);

   
}
}