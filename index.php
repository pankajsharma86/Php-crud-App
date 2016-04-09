<?php
session_start();
// Form Processing

// Database connection
if(isset($_SESSION["message"])){
		echo $_SESSION["message"];
		
	}

require_once('databaseconfig.php');


// Form processing
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
	
	
// Passing insert Query
	
	// 3. Passing query
	$myquery = mysql_query("INSERT INTO addresses (name, address, phone, email) VALUES ('$name', '$address','$phone', '$email')");
	$sql = "SELECT * FROM addresses";
		$result = mysql_query($sql);
		// 4. Checking query error
		if(!$myquery && !$result){
				die("Error: " . mysql_error());
			}
	
	?>
    
    <table border=".5" cellpadding="20">
	<tr>
    	<th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th bgcolor="#99CC99" colspan="2"><a href="addrecord.php">Add Record</a></th>
    </tr>
    
    <?php while($row = mysql_fetch_array($result)){ //Creates a loop to loop through results
	
	$id = $row['id'];
	?>
	 
     <tr>
     	<td><?php echo $row['name']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['phone']?></td>
        <td><?php echo $row['email']?></td>
        <td><a href="editrecord.php?record=<?php echo $row['id'];?>">Edit</a></td>
        <td><a href="deleterecord.php?record=<?php echo $row['id'];?>">Delete</a></td>
	</tr>
       
        <?php } ?>	
    </table> 
	
	
	<?php	
	} else {
			
		$sql = "SELECT * FROM addresses";
		$result = mysql_query($sql);
		if(!$result){
			die("Error: " . mysql_error());
		}
		?>
		
        	<table border=".5" cellpadding="20">
	<tr>
    	<th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th bgcolor="#99CC99" colspan="2"><a href="addrecord.php">Add Record</a></th>
    </tr>
    
    <?php while($row = mysql_fetch_array($result)){ //Creates a loop to loop through results
	$id = $row['id'];
	?>
	 
     <tr>
     	<td><?php echo $row['name']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['phone']?></td>
        <td><?php echo $row['email']?></td>
        <td><a href="editrecord.php?record=<?php echo $row['id'];?>">Edit</a></td>
        <td><a href="deleterecord.php?record=<?php echo $row['id'];?>">Delete</a></td>
	</tr>
        
        <?php } ?>	
	
<?php     

	}
 

 mysql_close($mycon); ?>

</table>
