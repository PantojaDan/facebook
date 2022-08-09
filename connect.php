<?php

try{    
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'credentials'
    );
}catch(Exception $e){
    echo "Error ".$e->getMessage();
}

?>