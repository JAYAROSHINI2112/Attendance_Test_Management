<?php
require_once 'connect.php';
if ($_GET['kid']) {
	$kid = $_GET['kid'];
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Register | Personal_Details</title>

    <link rel="stylesheet" href="css/studentstyle.css" />
</head>

<body>
    <div class="signup">
       
        <p class="signup__already">
            Team Kanaa - to reach the unreach.......<br>
            <a href="displayregistration.php" class="signup__link signup__link--underline">Back</a>
        </p>
        <form action="insert2.php" method="POST" class="signup__form" autocomplete="off">
            <table>

                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" name="fname" placeholder="FATHER NAME" required></td>
                </tr>
                </div>
                <tr>
                    <div class="form__group">
                        <td><input type="hidden" class="form__input" name="kid"value="<?php echo $kid ?>" required></td>
                </tr>
                </div>
                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" name="occupation" placeholder="FATHER OCCUPATION" ></td>
                    </div>
                </tr>
                </tr>
                <tr>  <div class="form__group">
                        <td><input type="text" class="form__input" name="age"placeholder="Age" ></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" placeholder="CURRENT LOCATION" name="address"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">

                        <td><input type="text" class="form__input" placeholder="ALTERNATE NUMBER" name="acno"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" name="sname"placeholder="SCHOOL NAME" ></td>
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

</html>