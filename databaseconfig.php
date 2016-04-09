<?php
// 1. Configuring database	
	$mycon = mysql_connect("localhost", "root", "test1234");
	if(!$mycon){
			die("Connection Failed:" . mysql_error());
		} 

// 2. Connecting to database		
	mysql_select_db("address_book", $mycon);
?>