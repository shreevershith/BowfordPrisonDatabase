<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY SECTION TABLE</title>
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
<body style="  background: url(section.jpg);
  background-size:cover">

<table width=850; border="5" align="center" id="customers">
  <center><h2 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">DPC SECTIONS INFO:</h2></center>
        <tr>

            <th>SECTION_ID</th>
            <th>SECTION_NAME</th>
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','prison');
            $Query = "SELECT * FROM section";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {


                $SECTION_ID = $Datarows['SECTION_ID'];
                $SECTION_NAME = $Datarows['SECTION_NAME'];



            ?>

        <tr>
           <td><?php echo $SECTION_ID; ?></td>
           <td><?php echo $SECTION_NAME; ?></td>

                </tr>

    <?php    } ?>
    </table>
    <center><h3> <a href="section.php" style="color:#ea949f;" >BACK TO DPC SECTION INFO MANAGEMENT</a></h3></center>
</body>
</html>
