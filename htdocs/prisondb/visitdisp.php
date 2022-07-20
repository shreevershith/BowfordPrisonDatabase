<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY VISITOR TABLE</title>
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
<body style="  background: url(visitors.jpg);
  background-size: cover;">

<table width=850; border="5" align="center" id="customers">
  <center><h2 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">VISITORS INFO:</h2></center>
        <tr>

            <th>VISITOR_NAME</th>
            <th>VISITOR_ID</th>
            <th>PRISONER_ID</th>
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','prison');
            $Query = "SELECT * FROM visitor";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {


                $VISITOR_NAME = $Datarows['VISITOR_NAME'];
                $VISITOR_ID = $Datarows['VISITOR_ID'];
                $PRISONER_ID = $Datarows['PRISONER_ID'];



            ?>

        <tr>
           <td><?php echo $VISITOR_NAME; ?></td>
           <td><?php echo $VISITOR_ID; ?></td>
              <td><?php echo $PRISONER_ID; ?></td>

                </tr>

    <?php    } ?>
    </table>
    <center><h3><a href="visitor.php" style="color:#ea949f;">BACK TO VISITOR INFO MANAGEMENT</a></h3></center>
</body>
</html>
