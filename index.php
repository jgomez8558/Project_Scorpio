<?php

    // Starts session
    session_start();

    // Connects to the Database
    include("connection.php");

    // Message variable
    $message = "";

    // Checks users when logging in on email and hash password from database
    if (!empty($_POST["login"])) {

        $hashedPasswordFromDB = mysqli_query($link, "SELECT password FROM profile WHERE email='" . $_POST["email"] . "'");

        $pass = mysqli_fetch_row($hashedPasswordFromDB);

        $passwordString = $pass[0];

        $result = mysqli_query($link, "SELECT * FROM profile WHERE email='" . $_POST["email"] . "' and password = '" . $passwordString . "'");
        $row = mysqli_fetch_array($result);

        $auth = password_verify($_POST['password'], $passwordString);

        // If password matches from databse then collects the userId & role to be use in all pages
        if ($auth === true) {

            $_SESSION['id'] = $row['userId'];
            $_SESSION['role'] = $row['role'];

            // Navigates to the home page
            header("Location: /braintrendy/home.php");

        } else {

            // Error message for unable to login
            $message = "Password and Email did not match";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    // Ends session when logging out
    if (!empty($_POST["logout"])) {
        $_SESSION["id"] = "";
        session_destroy();
    }

?>

<!DOCTYPE html>
<html>

<title>Login</title>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>
            <a class="inactive underlineHover" href="/braintrendy/registration.php" class="forgot-password">REGISTER</a>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="POST">
                <input type="email" id="login" class="fadeIn second" name="email" placeholder="email">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" name="login" class="fadeIn fourth" value="Login">
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="myscripts.js"></script>

</body>

</html>