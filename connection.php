<?php


	$link = mysqli_connect("localhost", "root", "","Users");
//(nameOfHost,"userName","passwordOfDatabase","NameofDataBase")
	if(mysqli_connect_error())
	{
		die("ERROR!");
	}

?>