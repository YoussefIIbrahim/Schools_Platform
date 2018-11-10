<!DOCTYPE html>
<html>
<style>
form {
    border: 0px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: auto;
    padding: 12px 20px;
    margin: 8px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-0;
}
label {
    width:180px;
    clear:left;
    text-align:right;
    padding-left:500px;
    margin: 10px 10px;
}

input, label {
    float:left;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 8px 20px;
    margin: 20px 500px;
    border: none;
    cursor: pointer;
    width: auto;
}

.cancelbtn {
    width: auto;
    padding: 8px 20px;
    margin: 0px 150px;
    background-color: #f44336;
}


.container {
    padding: 3px;
}

span.psw {
    float: right;
    padding-top: 106px;
}

</style>
<body background="Pictures-images-simple-wallpaper-for-desktop.jpg">
<div align="center">
<div align="center">
<h2>New teacher</h2>
</div>
<form action="teacherApply.php">

  <div class="container">
    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter first name" name="fname" required>
    <br>
    <label><b>Middle Name</b></label>
    <input type="text" placeholder="Enter middle name" name="mname" required>
    <br>
    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter last name" name="lname" required>
    <br>
    <label><b>Birthdate</b></label>
    <input type="text" placeholder="YYYY-MM-DD" name="bDate" required>
    <br>
    <label><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
    <br>
    <label><b>Gender</b></label>
    <input type="text" placeholder="Enter gender" name="gend" required>
    <br>
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="EMail" required>
    <br>
    <label><b>School Name</b></label>
    <input type="text" placeholder="Enter school name" name="schoolname" required>
    <br>
    <label><b>Years of experience</b></label>
    <input type="text" placeholder="Enter number of years" name="yoe" required>
    <button type="submit">Submit</button>
    
  </div>
  </div>

</form>
 <form action= "signUp.php">
  <div class="container" align="center">
    <button type="submit" class="cancelbtn">Cancel</button>
  </div>
  </form>






</body>
</html>

