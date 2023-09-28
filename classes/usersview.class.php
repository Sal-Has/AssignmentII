

<?php

class UsersView extends Users{

    public  function showUser($name){

        $results=$this->getUser($name);

        if(!empty($results)){
            foreach($results as $result){
                echo "Full name: ".$result["users_firstname"]." ".$result["users_lastname"] . "<br>";
                echo "DateofBirth: ".$result["users_datebirth"];
            }
    }


}
}