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
  <a href='adminentry.php'><button class ='btn btn-warning btn-sm'type='button'>Add New Date +</button></a>
<a href='home.html'><button class ='btn btn-danger btn-sm'type='button'>Home</button></a>
</ul>
</nav>

<div class="manageMember">
	
	<table  class="table">
		<thead>
				<th>Date</th>
				<th>Day</th>
				<th>Subject Name</th>
				<th>Trainer Name</th>
                <th>Moderator Name</th>
                <th>Session</th>
				<th>Noclass</th>			
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM attendancedetails ";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['date']."</td>
						<td>".$row['day']."</td>
						<td>".$row['subject']."</td>
						<td>".$row['trainername']."</td>
                        <td>".$row['modename']."</td>
						<td>".$row['session']."</td>
						<td>".$row['noclass']."</td>
                        <td>
						 <a href='take.php?noclass=".$row['noclass']."'><button class ='btn btn-primary btn-sm'type='button'>Take Attenndance</button></a>
                        </td>
                            <td>
						 <a href='view.php?noclass=".$row['noclass']."'><button class ='btn btn-danger btn-sm'type='button'>View Attenndance</button></a>
							</td>
							<td>
							<a href='staticview.php?noclass=".$row['noclass']."'><button class ='btn btn-warning btn-sm'type='button'>Statics View</button></a>
						   </td>
						   <td>
						   <a href='edit2.php?noclass=".$row['noclass']."'><i class='fa fa-edit'></i></a>
						   <a href='delete2.php?noclass=".$row['noclass']."'><i class='fa fa-trash'></i></a>
							
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

