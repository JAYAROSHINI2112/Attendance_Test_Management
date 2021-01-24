<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/studentstyle.css" />
    <title>Attdence | Register</title>
</head>
<body>
<div class="signup">
    <div class="signup__heading">
        <p>Attendance Form</p>
<form action="insert1.php" method="POST" class="signup__form">
  <table>
   <tr>
   <div class="form__group">
      <td><input type="date"class="form__input" name="date" placeholder="Enter The Date"required></td>
</div>
   </tr>
    <tr>
    <div class="form__group">
      <td><input type="text"class="form__input" name="day"placeholder="Enter the day" required></td>
</div>
    </tr>
 
     <tr>
     <div class="form__group">
      <td><input type="text" class="form__input"name="trainername"placeholder="Enter trainer Name" required></td>
</div>
    </tr>
   <tr>
   <div class="form__group">
    <td><input type="text" placeholder="Enter Moderator Name"class="form__input"name="modename"required></td>
</div>
     </tr> 
     <tr>
     <div class="form__group">
    <td><input type="text" class="form__input"placeholder="Enter Subject name"name="subject"required></td>
</div>
<tr>
   <div class="form__group">
    <td><input type="text" placeholder="Enter Class No"class="form__input"name="classno"required></td>
</div>
     </tr> 
     </tr>
     <tr>
     <div class="form__group">
     <td><input type="submit"class="form__submit"value="Submit"></td>
</div>
     </tr>
</tabel>
</form>

  