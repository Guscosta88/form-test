<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if(!empty($username)){
    if(!empty($password)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "form";

        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error('.mysqli_connect-errno().')'
            . rsqli_connect_error());
        }
        else{
            $sql = "INSERT INTO account (username, password)
            values ('$username', '$password')"; //important
            if ($conn->query($sql)){
                echo "New record is inserted successfully";
            }
            else{
                echo "Error: ". $sql . "<br>". $conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "Please enter password";
        die();
    }
}
else{
    echo "Please enter your name";
    die();
}

?>