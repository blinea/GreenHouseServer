<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $email = $_POST['email'];
        $isBlocked = $_POST['isBlocked'];

        $query = "UPDATE user SET isBlocked = '$isBlocked' WHERE email = '$email'";
        $result = $mysql -> query($query);

        if ($mysql->affected_rows > 0) {
            if ($result === TRUE) {
                echo "User Blocked";
            }else{
                echo "Error";
            }
        }else{
            echo "Found Nothing";
        }

        $mysql->close();
    
    }
?>