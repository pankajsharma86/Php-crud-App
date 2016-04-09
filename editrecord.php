<?php
require_once('databaseconfig.php');

function redirect($url){
		header("Location: $url");
	}

	

$id = $_GET['record'];

$sql = "SELECT * FROM addresses WHERE id=".$id;
		$result = mysql_query($sql);
		if(!$result){
			die("Error: " . mysql_error());
		}

$row = mysql_fetch_array($result);
// ..........................

if(isset($_POST['update'])){
		$id = $_GET['record'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		
		
$update = "UPDATE addresses SET name='".$name. "' ,address='". $address. "' ,phone=" .$phone. " ,email='" .$email. "' WHERE id=".$id."";
		$result1 = mysql_query($update);
		if(!$result1){
			die("Error: " . mysql_error());
		}
		
		redirect("index.php");
	}
?>

<form method="post" name="addressbook" action="editrecord.php?record=<?php echo $id;?>" >

	<table>
    	<tr>
        	<th><label for="name"> Name</label></th>
            <td><input type="text" name="name" id="name" value="<?php echo $row['name']?>" required></td>
        </tr>
        
        <tr>
        	<th>Address</th>
            <td><textarea cols="30" rows="22" maxlength="200" style="resize:none; width:250px; height:120px;" name="address" id="address" placeholder="Enter Address" required><?php echo $row['address']?></textarea></td>
        </tr>
        
        <tr>
        	<th><label for="phone">Phone</label></th>
        	<td>(+<input type="tel" id="phone" name="phone" maxlength="9"  placeholder="9 digits" value="<?php echo $row['phone']?>" pattern="[0-9]{9}" required>)</td>
        </tr>
        
        <tr>
        	<th><label for="email">Email</label></th>
        	<td><input type="email" id="email" name="email" placeholder="abcd@xyz.com" value="<?php echo $row['email']?>" required></td>
        </tr>
        
        <tr align="center">
		<td colspan="2"><input type="submit" id="update" name="update" value="Update">
            	
		</tr>
    </table>
</form>