		<?php
		require_once 'connect.php';
		if ($_GET['noclass']) {
			$noclass = $_GET['noclass'];
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
            <style>
			.align{
				margin-top: 0;
				
			}
			</style>
		</head>

		<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
         <a class="navbar-brand" href="#" style="color: #fff;font-size:25px;font-weight:bolder;">Kanaa Batch 2k20</a>
           <ul class="nav navbar-nav">
            <a href='attendancesheet.php'><button class ='btn btn-warning btn-sm'type='button'>Back</button></a>
            <a href='home.html'><button class ='btn btn-danger btn-sm'type='button'>Home</button></a>
         </ul>
        </nav>
			<div class="manageMember">

				<table class="table table-striped">

					<thead class="bg-danger">
						<th scope="col">Date(yy/mm/dd)</th>
						<th scope="col">Day</th>
						<th scope="col">Subject Name</th>
						<th scope="col">Trainer Name</th>
						<th scope="col">Moderator Name</th>
						<th scope="col">Session</th>



					</thead>
					<tbody>
						<?php
						$sql = "SELECT * FROM attendancedetails WHERE noclass={$noclass}";
						$result = $connect->query($sql);

						if ($result->num_rows > 0) {
							if ($row = $result->fetch_assoc()) {
								echo "<tr >
						<td >" . $row['date'] . "</td>
						<td>" . $row['day'] . "</td>
						<td>" . $row['subject'] . "</td>
						<td>" . $row['trainername'] . "</td>
                        <td>" . $row['modename'] . "</td>
						<td>" . $row['session'] . "</td>
						
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
						<th scope="col">Status_Attendance</th>
					</thead>

					<tbody>
						<?php
						$present_value=0;$absent_value=0;$na=0;
						require_once 'connect.php';
						$sql = "SELECT * FROM attendancesheet WHERE noclass = {$noclass}";
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

										<td><input readonly class="form-control-plaintext" value="<?php echo  $data['value'] ?>" /></td>
									   <?php
									        
									       if($data['value'] =='present'){
											  $present_value=$present_value+1;
											 }
											 else if($data['value'] =='absent'){
												 $absent_value=$absent_value+1;
											 }
											 else{
												 $na=$na+1;
											 }
										   ?>
									</tr>
								<?php

								$count = $count + 1;
							}
							$total_strength = $count; ?>
							<div class="align">
							<p>Total Strength</p> 
							<?php echo "$total_strength"; ?>
							</div>
							<div class="align">
								<p>Total Present</p>
								<?php echo "$present_value";?>
							</div>
							<div class="align">
								<p>Total Absent</p>
								<?php echo "$absent_value";?>
							</div>
							<div class="align">
								<p>NA</p>
								<?php echo "$na";?>
							</div>
								<input type="hidden" name="total_count" value="<?php echo $count ?>" />
							<?php } else {
							echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
						}

							?>


					</tbody>
				</table>
				</form>
			</div>
		</body>

		</html>