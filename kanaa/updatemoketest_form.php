<?php 

require_once 'connect.php';

if($_POST) {
	$date = $_POST['date'];
	$mk_no = $_POST['mk_no'];
	$time= $_POST['time'];
	$descripition = $_POST['descripition'];
	$totalscores = $_POST['totalscores'];
	
   
	
	$sql  = "UPDATE mocktest_registration SET date  = '$date',mock_test_no = '$mk_no',time = '$time',descripition = '$descripition',total_scores = '$totalscores' ";
	if($connect->query($sql) === TRUE) {
		?>
		<div class="jumbotron">
		<h1 class="display-4">Successfully mock test details updated...</h1>
		
		   <div class="col-md-4">
		   <a href='displayregistration.php'><button class='btn btn-primary 'type='button'>View Details</button></a>
		   <a href='home.html'><button class = 'btn btn-warning ' type='button'>Home</button></a>
		   </div>
		   <?php
		   } else {
		echo "Error " ;
	}

	$connect->close();
}


?>
