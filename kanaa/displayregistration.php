<?php require_once 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Details| Student</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	 <meta name="viewport" content="width=device-width,initial scale=1">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
	 integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	 
</head>
	<style type="text/css">
		.manageMember {
			width: 100%;
		}
.navbar{
	margin-top: 0;
}
		body{
	padding-top:0px;
	margin-left:0%;
	font-family: sans-serif;
}

*{
	box-sizing: border-box;
}

.table{
	width: 100%;
	border-collapse: collapse;
}

.table td,.table th{
  padding:12px 15px;
  border:1px solid #ddd;
  text-align: center;
  font-size:16px;
}

.table th{
	background-color: darkblue;
	color:#ffffff;
}

.table tbody tr:nth-child(even){
	background-color: #f5f5f5;
}

/*responsive*/

@media(max-width: 500px){
	.table thead{
		display: none;
	}

	.table, .table tbody, .table tr, .table td{
		display: block;
		width: 100%;
	}
	.table tr{
		margin-bottom:15px;
	}
	.table td{
		
		padding-left: 5%;
		position: relative;
	}
	.table td::before{
		content: attr(data-label);
		position: absolute;
		left:0;
		width: 50%;
		padding-left:15px;
		font-size:15px;
		font-weight: bold;
		text-align: left;
	}
  
}

	</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#" style="color: #fff;font-size:25px;font-weight:bolder;">Kanaa Batch 2k20</a>
  <ul class="nav navbar-nav">
  <a href=home.html><button class ='btn btn-danger 'type='button'>  Back  </button></a>
	<a href="addstudents.html"><button class='btn btn-warning ' type="button">Add Students</button></a>
</ul>
</nav>
<div class="manageMember">
    
	<table  class="table">
		<thead >
			
				<th>Name</th>
				<th>Kanaa Team Id</th>
				<th>Email</th>
				<th>Contact No</th>
				<th>Know More</th>
				<th>Add Personal Details</th>
				<th>Edit / Delete</th>

				
			
		</thead>
		<tbody>
	

			<?php
			$sql = "SELECT * FROM registrationform ";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['name']."</td>
						<td>".$row['kid']."</td>
						<td>".$row['email']."</td>
						<td>".$row['cno']."</td>
						<td>
							<a href='viewfull.php?kid=".$row['kid']."'><button class ='btn btn-danger btn-sm' type='button'>View</button></a>
						</td>
						<td><a href='personal_details.php?kid=".$row['kid']."'><button class ='btn btn-warning btn-sm' type='button'>Add +</button></a> </td>
                        <td><a href='edit.php?cno=".$row['cno']."'><i class='fa fa-edit'></i></a>
						<a href='delete.php?cno=".$row['cno']."'><i class='fa fa-trash'></i></a>
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
 