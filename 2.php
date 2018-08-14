<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table width="600" border="1">
            <tr>
                <th width="91"> <div align="center">No. </div></th>
                <th width="91"> <div align="center">StudentID </div></th>
                <th width="98"> <div align="center">Name </div></th>
                <th width="198"> <div align="center">Lastname </div></th>
                <th width="97"> <div align="center">Phone </div></th>
                <th width="59"> <div align="center">Address </div></th>
                <th width="71"> <div align="center">Score </div></th>
                <th width="71"> <div align="center">Grade </div></th>
            </tr>
                        <tr>
                    <td><div align="left"><?php echo $result_edit["ID"]; ?></div></td>
                    <td><div align="left"><?php echo $result_edit["STD_ID"]; ?></div></td>
                    <td><?php echo $result_edit["STD_NAME"]; ?></td>
                    <td><?php echo $result_edit["STD_LASTNAME"]; ?></td>
                    <td><div align="left"><?php echo $result_edit["STD_PHONE"]; ?></div></td>
                    <td align="left"><?php echo $result_edit["ADDRESS_ID"]; ?></td>
                    <td><div align="center"><?php echo $result_edit["STD_SCORE"]; ?></td>
                    <td><div align="center"><?php echo $result_edit["GRADE_ID"]; ?></div></td>
                </tr>
                <?php
          
            ?>
        </table>
    </body>
</html>
