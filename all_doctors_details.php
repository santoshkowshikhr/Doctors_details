<?php

require_once('../mysql_conn.php');

$query = "SELECT DISTINCT(Last_Updated_Date), Doctor_Name, Hospital_Name, Qualification, Location from doctors_data order by Doctor_Name,Hospital_Name,Qualification, Location";

$response = @mysqli_query($dbc,$query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Medinfi Healthcare Pvt Ltd </title>
		<link rel="shortcut icon" href="/images/title.png" type="image/png">
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body background="/images/backgrod_filter.png">
        <p>
			<h1 align="center" style="font-size:300%;"> <img src="/images/logo.png" alt="logo" style="width:40px;height:40px;"/>Medinfi Healthcare Pvt Ltd </h1>
		</p>
            <table align="center">
                <tr>
                    <th bgcolor="yellow">Doctor_Name</th>
                    <th bgcolor="yellow">Hospital_Name</th>
                    <th bgcolor="yellow">Qualification</th>
                    <th bgcolor="yellow">Location</th>
					<th bgcolor="yellow">Last_Updated_Date</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($response)):?>
                <tr>
                    <td align="left"><?php echo $row['Doctor_Name'];?></td>
                    <td align="left"><?php echo $row['Hospital_Name'];?></td>
                    <td align="left"><?php echo $row['Qualification'];?></td>
                    <td align="left"><?php echo $row['Location'];?></td>
					<td align="left"><?php echo $row['Last_Updated_Date'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
