<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY CELL TABLE</title>
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
<body style="  background: url(cell.jpg);
  background-size: cover;">

<table width=850; border="5" align="center" id="customers">
  <center><h2 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">CELL DETAILS:</h2></center>
        <tr>
            <th>CELL_NO</th>
            <th>PRISONER_ID</th>
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','prison');
            $Query = "SELECT * FROM cell";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $CELL_NO = $Datarows['CELL_NO'];
                $PRISONER_ID = $Datarows['PRISONER_ID'];



            ?>

        <tr>
        <td><?php echo $CELL_NO; ?></td>
        <td><?php echo $PRISONER_ID; ?></td>
                </tr>

    <?php    } ?>
    </table>
    <center><h3> <a href="cell.php" style="color:#ea949f;">BACK TO CELL INFO MANAGEMENT</a></h3></center>
</body>
</html>
