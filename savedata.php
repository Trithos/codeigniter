<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php error_reporting(1);
        require_once'connect.php';
        ?>
    <center>
        <?php
        $get_id = $_POST["idstd"];
        $get_name = $_POST["name"];
        $get_lastname = $_POST["lastname"];
        $get_phone = $_POST["phone"];
        $get_address = $_POST["address"];
        $get_score = $_POST["score"];
        ?>
        <?php echo 'รหัสนักศึกษา ';
        echo $get_id;
        ?><br>
        <?php echo 'ชื่อ ';
        echo $get_name;
        ?><br>
        <?php echo 'นามสกุล ';
        echo $get_lastname;
        ?><br>
        <?php echo 'เบอร์โทรศัพท์ ';
        echo $get_phone;
        ?><br>
        <?php echo 'ที่อยู่ ';
        echo $get_address;
        ?><br>
        <?php echo 'คะแนน ';
        echo $get_score;
        ?><br>
        <?php
        $grade;
        if ($_POST["scorename"] > 100) {
            echo "คุณกรอกคะแนนผิดพลาด!(โปรดกรอกเลข 0-100)";
        } elseif ($_POST["scorename"] < 0) {
            echo "คุณกรอกคะแนนผิดพลาด!(โปรดกรอกเลข 0-100)";
        } else {
            if ($_POST["scorename"] >= 80) {
                $grade = A;
                echo "คุณได้เกรด " . $grade;
            } elseif ($_POST["scorename"] >= 70) {
                $grade = B;
                echo "คุณได้เกรด " . $grade;
            } elseif ($_POST["scorename"] >= 60) {
                $grade = C;
                echo "คุณได้เกรด " . $grade;
            } elseif ($_POST["scorename"] >= 50) {
                $grade = D;
                echo "คุณได้เกรด " . $grade;
            } else {
                $grade = F;
                echo "คุณได้เกรด " . $grade;
            }
            $sql = "INSERT INTO t_student (STD_ID,STD_NAME,STD_LASTNAME,STD_PHONE,STD_SCORE)"
                    . "VALUE('$get_id','$get_name','$get_lastname','$get_phone','$get_score')";
            $conn->query($sql);
            $sql = "INSERT INTO t_addess (ADD_NAME)"
                    . "VALUE('$get_address')";
            $conn->query($sql);
            $sql = "INSERT INTO t_grade (GRADE)"
                    . "VALUE('$grade')";
            $conn->query($sql);
        }
        ?>
    </center>
</body>
</html>
