<?php
require_once 'connect.php';
if ($_GET['mocktest']) {
	$mocktest = $_GET['mocktest'];
}
$count = 0;
?>

<!DOCTYPE html>
<html>

<head>
	<title>Attendance | Sheet</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#" style="color: #fff;font-size:25px;font-weight:bolder;">Kanaa Batch 2k20</a>
  <ul class="nav navbar-nav">
  <a href='mocktest_view.php'><button class ='btn btn-warning btn-sm'type='button'>Back+</button></a>
<a href='home.html'><button class ='btn btn-danger btn-sm'type='button'>Home</button></a>
</ul>
</nav>
	<div class="manageMember">
		

		<table class="table table-striped">

			<thead class="bg-danger">
				<th scope="col">Date(yy/mm/dd)</th>
				<th scope="col">Mock Test</th>
				<th scope="col">Descripition</th>
				<th scope="col">Total Scores</th>
				<th></th>
				<th></th>


			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM mocktest_registration WHERE mock_test_no = {$mocktest}";
				$result = $connect->query($sql);

				if ($result->num_rows > 0) {
					if ($row = $result->fetch_assoc()) {
						echo "<tr >
						<td >" . $row['date'] . "</td>
						<td>" . $row['mock_test_no'] . "</td>
						<td>" . $row['descripition'] . "</td>
						<td>" . $row['total_scores'] . "</td>
						<td><a href='delete1.php?mocktest=" . $row['mock_test_no'] . "'><button class ='btn btn-danger btn-sm'type='button'>Delete</button></a> </td>
						

						<td> </td>
                         
						             
					</tr>";
					}
				} else {
					echo "<tr><td colspan='5'><center>Date Is Not Avaliable</center></td></tr>";
				}

				?>
			</tbody>
		</table>
	</div>

	<div class="manageMember">

		<table class="table table-striped">
			<thead class="bg-danger">
				<th scope="col">Name</th>
				<th scope="col">Kanaa Id</th>
				<th scope="col">Marks Scored</th> <td>
							
				
							</td>
			</thead>

			<tbody>
				<?php
				require_once 'connect.php';
				$sql = "SELECT * FROM mocktest_result WHERE mocktest = {$mocktest}";
				$result = $connect->query($sql);
				$data = $result->fetch_assoc();

				if ($result->num_rows > 0) {
					foreach ($result as $data) {
						$value = $count;



				?>
						<form action="#	" method="post">

						
							<tr>

								<td><input readonly class="form-control-plaintext" value="<?php echo $data['name'] ?>" /></td>

								<td><input readonly class="form-control-plaintext" value="<?php echo $data['kid'] ?>" /></td>

								<td><input readonly class="form-control-plaintext" value="<?php echo  $data['test'] ?>" /></td>
								</tr>
               	<?php


					}
						?>


						<input type="hidden" name="total_count" value="<?php echo $count ?>" />
					<?php } else {
					echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
				}

					?>
					<?php
					
					$max = $data['test'];  ?>
					
					
				<?php	if ($result->num_rows > 0) {
						foreach ($result as $data) {

							if ($max < $data['test'])
								$max = $data['test'];
						}
					} ?>
							
				<?php $sql = "SELECT * FROM mocktest_result WHERE mocktest = {$mocktest}";
				 $sql = "SELECT * FROM mocktest_result WHERE test = {$max }";
				$result = $connect->query($sql);
				$data = $result->fetch_assoc();

				if ($result->num_rows > 0) {
				foreach ($result as $data) { ?>
				<p style="background-color: yellow; width :200px" ;> Maximum marks scored by </p> 
				<div style="background-color: blue; width : 250px;">
				
				 <?php echo  $data['kid'] ;?>  &nbsp;&nbsp;&nbsp;&nbsp;
				 <?php echo  $data['name'] ;?>  &nbsp;&nbsp;&nbsp;&nbsp;
				 <?php	 echo $max;  ?>
				</div>			
				<?php 
				}
			}
			?>	
			</tbody>
		</table>
		</form>
	</div>
</body>

</html>