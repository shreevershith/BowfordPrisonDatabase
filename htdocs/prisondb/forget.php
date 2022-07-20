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
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql =  "UPDATE login SET password='$pass' WHERE username='$user'";

if ($conn->query($sql) === TRUE) {
  ?> <script type="text/javascript">alert("Record Updated Successfully")</script><?php
} else {
  ?> <script type="text/javascript">alert("ERROR UPDATING RECORD...")</script><?php
}

}

?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESET YOUR PASSWORD</title>
</head>
<style>
.reset{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
  float: left;
  font-size: 30px;
  border-bottom: 6px solid #4caf50;
  margin-bottom:50px;
  padding:13px 0
}
.reset h1{

  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom:50px;
  padding:13px 0
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}

.textbox input{
  border:none;
  outline: none;
  background: none;
  color: black ;
  font-size:18px;
  width: 200px;
  margin: 0 10px;}

  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(DeerIsland.jpg) no-repeat;
    background-size: cover;
}
</style>
<body>
  <div class= "reset">
    <form action="forget.php" method="post">
       <h6 style="color:white;font-family:georgia;font-size:100%;text-align:center;">TYPE YOUR NEW PASSWORD:<br><br>
       <div class ="textbox">
    USERNAME:<input type="text" placeholder="Username" name="user" value="">
  </div>
   <div class ="textbox">
    NEW PASSWORD:<input type="password" placeholder="Password" name="pass" value="">
  </div>

    <input type="submit" value="RESET PASSWORD" style="width:100%;background:none;border:4px solid #4caf50;color:white;padding:5px;font-size:18px;cursor:pointer;margin:12px 0;" name="insert">

<center><h5> <a href="login.php">BACK TO LOGIN PAGE</a></h5></center>
</form>
</div>
</body>
</html>
