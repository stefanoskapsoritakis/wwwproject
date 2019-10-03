 <?php
 include_once '../config.php';
 include_once('../scripts/session.php');
	include_once '../classes/artist.php';
   if (isset($_POST['submit'])) 
   {
		$artistID=$conn->real_escape_string($_POST['artistID']); 
		$sql="SELECT * FROM artist WHERE artistID='$artistID'";
		$result=$conn->query($sql);	

	
		$conn->close();
   }
  
   ?>

<?php include '../header.php' ?>
	<?php
	while($row=$result->fetch_assoc()) 
	{
		$Artists=new Artist($row["firstName"], $row["lastName"],$row["nationality"],$row["yearOfBirth"], $row["yearOfDeath"], $row["biography"], $row["picture"]); 	
		
	}
	?>
			<section class="container">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-4">
							<img id="contentImg" src="<?php echo $Artists->getPicture(); ?>">  </img>
						</div>
						<div class="col-8">
							<div class="table-responsive">
								<table class="table borderless">
									<tr>
										<th>
										<p> <?php  echo $Artists->getFirstName(); ?> </p>
										</th>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getLastName(); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getNationality(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getYearOfBirth(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getYearOfDeath(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getBiography(); ?> </p>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--whitespace placeholder(prob not the best way-->
			</div>
		</section>

	
<?php include '../footer.php' ?>