<!DOCTYPE html>
<html>
<head>
  <title>SECTION TABLE MANAGEMENT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.wrapper{
  text-align: center;
}

.button {
  padding: 20px 40px;
  font-size: 24px;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  left: 45%;

}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body style="font-family: sans-serif;
background: url(section.jpg) no-repeat;
background-size: cover;">
  <div class="wrapper">
    <h1 style= "color:#e3ff0c;font-family:courier;font-size:300%;text-align:center;">DBC SECTIONS MANAGEMENT</h1>
  <br><button class="button"><a href="secin.php">INSERT</a></button><br>
  <br><button class="button"><a href="secdisp.php">DISPLAY</a></button><br>
  <br><button class="button"><a href="secupd.php">UPDATE</a></button><br>
  <br><button class="button"><a href="secdel.php">DELETE</a></button><br>
  <br><br><h4><a href="display_tables.php" style="font-family:georgia;color:#ea949f;">BACK TO MAIN PAGE</a></h4>
</div>

</body>
</html>
