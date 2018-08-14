<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
error_reporting(1);
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student";

$objResult = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
mysqli_set_charset($objResult,"utf8");
/*
if(!$conn){
	echo "Connect Failed";
}else{
	echo "Connect success";	
}
*/

$sql = "SELECT*FROM t_student";
$result = $objResult->query($sql);
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">StudentID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Lastname </div></th>
    <th width="97"> <div align="center">Phone </div></th>
    <th width="59"> <div align="center">Address </div></th>
    <th width="71"> <div align="center">Score </div></th>
    <th width="71"> <div align="center">Grade </div></th>
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["STD_ID"];?></div></td>
    <td><?php echo $objResult["STD_NAME"];?></td>
    <td><?php echo $objResult["STD_LASTNAME"];?></td>
    <td><div align="center"><?php echo $objResult["STD_PHONE"];?></div></td>
    <td align="right"><?php echo $objResult["ADDRESS_ID"];?></td>
    <td align="right"><?php echo $objResult["STD_SCORE"];?></td>
  </tr>
<?php
}
?>
</table>
    </body>
</html>
