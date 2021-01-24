<?php 

require_once 'connect.php';

if($_GET['cno']) {
	$cno = $_GET['cno'];

	$sql = "SELECT * FROM registrationform WHERE cno = {$cno}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?> 

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Register | Edit</title>

    <link rel="stylesheet" href="css/studentstyle.css" />
</head>

<body>
    <div class="signup">
        <h2 class="signup__heading">Edit Students</h2>
        <p class="signup__already">
            Team Kanaa - to reach the unreach.......<br>
            <a href="displayregistration.php" class="signup__link signup__link--underline">Back</a>
        </p>
        <form action="updateedit.php" method="POST" class="signup__form" autocomplete="off">
            <table>

                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" name="name" placeholder="NAME" 
                         value="<?php echo $data['name'] ?>"></td>
                </tr>
                </div>
                <tr>
                    <div class="form__group">
                        <td><input type="text" readonly class="form__input" name="kid" placeholder="KANAA TEAM ID"
                         value="<?php echo $data['kid'] ?>"></td>
                </tr>
                </div>
                <tr>
                    <div class="form__group">
                        <td><input type="email" class="form__input" name="email" placeholder="EMAIL"
                         value="<?php echo $data['email'] ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">
                        <td><input type="integer" class="form__input" placeholder="CONTACT NO" name="cno"
                         value="<?php echo $data['cno'] ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" placeholder="1Oth PERCENTAGE" name="tenp"
                         value="<?php echo $data['tenp'] ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">

                        <td><input type="text" class="form__input" placeholder="12th PERCENTAGE" name="twlp"
                       value="<?php echo $data['twlp'] ?>"></td>
                    </div>
                </tr>
               
                <tr>
                    <div class="form__group">
                        <td><input type="submit" class="form__submit" value="Submit"></td>
                    </div>
                </tr>
    </div>
    </table>
    </form>
</body>


<?php 
}
?>