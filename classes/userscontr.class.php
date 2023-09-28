

<?php

class UsersContr extends Users{


    public function createUser($userid,$firstname,$lastname,$dateofbirth){
        $this->setUser($userid,$firstname,$lastname,$dateofbirth);
    }
}