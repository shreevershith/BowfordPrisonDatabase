<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY CRIME TABLE</title>
</head>
<style>

              #customers {
                  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                  border-collapse: collapse;
                  width: 50%;
              }

              #customers td, #customers th {
                  border: 1px solid #ddd;
                  padding: 8px;
                  background-color: white;
              }



              #customers th {
                  padding-top: 10px;
                  padding-bottom: 10px;
                  text-align: left;
                  background-color: #4CAF50;
                  color: white;
    }

</style>
<body style="  background: url(crime.jpg);
  background-size: cover;">

<table width=850; border="5" align="center" id="customers">
  <center><h2 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">CRIME INFO IN DENROW:</h2></center>
        <tr>
            <th>CRIME_DONE</th>
            <th>CRIME_NO</th>
            <th>SECTION_ID</th>
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','prison');
            $Query = "SELECT * FROM crime";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $CRIME_DONE = $Datarows['CRIME_DONE'];
                $CRIME_NO = $Datarows['CRIME_NO'];
                $SECTION_ID = $Datarows['SECTION_ID'];



            ?>

        <tr>
        <td><?php echo $CRIME_DONE; ?></td>
        <td><?php echo $CRIME_NO; ?></td>
        <td><?php echo $SECTION_ID; ?></td>
                </tr>

    <?php    } ?>
    </table>
    <center><h3><a href="crime.php" style="color:blue;">BACK TO CRIME INFO MANAGEMENT</a></h3></center>
</body>
</html>
