<?php 

require_once 'connect.php';

if($_GET['mock_test_no']) {
	$mock_test_no = $_GET['mock_test_no'];

	$sql = "SELECT * FROM mocktest_registration WHERE mock_test_no = {$mock_test_no}";
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
        <h2 class="signup__heading">Edit Form</h2>
        <p class="signup__already">
            Team Kanaa - to reach the unreach.......<br>
            <a href="view.php" class="signup__link signup__link--underline">Back</a>
        </p>
        <form action="updateedit1.php" method="POST" class="signup__form" autocomplete="off">
            <table>

                <tr>
                    <div class="form__group">
                        <td><input type="date" class="form__input" name="date" 
                         value="<?php echo $data['date'] ?>"></td>
                </tr>
                </div>
                <tr>
                    <div class="form__group">
                        <td><input type="text" readonly class="form__input" name="mock_test_no"
                         value="<?php echo $data['mock_test_no'] ?> "></td>
                </tr>
                </div>
                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input" name="time" value="<?php echo $data['time'] ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input"  name="descripition"
                         value="<?php echo $data['descripition'] ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form__group">
                        <td><input type="text" class="form__input"  name="total_scores"
                         value="<?php echo $data['total_scores'] ?>"></td>
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