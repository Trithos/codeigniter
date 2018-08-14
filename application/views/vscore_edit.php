<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="jquery.min.js"></script>
        <script src="jquery.form.validator.min.js"></script>
        <script src="security.js"></script>
        <script src="file.js"></script>
        <link href="validator.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
        echo $result_edit["ID"];
        echo $result_edit["STD_ID"];
        echo $result_edit["STD_NAME"];
        echo $result_edit["STD_LASTNAME"];
        echo $result_edit["STD_PHONE"];
        echo $result_edit["ADDRESS_ID"];
        echo $result_edit["STD_SCORE"];
         */

        $ID = $stdid = $result_edit["ID"];
        $StudentID = $result_edit["STD_ID"];
        $name = $result_edit["STD_NAME"];
        $lastname = $result_edit["STD_LASTNAME"];
        $Phone = $result_edit["STD_PHONE"];
        $Address = $result_edit["STD_ADDRESS"];
        $Score = $result_edit["STD_SCORE"];

       /* <?php echo $ID; ?>
       <?php echo $StudentID; ?>
       <?php echo $name; ?>
       <?php echo $lastname; ?>
       <?php echo $Phone; ?>
       <?php echo $Address; ?>
       <?php echo $Score; ?>*/
        ?>
        <div class="alert alert-info" role="alert">คำนวนเกรด</div>
        <form action="update" method="post">
            <div class="form-row">
                <div class="col-md-1 mb-3">
                    <label for="validationDefault01">ลำดับ</label>
                    <input type="text" class="form-control" name="ID" readonly id="ID" value="<?php echo $ID; ?>" required pattern="[0-9\s]*" title="กรุณากรอกตัวเลข">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault01">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" name="stdid" id="stdid" value="<?php echo $StudentID; ?>" required pattern="[0-9\s]*" title="กรุณากรอกตัวเลข">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">ชื่อ</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02">นามสกุล</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $lastname; ?>" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $Phone; ?>" required pattern="[0-9\s]*" title="กรุณากรอกตัวเลข">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">ที่อยู่</label>
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $Address; ?>" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationDefault04">คะแนน</label>
                    <input type="text" class="form-control" name="score" id="score" value="<?php echo $Score; ?>" required pattern="[0-9\s.]*" title="กรุณากรอกตัวเลข">
                </div>
            </div>
            <input type="submit" class="btn btn-success btn-lg btn-block" value="Submit">
        </form> 
    </body>
</html>
