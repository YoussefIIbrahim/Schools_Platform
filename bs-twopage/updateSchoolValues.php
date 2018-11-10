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
<h2>Update School Info</h2>
</div>
<form action="updateSchoolTable.php">

  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter first name" name="email" required>
    <br>
    <label><b>Level</b></label>
    <input type="text" placeholder="Enter last name" name="level" required>
    <br>
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>
    <br>
    <label><b>Vision</b></label>
    <input type="text" placeholder="Enter email" name="vision" required>
    <br>
    <label><b>General Information</b></label>
    <input type="text" placeholder="Enter Address" name="gInfo" required>
    <br>
    <label><b>Fees</b></label>
    <input type="text" placeholder="Enter phone number" name="fees" required>
    <br>
    <label><b>Mission</b></label>
    <input type="password" placeholder="Enter Password" name="mission" required>
    <br>
        <label><b>Address</b></label>
    <input type="password" placeholder="Re-enter Password" name="add" required>
    <br>
        <label><b>Type</b></label>
    <input type="password" placeholder="Re-enter Password" name="type" required>
    <br>
        <label><b>Main Language</b></label>
    <input type="password" placeholder="Re-enter Password" name="mLang" required>
    <br>
    <button type="submit">Submit</button>
    
  </div>
  </div>

</form>
 <form action= "updateSchoolInfo.php">
  <div class="container" align="center">
    <button type="submit" class="cancelbtn">Cancel</button>
  </div>
  </form>






</body>
</html>

