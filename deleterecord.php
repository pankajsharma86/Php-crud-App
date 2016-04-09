<?php
	function redirect($url){
		header("Location: $url");
	}

	require_once('databaseconfig.php');
	session_start();

	$id = $_GET['record'];
	
	$sql = "DELETE FROM addresses where id =".$id. " LIMIT 1";
	
	$result = mysql_query($sql);

// 4. Checking query error
	if(!$result){
			die("Error: " . mysql_error());
		}
	else{
		$_SESSION["message"] = "Record Deleted";
		redirect("index.php");
		$_SESSION["message"] = "";
		}
		
// 5. closing connection
 mysql_close($mycon); 

?>