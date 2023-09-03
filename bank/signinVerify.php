<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <style>
        body {
            align-content: center;
        }

        .container {
            background-color: #254e58;
            width: 80%;
            height: 500px;
            align-self: center;
            margin: 3em auto;
        }

        .text {
            width: 70%;
            height: 400px;
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

    $user = $_POST['User'];
    $pass = $_POST['Pass'];
    $AcNo = $_POST['AcNo'];
    $Pin = $_POST['Pin'];


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

    $sql = "SELECT * FROM Account_info WHERE (Userid = '$AcNo') and (passwerd='$pass') and (pin='$Pin');";

    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo "<div class='container'><div class='text'><p>!!! Welcome " . $row['user'] . " !!!<br><br>Your account balance is: Rs. " . $row['balance'] . ".<br><br><p>
<form action='index.php'><button class='submit'>Back to Homepage</button></form></div></div>";
    } else {
        echo "<script>
alert('Account not found. Please try again.');
window.location.href='signinform.php';  
</script>";
    }
    ?>

</body>

</html>