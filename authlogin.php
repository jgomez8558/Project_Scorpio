<?php

    // Starts session
    session_start();

    // Stores the user's ID in a variable
    $temp = $_SESSION['id'];

    // If id is null then return to home page.
    if (is_null($temp)){

        header("Location: /braintrendy");
        exit;
    }

?>