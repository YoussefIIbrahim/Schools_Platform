<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$q = "SELECT * FROM Schools"; 
$r = mysqli_query($conn, $q);

while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    $values[] = array(
        'name' => $row['name'],
        'address' => $row['address'],
        'iD' => $row['iD']
    );
}
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Egyptian schools guide</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<div class="row">
                    <div class="col-md-6">
<table class="table table-striped table-bordered table-hover">
<?php
foreach($values as $v){
    echo '
    <tr>
        <td>'.$v['name'].'</td>
        <td>'.$v['address'].'</td>
        <td>'.$v['iD'].'</td>
    </tr>
    ';
}
?>
</table>
</div>
</div>