<?php

session_start();

include("connection.php");

$message = "";

if (!empty($_POST["login"])) {


    $hashedPasswordFromDB = mysqli_query($link, "SELECT password FROM profile WHERE email='" . $_POST["email"] . "'");

    $pass = mysqli_fetch_row($hashedPasswordFromDB);

    $passwordString = $pass[0];

    $result = mysqli_query($link, "SELECT * FROM profile WHERE email='" . $_POST["email"] . "' and password = '" . $passwordString . "'");
    $row = mysqli_fetch_array($result);
    //        if(is_array($row)) {

    $auth = password_verify($_POST['password'], $passwordString);

    if ($auth === true) {

        $_SESSION['name'] = $row['firstName'];
        //             header("Location: /braintrendy/home.php");
        header("Location: /braintrendy/home.php");

    } else {
        $message = "Password and Email did not match";
        echo $message;
    }
}

if (!empty($_POST["logout"])) {
    $_SESSION["ID"] = "";
    session_destroy();
}

?>

<!DOCTYPE html>
<html> 

    <title>Login</title>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">  
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>
        <div class="container">
            <div class="card card-container">
            <form>
                <h1>Employer Log in</h1>
                    <div class="inset">
                        <p>
                            <label for="email">EMAIL ADDRESS</label>
                            <input type="text" name="email" id="email">
                        </p>
                        <p>
                            <label for="password">PASSWORD</label>
                            <input type="password" name="password" id="password">
                        </p>
                        <p>
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me for 14 days</label>
                        </p>
                    </div>
                 <p class="p-container">
                        <span>Forgot password ?</span>
                        <input type="submit" name="go" id="go" value="Log in">
                </p>
        </form>








                <!-- <p id="profile-name" class="profile-name-card"></p>
                <form method = "POST" class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="inputEmail" name = "email" class="form-control" placeholder="Email address" required autofocus>
                    <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>
                    <input class="btn btn-lg btn-primary btn-block btn-signin" type = "submit" name = "login" id = "btn_sub" value = "Login">
                </form>/form -->
                <a href="/braintrendy/registration.php" class="forgot-password">
                    Register!
                </a>
            </div><!-- /card-container -->
        </div><!-- /container -->
        <script
                src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="myscripts.js"></script>
    </body>

</html>