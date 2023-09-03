<!DOCTYPE html>
<html>

<head>
    <title>Sign in page</title>
    <link rel="stylesheet" href="signinform.css">

</head>

<body>
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <form action="signinVerify.php" method="post">
            <label for="User"></label><br>
            <input type="text" id="User" name="User" class="un" placeholder="Username"><br>

            <label for="Pass"></label><br>
            <input type="password" id="Pass" name="Pass" class="pass" placeholder="Password"><br>

            <label for="AcNo"> </label><br>
            <input type="number" id="AcNo" name="AcNo" class="carno" placeholder="Account Number"><br>

            <label for="Pin"> </label><br>
            <input type="number" id="Pin" name="Pin" class="carno" placeholder="Pin"><br>

            <!-- <input type="submit" value="Login"> -->
            <input class="submit" type="submit" align="center" value="Log-in"></input>


        </form>
    </div>
</body>

</html>