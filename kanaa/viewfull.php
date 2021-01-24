<?php
require_once 'connect.php';
if ($_GET['kid']) {
	$kid = $_GET['kid'];
}
$count = 0;
?>


<!DOCTYPE html>
<html>

<head>
	<title>Details | Student</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<style type="text/css">

.navbar {
  position: absolute;
  left: 0px;
  height: 60px;
  background-color: #2C64B4;
  width: 100%;
  
}
.navbar ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
  float: right;
}
.navbar ul li {
  margin: 0;
  padding: 0; 
}
.navbar ul li a {
  text-decoration: none;
  padding: 10px 20px;
  display: block;
  color: #FFF;
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}

</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#" style="color: #fff;font-size:25px;font-weight:bolder;">Kanaa Batch 2k20</a>
  <ul class="nav navbar-nav">
  <a href='home.html'><button class ='btn btn-danger 'type='button'>Home</button></a>
   <a href='displayregistration.php'><button class ='btn btn-warning 'type='button'>Back</button></a>
</ul>
</nav>
	
	<h2 style="text-align: center;font-size:35px;font-family:serif;background-color: teal;">Personal Details</h2>

	<table class="table" style="margin-top: 30px;">
		<thead class="bg-danger">
			<th>Name</th>
			<th>Kanaa Id</th>
			<th>Contact No</th>
			<th>Email</th>
			<th>10th Percentage</th>
			<th>12th Percentage</th>
			

		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM registrationform WHERE kid = {$kid}";
			$result = $connect->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>" . $row['name'] . "</td>
						<td>" . $row['kid'] . "</td>
						<td>" . $row['cno'] . "</td>
						<td>" . $row['email'] . "</td>
                        <td>" . $row['tenp'] . "</td>
						<td>" . $row['twlp'] . "</td>
			
                       
					     </tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}

			?>
		</tbody>
	</table>
	<table class="table">
		<thead class="bg-danger">
			<th>Father Name</th>
			<th>Father Occupation</th>
			<th>Age</th>
			<th>Current Location</th>
			<th>Alternative Number</th>
			<th>School Name</th>

		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM personal_details WHERE kid = {$kid}";
			$result = $connect->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>" . $row['fname'] . "</td>
						<td>" . $row['occupation'] . "</td>
						<td>" . $row['age'] . "</td>
                        <td>" . $row['address'] . "</td>
						<td>" . $row['acno'] . "</td>
						<td>" . $row['sname'] . "</td>
						 </tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}

			?>
		</tbody>
	</table>
	<h2 style="text-align: center;font-size:35px;font-family:serif;background-color:teal;">NEET CLASS DETAILS </h2>
	<table class="table">
		<thead class="bg-danger">
			<th>Total Present</th>
			<th>Total Absent</th>
			<th>Total Class</th>

		</thead>
		<tbody>
			<?php
			$t_absent = 0;
			$t_present = 0;
			$class_no = 0;
			$sql = "SELECT * FROM attendancesheet WHERE kid = {$kid}";
			$result = $connect->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					if ($row['value'] == 'present') {
						$t_present++;
					} else {
						$t_absent++;
					}
					if ($row['noclass'] > 0) {
						$class_no = $class_no + 1;
					}
				}
				echo "<tr>
						
						<td>" . $t_present . "</td>
						<td>" . $t_absent . "</td>
						<td>" . $class_no . "</td>
						</tr>";
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
	</div>

	<table class="table">
		<thead class="bg-danger">
			<th>Mock Test No</th>
			<th>Marks Scored</th>

		</thead>
		<tbody>
			<?php
			$t_absent = 0;
			$t_present = 0;
			$class_no = 0;
			$sql = "SELECT * FROM mocktest_result WHERE kid = {$kid}";

			$result = $connect->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr>
			    <td >" . $row['mocktest'] . "</td>
				<td>" . $row['test'] . "</td>
				</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}

			?>
		</tbody>
	</table>
	</div>
</body>

</html>