<?php
include_once 'DBConnector.php';
include_once 'user.php';
$conn = new DBConnector;//Database connection is made here
//The data insert code begins here
if(isset($_POST['btn-save'])){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$city=$_POST['city_name'];
	
	//Creation of a user object using a constructor that will be used to initialize our variables
	$user = new User($first_name,$last_name,$city);
	$res = $user->save();
	
	//Checking if the operation save took place successfully
	if($res){
		echo "Save  operation was successful!";
	}else{
		echo "An error occured!";
	}
	/*Here it means once the function save is executed and the information inserted in the form is
	posted in the DB successfully it brings up a success message otherwise it shows an error message*/
}
closeDatabase();
?>
<html>
	<head>
		<title>Title goes here</title>
	</head>
	<body>
		<form method="post">
			<table align="centre">
				<tr>
					<td><input type="text" name="first_name" required placeholder="First Name" /></td>
				</tr>
				<tr>
					<td><input type="text" name="last_name" placeholder="Last Name" /></td>
				</tr>
				<tr>
					<td><input type="text" name="city_name" required placeholder="City" /></td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
				</tr>
			</table>
		</form>
	</body>
</html>
