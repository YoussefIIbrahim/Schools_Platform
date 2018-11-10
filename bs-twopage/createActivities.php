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
<h2>Add an activity</h2>
</div>
<form action="updateActivities.php">

  <div class="container">
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>
    <br>
    <label><b>Code</b></label>
    <input type="text" placeholder="Enter code" name="code" required>
    <br>
    <label><b>Description</b></label>
    <input type="text" placeholder="Enter description" name="description" required>
    <br>
    <label><b>Date</b></label>
    <input type="text" placeholder="YYYY-MM-DD" name="date" required>
    <br>
    <label><b>Type</b></label>
    <input type="text" placeholder="Enter type" name="type" required>
    <br>
    <label><b>Equipment</b></label>
    <input type="text" placeholder="Enter equipment" name="equipment" required>
    <br>
    <label><b>Location</b></label>
    <input type="text" placeholder="Enter location" name="location" required>
    <br>
    <label><b>Assigned teacher iD</b></label>
    <input type="text" placeholder="Enter iD" name="teacheriD" required>
    <br>
    <button type="submit">Submit</button>
    
  </div>
  </div>

</form>
 <form action= "showActivities.php">
  <div class="container" align="center">
    <button type="submit" class="cancelbtn">Cancel</button>
  </div>
  </form>






</body>
</html>

