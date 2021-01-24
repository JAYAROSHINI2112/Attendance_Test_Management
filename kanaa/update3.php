<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
</head>		

<?php 

require_once ('connect.php');

if(isset($_POST['total_count'])) {

	$total_count = $_POST['total_count'];
	
	$iter = 0;
	while($iter < $total_count) {
		$name = $_POST['name'][$iter];
		$kid = $_POST['kid'][$iter];
		$test = $_POST['test'][$iter];
		$mocktest = $_POST['mocktest'][$iter];
		$sql = "INSERT INTO mocktest_result (name, kid, test,mocktest) VALUES ('$name', '$kid', '$test','$mocktest')";
		 if($connect->query($sql) === TRUE) {
			}
			 else {
			echo "Error " ;
		}
		
		$iter++;
		} 
	?>
	<div class="jumbotron">
      <h1 class="display-4">Successfully mark list updated....</h1> <?php
	echo "<a href='mocktest_view.php'><button class='btn btn-primary' type='button'>Back</button></a>";
	echo "<a href='home.html'><button class = 'btn btn-warning' type='button'>Home</button></a>";
	
	?>
	 </div>
	 <?php
$connect->close();	
}


//list of absent and present

 
?>
