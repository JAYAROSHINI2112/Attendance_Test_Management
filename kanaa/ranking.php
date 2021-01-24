<?php
require_once 'connect.php';
if ($_GET['mocktest']) {
	$mocktest = $_GET['mocktest'];
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

</head>

<body>
<?php
					
				
							
                 $sql = "SELECT * FROM mocktest_result WHERE mocktest = {$mocktest}";
                 $max = $data['test'];  ?>
					
					
                 <?php	if ($result->num_rows > 0) {
                         foreach ($result as $data) {
 
                             if ($max < $data['test'])
                                 $max = $data['test'];
                         }
                     } 
			    $sql = "SELECT * FROM mocktest_result WHERE test = {$max }";
				$result = $connect->query($sql);
				$data = $result->fetch_assoc();

				if ($result->num_rows > 0) {
				foreach ($result as $data) { ?>
				
				
				 <?php echo  $data['kid'] ;?>  &nbsp;&nbsp;&nbsp;&nbsp;
				 <?php echo  $data['name'] ;?>  &nbsp;&nbsp;&nbsp;&nbsp;
				 <?php	 echo $max;  ?>
				</div>			
				<?php 
				}
			}
			?>	
			</tbody>
		</table>
		</form>
	</div>
</body>

</html>