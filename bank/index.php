<!DOCTYPE html>

<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error . "\t");
} else {
    // echo("Connected succesfully\n");
}

$sql1 = "CREATE DATABASE bank_accounts";

if ($conn->query($sql1) == TRUE) {
    // echo("Database created successfully");
} else {
    // echo("Error creating database: " . $conn->error . "\t");
}


$dbname = "bank_accounts";

$conn2 = new mysqli($servername, $username, $password, $dbname);

if ($conn2->connect_error) {
    // die("Connection failed: " . $conn2->error);
} else {
    // echo("connected succesfully");
}
$sql2 = "CREATE TABLE Account_info(
    Userid INT(6),
    user VARCHAR(30) NOT NULL,
    email_id VARCHAR(50) NOT NULL,
    passwerd VARCHAR(30) NOT NULL,
    pin INT(6) NOT NULL,
    balance INT DEFAULT 0)
    ";

if ($conn2->query($sql2) === TRUE) {
    // echo "Accounts_info table created successfully";
} else {
    // echo "Error creating table: ". $conn2->error . "\t";
}

$conn2->close();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Horizon Bank</title>

    <style type="text/css">
        body {
            height: 125vh;
            margin-top: 2px;
            padding: 4px;
            /* padding-top: 40px; */
            background-color: silver;
            font-family: sans-serif;
            /* background-image: url(BANK.jpg); */
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #112D32;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 18px;
            text-decoration: none;
        }


        li a:hover:not(.active) {
            background-color: #4F4A41;
        }

        .active {
            background-color: #254E58;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php"> &nbsp; &nbsp; Home &nbsp; &nbsp; </a>
                </li>
                <li>
                    <a href="contactus.html">Contact us &nbsp; &nbsp; </a>
                </li>
                <li>
                    <a href="signuppage.html"> Signup &nbsp; &nbsp; </a>
                </li>
                <li>
                    <a href="signinform.php">Sign in &nbsp; &nbsp; </a>
                </li>




            </ul>
        </nav>
    </header>
    <font color="Navy">

        <h1 style="text-align: center; margin-top: 50px; margin-bottom: 50px;">Welcome to The New Horizon Bank!</h1>

        <div>
            <img src="BANK.jpg" alt="Bank" height="1000" width="1500">
        </div>




</body>

</html>