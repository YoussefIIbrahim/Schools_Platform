<!DOCTYPE html>
<html>
<style>
form {
    border: 0px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-0;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 8px 20px;
    margin: 8px 50px;
    border: none;
    cursor: pointer;
    width: 5%;
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
    padding-top: 16px;
}

</style>
<body background="Pictures-images-simple-wallpaper-for-desktop.jpg">
<div align="center">
<div align="center">
<h2>Admin Login</h2>
</div>
<form action="getadmin.php">

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

 
  </div>
</form>
 <form action= "login.php">
  <div class="container" align="center">
    <button type="submit" class="cancelbtn">Cancel</button>
    
  </div>
  </form>

</body>
</html>

