<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "prison";

$conn = new mysqli($host,$user,$password,$db);
if(!$conn){
  die("Connection failed" . mysqli_connect_error());
}
if(isset($_POST['button'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $sql = "select password
          from login
          where username='$user'";

  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)) {
      $auth = $row["password"];
    }
  }
  if($auth==$pass)
    header('Location: display_tables.php');
else {
  ?> <script type="text/javascript">alert("Invalid credentials,Please check your Username and Password")</script><?php
}
$conn->close();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BOWFORD PRISON DATABASE LOGIN</title>
  <style>
  @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(Haylend.jpg) no-repeat;
    background-size: cover;
  }
  .login-box{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: white;
  }
  .login-box h1{

    float: left;
    font-size: 40px;
    border-bottom: 6px solid #4caf50;
    margin-bottom:50px;
    padding:13px 0
  }
  .textbox{
    width: 100%;
    overflow: hidden;
    font-size: 40px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #4caf50;
  }

  .textbox input{
    border:none;
    outline: none;
    background: none;
    color: white ;
    font-size:18px;
    width: 200px;
    margin: 0 10px;
  }
  .button {
    border-radius: 4px;
    background-color: #2d962b;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 10px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }

  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .button:hover span {
    padding-right: 25px;
  }

  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
</style>
  <body>
    <div style = "position:relative;top:50px;">
      <h1 style= "color:white;font-family:courier;font-size:300%;text-align:center;">BOWFORD PRISON DATABASE</h1>
    </div>

    <div class="login-box">
      <h1>Login</h1>

      <form action="login.php" method="post">
      <div class ="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="user" value="">
        </div>

        <div class ="textbox">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" placeholder="Password" name="pass" value="">
          </div>

          <button class="button" name="button"><span>Sign In</span></button>
          <br><br>
          <a href="forget.php" style="color:white;font-family:georgia;font-size:150%;text-align:center;">Forgot your Password??</a>
        </form>
        </div>
</body>
  </html>
