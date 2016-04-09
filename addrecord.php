<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Question 3</title>
</head>

<body>


<h2>Enter Personal Details</h2>

<form method="post" name="addressbook" action="index.php" >
	<table>
    	<tr>
        	<th><label for="name"> Name</label></th>
            <td><input type="text" name="name" id="name" placeholder="Enter your name" required></td>
        </tr>
        
        <tr>
        	<th>Address</th>
            <td><textarea cols="30" rows="22" maxlength="200" style="resize:none; width:250px; height:120px;" name="address" id="address" placeholder="Enter Address" required></textarea></td>
        </tr>
        
        <tr>
        	<th><label for="phone">Phone</label></th>
        	<td>(+<input type="tel" id="phone" name="phone" maxlength="9"  placeholder="9 digits" pattern="[0-9]{9}" required>)</td>
        </tr>
        
        <tr>
        	<th><label for="email">Email</label></th>
        	<td><input type="email" id="email" name="email" placeholder="abcd@xyz.com" required></td>
        </tr>
        
        <tr align="center">
		<td colspan="2"><input type="submit" id="add" name="add" value="Add">
            	<input type="reset"  id="reset" name="reset" value="Clear Form"></td>
		</tr>
    </table>
</form> <!--form creation to add -->



</body>
</html>