
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
</head>	
<?php 
require_once 'connect.php';
if($_GET['noclass']) {
	$noclass = $_GET['noclass'];
	
}
$count=0;
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

<div class="manageMember">
	
<table  class="table table-striped">
	<thead class="bg-danger">
				<th scope="col">Name</th>
				<th scope="col">Kanaa Id</th>
				<th scope="col">Status_Attendance</th>
		</thead>
	
		<tbody>
			<?php
			require_once 'connect.php';
			$sql = "SELECT * FROM attendancesheet ";
			$result = $connect->query($sql);
			$data = $result->fetch_assoc();
        
		if($result->num_rows > 0) {
			foreach($result as $data) {
             $value=$count;
				 ?>
            <form action="update1.php" method="post">
		   
		    <table   class="table">
				<tr>
			    <td><input readonly class="form-control-plaintext" type="text" name="name[]"  value="<?php echo $data['name'] ?>" /></td>
				<td><input readonly class="form-control-plaintext" type="text" name="kid[]" value="<?php echo $data['kid'] ?>" /></td>
                <td><input readonly class="form-control-plaintext" type="text" name="name[]"  value="<?php echo $data['value'] ?>" /></td>
				
			    </tr>	
				<?php
				$count=$count+1;
			} ?>
			
			<input type="hidden" name="total_count" value="<?php echo $count ?>" />
		<?php }   
		else {
					echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
				}
			
				?>
				
			              
		</tbody>
	</table>
    </form>
</div>
</body>
</html>

 