<?php

    // Checks for user submission
    if (array_key_exists("submit", $_POST)) {

        // Connects to Database
        include("connection.php");

        // Hashing password
        $options = [
            'cost' => 11,
        ];

        $passwordFromInput = $_POST['password'];

        $hash = password_hash($passwordFromInput, PASSWORD_BCRYPT, $options);

        // Add user to the database in profile table
        $query = "INSERT INTO profile (firstName, lastName, address, email, phone, role, password) 
                    VALUES ('" . mysqli_real_escape_string($link, $_POST['fname']) . "', '" . mysqli_real_escape_string($link, $_POST['lname']) . "', '" . mysqli_real_escape_string($link, $_POST['address']) . "','" . mysqli_real_escape_string($link, $_POST['email']) . "', '" . mysqli_real_escape_string($link, $_POST['phone']) . "', '" . mysqli_real_escape_string($link, $_POST['role']) . "', '" . mysqli_real_escape_string($link, $hash) . "')";

        // Connects and sends the query to the database and navigates goes to the login page
        mysqli_query($link, $query);

        if (isset($_POST['submit'])) {

            header("Location: /braintrendy");
            exit;
        }

    }

?>

<!DOCTYPE html>
<html>

<title>Register</title>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Register </h2>
            <a class="inactive underlineHover" href="/braintrendy/index.php">SIGN IN</a><br><br>

            <!-- Login Form -->
            <form method="POST">
                <input type="text" id="inputProfile" name="fname" class="fadeIn second" placeholder="First Name"
                    required autofocus>

                <input type="text" id="inputProfile" name="lname" class="fadeIn second" placeholder="Last Name"
                    required autofocus>

                <input type="text" id="inputProfile" name="address" class="fadeIn second" placeholder="Address"
                    required autofocus>

                <input type="email" id="login" name="email" class="fadeIn second" name="email" placeholder="email">

                <input type="text" id="inputProfile" name="phone" class="fadeIn second" placeholder="Phone" required
                    autofocus><br><br>

                <div class="fadeIn second">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Role</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="role">
                        <option selected>Choose...</option>
                        <option value="1">Student</option>
                        <option value="2">Teacher</option>

                    </select>
                </div><br>

                <input type="password" id="password" name="password" class="fadeIn third" placeholder="password">

                <input type="password" name="confirm_password" id="confirm_password" class="fadeIn third" placeholder="Confirm password">
                <p>
                    <span id='message'></span>
                </p>

                <input type="submit" name="submit" class="fadeIn fourth" value="Register">
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="myscripts.js"></script>
    <script src="registration.js"></script>

</body>

</html>