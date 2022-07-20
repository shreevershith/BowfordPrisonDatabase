<?php

if(isset($_POST["insert"])){
global $connection;
$celno = $_POST["celno"];
$connection = mysqli_connect('localhost','root','','prison');
$Query1 = "SELECT COUNT(*) FROM cell WHERE CELL_NO = $celno";
$Execute1 = mysqli_query($connection, $Query1);
$count = mysqli_fetch_row($Execute1);
echo $count[0];
if($count[0] == 0)
{
   ?><script type="text/javascript"> alert("DATA NOT FOUND"); </script><?php
}

else
{
    $Query2 =  "DELETE FROM cell WHERE CELL_NO= $celno";
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
  <title>DELETE CELL TABLE ROWS</title>
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
<body style="background: url(cell.jpg) no-repeat;
background-size: cover;">
<center><p>
 <br><h3 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">DELETE CELL_INFO:<br><br></h3>
 </p></center>
 <center>
  <div align = "center">
    <form action="celldel.php" method="post">

    CELL_NO: <input name="celno" type="text"><br><br>
    <input type="submit" name="insert">
  </center>
  </form>
</div>
<center><h3><a href="cell.php" style="color:#ea949f;">BACK TO CELL INFO MANAGEMENT</a></h3></center>

</body>
</html>
