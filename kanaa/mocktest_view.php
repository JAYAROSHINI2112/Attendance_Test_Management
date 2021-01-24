<?php require_once 'connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<title>Details| Student</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<style type="text/css">


</style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#" style="color: #fff;font-size:25px;font-weight:bolder;">Kanaa Batch 2k20</a>
  <ul class="nav navbar-nav">
  <a href='mockdetails_form.php?'><button class='btn btn-warning btn-sm' type='button'>Add New Date +</button></a>
 <a href='home.html'><button class ='btn btn-danger btn-sm'type='button'>Home</button></a>
 
</ul>
</nav>
	
	<div class="manageMember">

		<table class="table">
			<thead>
				<th>Date</th>
				<th>Time</th>
				<th>Mock Test No</th>
				<th>Description</th>
				<th>Total Marka</th>
			

			</thead>
			<tbody>

				<?php
				$sql = "SELECT * FROM mocktest_registration ";
				$result = $connect->query($sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "<tr>
						
						<td>" . $row['date'] . "</td>
						<td>" . $row['time'] . "</td>
					
						<td>" . $row['mock_test_no'] . "</td>
					     <td>" . $row['descripition'] . "</td>
						<td>" . $row['total_scores'] . "</td>
						<td>
						 <a href='take1.php?moketest=" .$row['mock_test_no'] . "'><button class ='btn btn-primary btn-sm'type='button'>Entry Marks</button></a>
                        </td>
                            <td>
						 <a href='view1.php?mocktest=" . $row['mock_test_no'] . "'><button class ='btn btn-danger btn-sm'type='button'>View Mark List</button></a>
							</td>
						<td>
						<td><a href='edit1.php?mock_test_no=". $row['mock_test_no'] ."'><i class='fa fa-edit'></i></a>
						<a href='deletemocktest_details.php?mock_test_no=". $row['mock_test_no'] ."'><i class='fa fa-trash'></i></a>
						</td>	
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