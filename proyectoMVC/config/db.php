<?php

class Connect
{
    public static function connection()
    {
        //$cnx = new mysqli("localhost","DB_USER","DB_PASSWORD","DB_NAME")
        $cnx = new mysqli("localhost","root","","Villarreal");
        return $cnx;
    }
}

?>