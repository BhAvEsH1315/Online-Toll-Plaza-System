<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Verification</title>
    <style>
        body {
            align-content: center;
        }

        .container {
            background-color: #254e58;
            width: 80%;
            height: 800px;
            align-self: center;
            margin: 3em auto;
        }

        .text {
            width: 70%;
            height: 515px;
            background-color: antiquewhite;
            margin: 2em auto;
            border-radius: 0.7cm;
            text-align: center;
            font-size: 30px;
        }

        p {
            padding-top: 20px;
        }

        .submit {
            width: 40%;
            height: 80px;
            cursor: pointer;
            border-radius: 5em;
            color: #fff;
            background: linear-gradient(to right, #254e58, #112d32);
            border: 0;
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-family: system-ui;
            margin-left: 35%;
            font-size: 28px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.404);
            margin: 0.8em auto;
        }
    </style>

</head>

<body style="background-color:#4f4a41;">
    <?php

    $user = $_GET['User'];
    $pass = $_GET['pass'];
    $email = $_GET['email'];
    $balance = $_GET['bal'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank_accounts";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        // die("Connection failed: " . $conn->error);
    } else {
        // echo("connected succesfully\n");
    }

    if ($user != NULL && $pass != NULL && $email != NULL) {
        $check = "SELECT * FROM Account_info WHERE username = $user && passwerd = $pass && email = $email ";
        $result = $conn->query($check);
        if (!$result) {
            // || mysqli_num_rows($result)==0

            $pin = random_int(100, 900);
            $userid = random_int(100000, 900000);
            $sql1 = "INSERT INTO Account_info VALUES('$userid', '$user', '$email', '$pass', '$pin', '$balance');";



            if ($conn->query($sql1) == TRUE) {

                echo "<div class='container'><div class='text'><p>!!! Account Created Succesfully !!!<br><br>Account Details:<br><br>Your account number is : " . $userid . "<br>Your account pin is : " . $pin . "<br>Your account balance is : Rs. " . $balance . "<br>!!! Happy Banking :) !!!<p>
        <form action='index.php'><button class='submit'>Back to Homepage</button></form></div></div>";
            } else {

                die("Error creating account. Please Try again." . $conn->error);
            }
        } else {
            echo "<script>
                alert('Account already exists');
                window.location.href='index.php';  
                </script>";
        }
    } else {
        echo "<script>
                alert('Please enter all credentials');
                window.location.href='index.php';  
                </script>";
    }





    ?>
</body>

</html>