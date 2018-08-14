<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $title ?></title>
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="jquery.min.js"></script>
        <script src="jquery.form.validator.min.js"></script>
        <script src="security.js"></script>
        <script src="file.js"></script>
        <link href="validator.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <center>
                <table border="3">
                    <tr>
                        <th width="91"> <div class="alert alert-info" role="alert" align="center">No. </div></th>
                        <th width="91"> <div class="alert alert-info" role="alert" align="center">StudentID </div></th>
                        <th width="98"> <div class="alert alert-info" role="alert" align="center">Name </div></th>
                        <th width="198"> <div class="alert alert-info" role="alert" align="center">Lastname </div></th>
                        <th width="97"> <div class="alert alert-info" role="alert" align="center">Phone </div></th>
                        <th width="80"> <div class="alert alert-info" role="alert" align="center">Address </div></th>
                        <th width="71"> <div class="alert alert-info" role="alert" align="center">Score </div></th>
                        <th width="71"> <div class="alert alert-info" role="alert" align="center">Grade </div></th>
                        <th width="50"> <div class="alert alert-info" role="alert" align="center">Edit</div></th>
                        <th width="71"> <div class="alert alert-info" role="alert" align="center">Delete</div></th>
                    </tr>
                    <?php
                    foreach ($result as $row) {

//            while ($row = $result->FetchRow()) {
                        ?>
                        <tr>
                            <td><div align="left"><?php echo $row["ID"]; ?></div></td>
                            <td><div align="left"><?php echo $row["STD_ID"]; ?></div></td>
                            <td><?php echo $row["STD_NAME"]; ?></td>
                            <td><?php echo $row["STD_LASTNAME"]; ?></td>
                            <td><div align="left"><?php echo $row["STD_PHONE"]; ?></div></td>
                            <td align="left"><?php echo $row["STD_ADDRESS"]; ?></td>
                            <td><div align="center"><?php echo $row["STD_SCORE"]; ?></td>
                            <td><div align="center"><?php echo $row["STD_GRADE"]; ?></div></td>
                            <td align="center"><a href="JavaScript:if(confirm('Confirm Edit?')==true){window.location='../cscore/edit?ID=<?php echo $row["ID"]; ?>';}">Edit</a></td>
                            <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='../cscore/delete?ID=<?php echo $row["ID"]; ?>';}">Delete</a></td>

                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </center>
    </body>
</html>
