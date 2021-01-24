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
    <title>Attendence | Register</title>
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
      <td>
      <select name="day"class="form__input" required>
      <option >Select Day</option>
     <option value="Monday">Monday</option>
     <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Firday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>

</select></td>
</div>
    </tr>
 
     <tr>
     <div class="form__group">
      <td><input type="text" class="form__input"name="trainername"placeholder="Enter trainer Name" required></td>
</div>
    </tr>
   <tr>
   <div class="form__group">
    <td>
    <select class="form__input" name="modename"class="form__input" required>
      <option >Moderator Name</option>
     <option value="Roshini">Roshini</option>
     <option value="Deepika">Deepika</option>
    <option value="Sandhiya">Sandhiya</option>
    <option value="Mythili">Mythili</option>
    <option value="Devaraj">Devaraj</option>
    <option value="Varsha">Varsha</option>
    <option value="Bakiya">Bakiya</option>

</select></td>
</div>
     </tr> 
     <tr>
     <div class="form__group">
    <td><select class="form__input" name="subject"class="form__input" required>
      <option >Subject Name</option>
     <option value="Biology">Biology</option>
     <option value="Physics">Physics</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Physics Problems">Physics Problems</option>
    <option value="Chemistry Problems">Chemistry Problems</option>
    <option value="Others">Others</option>
    </select></td>
</div>
     </tr>
     <tr>
     <div class="form__group">
    <td> 
    <select class="form__input" name="session"class="form__input" required>
      <option >Select Session No</option>
     <option value="1">1</option>
     <option value="2">2</option>
    <option value="3">3</option></td>
</select>
</div>
     </tr>
     <tr>
     <div class="form__group">
    <td><input type="text" class="form__input"placeholder="Enter class No"name="noclass"required></td>
</div>
     </tr>
     <tr>
     <div class="form__group">
     <td><input type="submit"class="form__submit"value="Submit"></td>
</div>
     </tr>
</tabel>
</form>

  