<?php

try{    
    $conn = mysqli_connect(
        'us-cdbr-east-06.cleardb.net',
        'b04c7a660a6f0e',
        'ea9b1ec1',
        'heroku_43221ca6dc1deae'
    );
    if($conn){
        echo "connected";
    }
}catch(Exception $e){
    echo "Error ".$e->getMessage();
}

?>