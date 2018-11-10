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
<h2>New Student</h2>
</div>
<form action="studentApply.php">

  <div class="container">
    <label><b>SSN</b></label>
    <input type="text" placeholder="Enter SSN" name="ssn" required>
    <br>
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>
    <br>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>
    <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <br>
    <label><b>Re-enter Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass2" required>
    <br>
    <label><b>Birthdate</b></label>
    <input type="text" placeholder="YYYY-MM-DD" name="bDate" required>
    <br>
    <label><b>Grade</b></label>
    <input type="text" placeholder="Enter Grade" name="grade" required>
    <br>
    <label><b>Gender</b></label>
    <input type="text" placeholder="Enter gender" name="gend" required>
    <br>
    <label><b>School Name</b></label>
    <input type="text" placeholder="Enter School Name" name="sname" required>
    <br>
    <label><b>Parent First Name</b></label>
    <input type="text" placeholder="Enter parent name" name="parfname" required>
    <br>
    <label><b>Parent Last Name</b></label>
    <input type="text" placeholder="Enter parent name" name="parlname" required>
    <br>
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

