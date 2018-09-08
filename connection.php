<?php

	// Creates link to the database
	$link = mysqli_connect("localhost", "root", "","users");
	
	//(nameOfHost,"userName","passwordOfDatabase","NameofDataBase")
	if(mysqli_connect_error())
	{
		die("ERROR!");
	}

?>