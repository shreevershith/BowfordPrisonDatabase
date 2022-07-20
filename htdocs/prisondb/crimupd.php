<?php
$host = "localhost";
$user = "root";
$password="";
$db = "prison";
$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['insert']))
{
  $cdon = $_POST['cdon'];
  $cno = $_POST['cno'];
  $sid = $_POST['sid'];

  $sql =  "UPDATE crime SET CRIME_DONE='$cdon',SECTION_ID='$sid' WHERE CRIME_NO=$cno";

if ($conn->query($sql) === TRUE) {
  ?> <script type="text/javascript">alert("Record updated Successfully!!")</script><?php
} else {
  ?> <script type="text/javascript">alert("ERROR updating records.....")</script><?php
}

}

?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATE PRISONERS INFO</title>
</head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=text]:focus {
    background-color: lightblue;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    display: inline-block;
    border: 6px solid #ccc;
    background-color:grey;
    padding: 20px;
    box-sizing: border-box;
}
</style>
<body style="background: url(crime.jpg) no-repeat;
background-size: cover;">
<center><p>
 <br><h3 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">  UPDATE CRIME INFO:<br><br></h3>
 </p></center>
  <center><div align = "center">
    <form action="crimupd.php" method="post">

   CRIME_DONE<input name="cdon" type="text"><br><br>
   CRIME_NO:<input name="cno" type="text"><br><br>
   SECTION_ID:<input name="sid" type="text"><br><br>
    <input type="submit" name="insert">
        </form>
    </div>
  </center>
<center><h3> <a href="crime.php" style="color:blue;">BACK TO CRIME INFO MANAGEMENT</a></h3></center>
</body>
</html>
