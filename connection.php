<?php

<<<<<<< Updated upstream
	// Creates link to the database
	$link = mysqli_connect("localhost", "root", "","users");
	
	//(nameOfHost,"userName","passwordOfDatabase","NameofDataBase")
=======

	$link = mysqli_connect("steelhawktactical.com", "steelhaw_admin1", "pokemon1!","steelhaw_users2");
//(nameOfHost,"userName","passwordOfDatabase","NameofDataBase")
>>>>>>> Stashed changes
	if(mysqli_connect_error())
	{
		die("ERROR!");
	}

?>
