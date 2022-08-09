<?php

include 'connect.php';

if(isset($_POST['session'])){
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    if((empty($correo))||(empty($password))){
        header("Location: index.php");
    }else{
        $query = "INSERT INTO users(email, password) VALUES('$correo','$password')";
        $result = mysqli_query($conn,$query);

        if($result){
            header("Location: index.php");
        }else{
            die('Querie failed');
        }
    }
}


?>