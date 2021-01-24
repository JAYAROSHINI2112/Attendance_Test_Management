<?php 

require_once 'connect.php';

if($_GET['noclass']) {
	$noclass = $_GET['noclass'];

	$sql = "SELECT * FROM attendancedetails WHERE noclass = {$noclass}";
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
        <h2 class="signup__heading">Edit Attendance</h2>
        <p class="signup__already">
            Team Kanaa - to reach the unreach.......<br>
            <a href="attendancesheet.php" class="signup__link signup__link--underline">Back</a>
        </p>
        <form action="updateedit2.php" method="POST" class="signup__form" autocomplete="off">
            <table>

                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" name="date" 
                         value="<?php echo $data['date'] ?>"></td>
                </tr>
                </div>
                <tr>
                    <div class="form__group">
                        <td><input type="text" readonly class="form__input" name="day" 
                         value="<?php echo $data['day'] ?>"></td>
                </tr>
                </div>
                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" name="trainername"
                         value="<?php echo $data['trainername'] ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">
                        <td><input type="integer" class="form__input" name="modename"
                         value="<?php echo $data['modename'] ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" name="subject"
                         value="<?php echo $data['subject'] ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">

                        <td><input type="text" class="form__input" name="session"
                       value="<?php echo $data['session'] ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">

                        <td><input type="text" readonly class="form__input" name="noclass"
                       value="<?php echo $data['noclass'] ?>"></td>
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