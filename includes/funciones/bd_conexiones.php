<?php
    $conn = new mysqli('localhost:3306','root','root','glpwebcamp');

        if($conn->connect_error){
            echo $error-> $conn->connect_error;
        }


?>