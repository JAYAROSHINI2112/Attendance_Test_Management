<?php 

require_once 'connect.php';

if($_POST) {
	$name = $_POST['name'];
	$kid = $_POST['kid'];
	$email= $_POST['email'];
	$cno = $_POST['cno'];
	$tenp = $_POST['tenp'];
	$twlp = $_POST['twlp'];
   
	
	$sql  = "UPDATE registrationform SET name  = '$name',kid = '$kid',email = '$email',cno = '$cno',tenp = '$tenp',twlp = '$twlp' WHERE kid = {$kid}";
	if($connect->query($sql) === TRUE) {
		?>
		<div class="jumbotron">
		<h1 class="display-4">Successfully student is updated...</h1>
		
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
