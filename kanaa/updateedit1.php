<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8" />
<meta date="viewport" content="width=device-width, initial-scale=1.0" />    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">   
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" 
crossorigin="anonymous">
<style>
     .jumbotron{
        width:70%;
        margin: 10% auto;
        display: flex;
        justify-content: center;
        border: 0.08em solid black;
    }
    </style>

<?php 

require_once 'connect.php';

if($_POST) {
	$date = $_POST['date'];
	$mock_test_no = $_POST['mock_test_no'];
	$time = $_POST['time'];
    $descripition = $_POST['descripition'];
    $total_scores = $_POST['total_scores'];
   
	

	$sql  = "UPDATE mocktest_registration SET date = '$date', mock_test_no = '$mock_test_no', time = '$time', descripition = '$descripition',total_scores ='$total_scores' WHERE mock_test_no = {$mock_test_no}";
	if($connect->query($sql) === TRUE) {
		?>
		<div class="jumbotron">
		<h1 class="display-4">Successfully updated...</h1>
		
		   <div class="col-md-4">
		   <a href='mocktest_view.php'><button class='btn btn-primary 'type='button'>Back</button></a>
		   <a href='home.html'><button class = 'btn btn-warning ' type='button'>Home</button></a>
		   </div>
		   <?php
		   } else {
		echo "Error " ;
	}

	$connect->close();
}


?>
