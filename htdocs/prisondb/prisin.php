<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INSERT PRISONER INFO</title>
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
<body style="background: url(marshall.jpg);
background-size: cover;"><center><p>
 <br><h3 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;"> INSERT NEW PRISONER INFO:<br><br></h3>
 </p></center>
  <center><div align = "center">
    <form action="prisin.php" method="post">

    SECTION_ID:<input name="sid" type="text"><br><br>
    F_NAME:<input name="name1" type="text"><br><br>
    L_NAME:<input name="name2" type="text"><br><br>
    AGE:<br><input name="age" type="text"><br><br>
    ADDRESS:<input name="addr" type="text"><br><br>
    DATE_IN:<input name="din" type="text"><br><br>
    DATE_OUT:<input name="dout" type="text"><br><br>
    CONTACTS:<input name="con" type="text"><br><br>
    PRISONER_ID:<input name="pid" type="text"><br><br>
    DEPT_NO:<input name="dno" type="text"><br><br>
    CRIME_NO:<input name="cno" type="text"><br><br>
    <input type="submit" name="submit">
        </form>
    </div>
  </center>
<center><h3> <a href="prisoner.php" style="color:blue;">BACK TO PRISONER INFO MANAGEMENT</a></h3></center>
</body>
</html>

<?php
$host = "localhost";
$user = "root";
$password="";
$db = "prison";
$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit']))
{
    $sid = $_POST['sid'];
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $age = $_POST['age'];
    $addr = $_POST['addr'];
    $din = $_POST['din'];
    $dout = $_POST['dout'];
    $con = $_POST['con'];
    $pid = $_POST['pid'];
    $dno = $_POST['dno'];
    $cno = $_POST['cno'];

    $sql =  "INSERT INTO  prisoner(SECTION_ID,F_NAME,L_NAME,AGE,ADDRESS,DATE_IN,DATE_OUT,CONTACTS,PRISONER_ID,DEPT_NO,CRIME_NO)
VALUES ('$sid','$name1','$name2',$age,'$addr','$din','$dout','$con','$pid',$dno,$cno)";
    if ($conn->query($sql) === TRUE) {
      ?> <script type="text/javascript">alert("New record inserted succcessfully!!!")</script><?php
    } else{
      ?> <script type="text/javascript">alert("ERROR while inserting records....")</script><?php
    }

}

?>
