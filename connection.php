<?php

	// Connects to the Database
	$link = mysqli_connect("localhost", "root", "","users");
	// (nameOfHost,"userName","passwordOfDatabase","NameofDataBase")
	if(mysqli_connect_error())
	{
		die("ERROR!");
	}

?>