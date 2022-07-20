<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY PRISONER_CASE TABLE</title>
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
<body style="  background: url(prisoners_case.jpg);
  background-size: cover;">

<table width=850; border="5" align="center" id="customers">
  <center><h2 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">PRISONER_CASE INFO:</h2></center>
        <tr>
            <th>CASE_ID</th>
            <th>PRISONER_ID</th>
            <th>SECTION_ID</th>
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','prison');
            $Query = "SELECT * FROM prisoner_case";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {

                $CASE_ID = $Datarows['CASE_ID'];
                $PRISONER_ID = $Datarows['PRISONER_ID'];
                $SECTION_ID = $Datarows['SECTION_ID'];



            ?>

        <tr>
        <td><?php echo $CASE_ID; ?></td>
        <td><?php echo $PRISONER_ID; ?></td>
        <td><?php echo $SECTION_ID; ?></td>

                </tr>

    <?php    } ?>
    </table>
    <center><h3> <a href="prisoner_case.php" style="color:#c39f14;">BACK TO PRISONER_CASE INFO MANAGEMENT</a></h3></center>
</body>
</html>
