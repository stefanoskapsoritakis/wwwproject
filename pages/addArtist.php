<?php
include_once('../scripts/session.php');
include_once '../config.php';
	if (isset($_POST['submit'])) 
	{
		$firstName=$conn->real_escape_string($_POST['firstName']);
		$lastName=$conn->real_escape_string($_POST['lastName']);
		$nationality=$conn->real_escape_string($_POST['nationality']);
		$yearOfBirth=$conn->real_escape_string($_POST['yearOfBirth']);
		$yearofDeath=$conn->real_escape_string($_POST['yearofDeath']);
		$biography=$conn->real_escape_string($_POST['biography']);
		$picture=$conn->real_escape_string($_POST['picture']);
			
		$sql="INSERT INTO artist (firstName, lastName, nationality, yearOfBirth, yearofDeath, biography, picture)
			 values ('$firstName', '$lastName', '$nationality', '$yearOfBirth', '$yearofDeath', '$biography', '$picture')";
			
		if ($conn->query($sql))
		{		
			echo $resultMessage='<div class="alert alert-success">Success!</div>';	
		}
		else
		{
			echo $resultMessage='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
		}
			
	$conn->close();
	}
		
else
{
	
}
?>
<html>
   
<?php include '../header.php' ?>
	
	<div class="container">
		<div class="col-12" id="registerP">
			<form action="addMovie.php" method="post">	
				<h2>Hello admin,</h2>
				<p>please enter all the required information to continue</p>
				<br>
				<input type="text" name="firstName" placeholder="firstName" required>
				<br>
				<br>
				<input type="text" name="lastName" placeholder="lastName" required>
				<br>
				<br>
				<input type="text" name="nationality" placeholder="nationality" required>
				<br>
				<br>
				<input type="text" name="yearOfBirth" placeholder="yearOfBirth" required>
				<br>
				<br>
				<input type="number" name="yearofDeath" placeholder="yearofDeath" required>
				<br>
				<br>
				<input type="date" name="biography" placeholder="biography" required>
				<br>
				<br>
				<input type="url" name="picture" placeholder="picture" required>
				<br>
				<br>
				<input type="submit" name="submit" value="Submit">
			</form>
        </div>
	</div>

	
<?php include '../footer.php' ?>
   
</html>