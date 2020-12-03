<?php 
session_start();
include("confs/config.php");

$nameErr = $emailErr = $phoneErr = $addressErr = "";
$name = $email = $phone = $address = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"] )) {
        $nameErr = "Name is required";
    } else {
        $name =  $_POST["name"];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if(empty($_POST["email"] )) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if(empty($_POST["phone"] )) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = $_POST["phone"];
        if (!preg_match("/^[1-9' ]*$/",$name)) {
            $phoneErr = "Only numbers allowed";
        }
    }

    if(empty($_POST["address"] )) {
        $addressErr = "Address  is required";
    } else {
        $address = $_POST["address"];
    }
}

$sql = "INSERT INTO orders (name, email, phone, address, created_date, modified_date) VALUES
('$name','$email','$phone','$address',now(),now() )";

mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #f2f2f2;
        }
        .msg {
            width: 350px;
            height: 150px;
            border: 2px solid  #006FCD;
            border-radius: 15px;
            padding: 15px;
            background: #fff;
        }
        @media only screen and (max-width:700px) {
            .msg {
                width: 250px;
            }
        }


    </style>
</head>
<body>
    <div class="msg">
        <h1>Order submitted!</h1>

        <div class="done">
            Your order have been submitted.Item will deliever soon.
        <a href="index.php">Back to Store@</a>
        </div>
    </div>
</body>
</html>
