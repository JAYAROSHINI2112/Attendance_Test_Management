<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
html,body{
font-family: 'Numans', sans-serif;
}
.container{
height: 100%;
align-content: center;
}
img{
   background-color: #171819;
   position: absolute;
    top: 0px;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    margin-top: 30px;
    filter : blur(4px);
}
.card{
height: 320px;
margin-top: 150px;
width: 400px;
background-color: rgba(0,0,0,0.8) !important;
}
.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}
.social_icon span:hover{
color: white;
cursor: pointer;
}
.card-header h3{
color: white;
}
.social_icon{
position: absolute;
right: 20px;
top: -45px;
}
.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}
input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;
}
.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}
.login_btn:hover{
color: black;
background-color: white;
}
.links{
color: white;
}
.links a{
margin-left: 4px;
}
</style>
<body>
  <div class=img>
  <img src="images/bg.jpg" alt="background">
</div>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
			</div>
			<div class="card-body">
				<form action="login.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="name" class="form-control" placeholder="User Name">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
           	      <div class="form-group">
						<button type="submit" name="btn" class="btn btn-primary">Login</button>
						</div>
            </div>
            <?php
        if(isset($_POST['btn']))
        { 
            $name=$_POST['name'];
            $password=$_POST['password'];
            if(($name=="teamkanaa")&&($password=="admin@123"))
            {
                echo '<script>window.location="home.html";</script>';
            }
            else
            {
                $message="Invalid Username or Password";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

        }  
        else if(isset($_POST['btn']))
        {
            echo '<script>window.location="login.html";</script>';
        }   
        ?>
			
		</div>
	</div>
</div>
</body>
</html>