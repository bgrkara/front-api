<?php
class sessionSystem{
    static function control(){
        if (isset($_SESSION['email']) and isset($_SESSION['password'])){
            return true;
            header("Location:admin.php");
        }else{
            return false;
        }
    }
}