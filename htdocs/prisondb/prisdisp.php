<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY PRISONER TABLE</title>
</head>
<style>

              #customers {
                  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
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
<body style="  background: url(marshall.jpg);
  background-size: cover;">

<table width=850; border="5" align="center" id="customers">
  <center><h2 style= "color:#5effae;font-family:courier;font-size:200%;text-align:center;">PRISONERS INFO:</h2></center>
        <tr>
            <th>SECTION_ID</th>
            <th>F_NAME</th>
            <th>L_NAME</th>
            <th>AGE</th>
            <th>ADDRESS</th>
            <th>DATE_IN</th>
            <th>DATE_OUT</th>
            <th>CONTACTS</th>
            <th>PRISONER_ID</th>
            <th>DEPT_NO</th>
            <th>CRIME_NO</th>
            </th>
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','prison');
            $Query = "SELECT * FROM prisoner";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $SECTION_ID = $Datarows['SECTION_ID'];
                $F_NAME = $Datarows['F_NAME'];
                $L_NAME = $Datarows['L_NAME'];
                $AGE = $Datarows['AGE'];
                $ADDRESS = $Datarows['ADDRESS'];
                $DATE_IN = $Datarows['DATE_IN'];
                $DATE_OUT = $Datarows['DATE_OUT'];
                $CONTACTS = $Datarows['CONTACTS'];
                $PRISONER_ID = $Datarows['PRISONER_ID'];
                $DEPT_NO = $Datarows['DEPT_NO'];
                $CRIME_NO = $Datarows['CRIME_NO'];



            ?>

        <tr>
        <td><?php echo $SECTION_ID; ?></td>
        <td><?php echo $F_NAME; ?></td>
        <td><?php echo $L_NAME; ?></td>
        <td><?php echo $AGE; ?></td>
        <td><?php echo $ADDRESS; ?></td>
        <td><?php echo $DATE_IN; ?></td>
        <td><?php echo $DATE_OUT; ?></td>
        <td><?php echo $CONTACTS; ?></td>
        <td><?php echo $PRISONER_ID; ?></td>
        <td><?php echo $DEPT_NO; ?></td>
        <td><?php echo $CRIME_NO; ?></td>
                </tr>

    <?php    } ?>
    </table>
        <center><h3><a href="prisoner.php" style="color:blue;">BACK TO PRISONER INFO MANAGEMENT</a></h3></center>
</body>
</html>
