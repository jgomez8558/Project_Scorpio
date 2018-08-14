<?php

if(array_key_exists("submit", $_POST)){
    
    include ("connection.php");

    // Hashing password
    $options = [
        'cost' => 11,
    ];

    $passwordFromInput = $_POST['password'];

    $hash = password_hash($passwordFromInput, PASSWORD_BCRYPT, $options);

    // Creating Date
    $dt = new DateTime();
    $currentTime =  $dt->format('Y-m-d H:i:s');

    // Adding User to the DataBase in profile table
    $query = "INSERT INTO profile (firstName, lastName, address, email, phone, role, password) 
                VALUES ('".mysqli_real_escape_string($link, $_POST['fname'])."', '".mysqli_real_escape_string($link, $_POST['lname'])."', '".mysqli_real_escape_string($link, $_POST['address'])."','".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['phone'])."', '".mysqli_real_escape_string($link, $_POST['role'])."', '".mysqli_real_escape_string($link, $hash)."')";

    // Connects and sends the query to the DataBase and goes to the login page
        mysqli_query($link, $query);

    if(isset($_POST['submit'])) {

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
        
        <link rel="stylesheet" type="text/css" href="registration.css">
    </head>

    <body>
        <div class="container">
            <div class="card card-container">
                <p id="profile-name" class="profile-name-card"></p>
                <form method = "POST" class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" id="inputProfile" name = "fname" class="form-control" placeholder="First Name" required autofocus>
                     <input type="text" id="inputProfile" name = "lname" class="form-control" placeholder="Last Name" required autofocus>
                     <input type="text" id="inputProfile" name = "address" class="form-control" placeholder="Address" required autofocus>
                    <input type="email" id="inputProfile" name = "email" class="form-control" placeholder="Email address" required autofocus>
                    <input type="text" id="inputProfile" name = "phone" class="form-control" placeholder="Phone" required autofocus>
                    <input type="radio" checked="checked" name="role" value="1">Student<br>
                    <input type="radio" name="role" value="2">Teacher
                    <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>
                    <input class="btn btn-lg btn-primary btn-block btn-signin" type = "submit" name = "submit" id = "btn_sub" value = "Registration">
                </form><!-- /form -->
            </div><!-- /card-container -->
        </div><!-- /container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="myscripts.js"></script>
    </body>

</html>