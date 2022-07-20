<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INSERT CELL TABLE</title>
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

<body style="  background: url(cell.jpg) no-repeat;
  background-size: cover;font-family:georgia">
  <center><p>
   <br><h3 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">INSERT NEW CELL_INFO:<br><br></h3>
   </p></center>
  <center><div align = "center">
    <form action="cellin.php" method="post">
    CELL_NO:<input name="celno" type="text"><br><br>
    PRISONER_ID:<input name="pid" type="text"><br><br>

    <input type="submit" name="submit">
        </form>
    </div>
  </center>
<center><h3> <a href="cell.php" style="color:#ea949f;">BACK TO CELl INFO MANAGEMENT</a></h3></center>
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
    $celno = $_POST['celno'];
    $pid = $_POST['pid'];

    $sql =  "INSERT INTO  cell(CELL_NO,PRISONER_ID)
VALUES ($celno,'$pid')";
    if ($conn->query($sql) === TRUE) {
      ?> <script type="text/javascript">alert("New record inserted Successfully!!")</script><?php
    } else {
      ?> <script type="text/javascript">alert("ERROR while inserting the records......")</script><?php
    }

}

?>
