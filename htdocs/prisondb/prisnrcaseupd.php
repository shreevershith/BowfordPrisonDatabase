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

      $cid = $_POST['cid'];
      $pid = $_POST['pid'];
      $sid = $_POST['sid'];

  $sql =  "UPDATE prisoner_case SET PRISONER_ID='$pid',SECTION_ID='$sid' WHERE CASE_ID=$cid";

if ($conn->query($sql) === TRUE) {
  ?> <script type="text/javascript">alert("Record updated succcessfully!!")</script><?php
} else {
  ?> <script type="text/javascript">alert("ERROR updating records......")</script><?php
}

}

?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATE PRISONERS_CASE TABLE</title>
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
<body style="background: url(prisoners_case.jpg) no-repeat;
background-size: cover;">
<center><p>
 <br><h3 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">INSERT PRISONER_CASE INFO:<br><br></h3>
 </p></center>
 <center>
  <div align = "center">
    <form action="prisnrcaseupd.php" method="post">
      UPDATE PRISONER_CASE INFO<br><br>
   CASE_ID:<input name="cid" type="text"><br><br>
   PRISONER_ID:<input name="pid" type="text"><br><br>
   SECTION_ID:<input name="sid" type="text"><br><br>
    <input type="submit" name="insert">
        </form>
    </div></center>
<center><h3> <a href="prisoner_case.php" style="color:#c39f14;">BACK TO PRISONER_CASE INFO MANAGEMENT</a></h3></center>
</body>
</html>
