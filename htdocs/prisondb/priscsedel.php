<?php

if(isset($_POST["insert"])){
global $connection;
$cid = $_POST["cid"];
$connection = mysqli_connect('localhost','root','','prison');
$Query1 = "SELECT COUNT(*) FROM prisoner_case WHERE CASE_ID = $cid";
$Execute1 = mysqli_query($connection, $Query1);
$count = mysqli_fetch_row($Execute1);
echo $count[0];
if($count[0] == 0)
{
   ?><script type="text/javascript"> alert("DATA NOT FOUND"); </script><?php
}

else
{
    $Query2 =  "DELETE FROM prisoner_case WHERE CASE_ID= $cid";
    $Execute2 = mysqli_query($connection, $Query2);
    ?><script type="text/javascript"> alert("DATA DELETED SUCCESSFULLY"); </script><?php
}



}

?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELETE PRISONER_CASE TABLE ROWS</title>
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
 <br><h3 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">DELETE PRISONER_CASE_INFO:<br><br></h3>
 </p></center>
 <center>

  <div align = "center">
    <form action="priscsedel.php" method="post">

    CASE_ID: <input name="cid" type="text"><br><br>
    <input type="submit" name="insert"><br>

  </form>
</div>
  <center><h3><a href="prisoner_case.php" style="color:#c39f14;">BACK TO PRISONER_CASE INFO MANAGEMENT</a></h3></center>

</body>
</html>