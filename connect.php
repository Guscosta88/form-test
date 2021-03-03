<?php

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$salt = "codeflix";
$password_encrypted = sha1($password.$salt);

if(!empty($gender)){
if(!empty($phone)){
if(!empty($email)){
if(!empty($address)){
if(!empty($lastname)){
if(!empty($firstname)){
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
            $sql = "INSERT INTO account (username, firstname, lastname, gender, address, email, phone, password)
            values ('$username','$firstname','$lastname','$gender','$address','$email','$phone','$password_encrypted')"; //important
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
    echo "Please enter your User name";
    die();
}
}
else{
    echo "Please enter your First name";
    die();
}
}
else{
    echo "Please enter your Last name";
    die();
}
}
else{
    echo "Please enter your Address";
    die();
}
}
else{
    echo "Please enter your E-mail";
    die();
}
}
else{
    echo "Please enter your Phone";
    die();
}
}
else{
    echo "Please enter your Gender";
    die();
}

?>