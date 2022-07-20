<!Doctype html>
<html>
<head>
  <title>DATABASE MENU</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(PRISON1.jpg) no-repeat;
  background-size: cover;
}
.wrapper{
  text-align: center;
}
.btn {
  position: center;
  top: 40%;
  background-color:black;
  border: green;
  color: green ;
  padding: 16px 32px;
  font-size: 16px;
  margin: 4px 2px;
}

.btn:hover {
  background-color: #3e8e41;
  color: white;
}
</style>

  <body>
  <br>
<br>
<h3><a href="login.php" style= "color:white;font-family:courier;font-size:200%;text-align:center;float:right;">LOGOUT</a></h3><br>

<div class="w3-container w3-center w3-animate-left" >
  <h1 style= "color:white;font-family:courier;font-size:300%;text-align:center;">HELLO OFFICER!! WHERE DO YOU WANT TO GO TODAY??</h1>
</div>

<div class="wrapper">
<center><button class="btn" ><a href="prisoner.php">PRISONER INFO</a></button><br>
    <button class="btn"><a href="section.php">DENROW PENAL CODE SECTIONS</a></button><br>
    <button class="btn"><a href="crime.php">CRIME INFO</a></button><br>
    <button class="btn"><a href="prisoner_case.php">PRISONER'S CASE INFO</a></button><br>
    <button class="btn"><a href="visitor.php">VISITOR'S INFO</a></button><br>
    <button class="btn"><a href="department.php">DEPARTMENT INFO</a></button><br>
    <button class="btn"><a href="cell.php">PRISONER'S CELL NO INFO</a></button><br>
    <button class="btn"><a href="proc.php">SECTION_ID AND CRIME INFO</a></button><br>

</div>

</body>
</html>
