<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY DEPARTMENT TABLE</title>
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
<body style="  background: url(department.jpg);
  background-size: cover;">

<table width=850; border="5" align="center" id="customers">
  <center><h2 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">DEPARTMENTS INFO:</h2></center>
        <tr>
            <th>DEPT_NO</th>
            <th>DEPT_NAME</th>
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','prison');
            $Query = "SELECT * FROM department";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $DEPT_NO = $Datarows['DEPT_NO'];
                $DEPT_NAME = $Datarows['DEPT_NAME'];

            ?>

        <tr>
        <td><?php echo $DEPT_NO; ?></td>
        <td><?php echo $DEPT_NAME; ?></td>
                </tr>

    <?php    } ?>
    </table>
    <center><h3> <a href="department.php" style="color:yellow;">BACK TO DEPARTMENT INFO MANAGEMENT</a></h3></center>
</body>
</html>
