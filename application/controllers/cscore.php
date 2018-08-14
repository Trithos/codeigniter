<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cscore extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
      //  $this->load->view('vscore');
          $this->load->view('wep');
    }

    public function showdatabase() {
        //โหลดโมเดล เทเบิ้ล
        $this->load->model('showdatabase');
        $result = $this->showdatabase->getdata();
        // รับ $result มา
        // ตั้งค่าตัวแปรส่งไปที่ view
        $data = array(
            'title' => 'TODO supply a title',
            'result' => $result
        );
        $this->load->view('vscore_showall', $data);
    }

    public function insert() {
        error_reporting(1);
        $get_id = $_POST["stdid"];
        $get_name = $_POST["name"];
        $get_lastname = $_POST["lastname"];
        $get_phone = $_POST["phone"];
        $get_address = $_POST["address"];
        $get_score = $_POST["score"];
        if ($_POST["score"] > 100) {
            echo "คุณกรอกคะแนนผิดพลาด!(โปรดกรอกเลข 0-100)";
        } elseif ($_POST["score"] < 0) {
            echo "คุณกรอกคะแนนผิดพลาด!(โปรดกรอกเลข 0-100)";
        } else {
            if ($_POST["score"] >= 80) {
                $grade = 'A';
            } elseif ($_POST["score"] >= 70) {
                $grade = 'B';
            } elseif ($_POST["score"] >= 60) {
                $grade = 'C';
            } elseif ($_POST["score"] >= 50) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }

            $this->load->model('showdatabase');
            //        $sql .= "VALUE('{$data['get_id']}','{$data['get_name']}','{$data['get_lastname']}','{$data['get_phone']}','{$data['get_score']}')";
            $data = array(
                'get_id' => $get_id,
                'get_name' => $get_name,
                'get_lastname' => $get_lastname,
                'get_phone' => $get_phone,
                'get_address' => $get_address,
                'get_score' => $get_score,
                'grade' => $grade
            );

            $result = $this->showdatabase->insert_into_t_student($data);
            echo 'รหัสนักศึกษา ';
            echo $get_id;
            ?><br>
            <?php
            echo 'ชื่อ ';
            echo $get_name;
            ?>&emsp;
            <?php
            echo 'นามสกุล ';
            echo $get_lastname;
            ?><br>
            <?php
            echo 'เบอร์โทรศัพท์ ';
            echo $get_phone;
            ?><br>
            <?php
            echo 'ที่อยู่ ';
            echo $get_address;
            ?>&emsp;
            <?php
            echo 'คะแนน ';
            echo $get_score;
            ?>&emsp;
            <?php
            echo 'เกรด ';
            echo $grade;
        }
    }

    public function edit() {
        $id = $_GET["ID"];
//โหลดโมเดล เทเบิ้ล
        $this->load->model('showdatabase');
        $result_edit = $this->showdatabase->get_data_by_id($id);
        $data = array(
            'title' => 'Edit',
            'result_edit' => $result_edit
        );
// ตั้งค่าตัวแปรส่งไปที่ view
        $this->load->view('vscore_edit', $data);
    }

    function update() {
        error_reporting(1);
        $id = $_POST["ID"];
        $get_id = $_POST["stdid"];
        $get_name = $_POST["name"];
        $get_lastname = $_POST["lastname"];
        $get_phone = $_POST["phone"];
        $get_address = $_POST["address"];
        $get_score = $_POST["score"];
        if ($_POST["score"] > 100) {
            echo "คุณกรอกคะแนนผิดพลาด!(โปรดกรอกเลข 0-100)";
        } elseif ($_POST["score"] < 0) {
            echo "คุณกรอกคะแนนผิดพลาด!(โปรดกรอกเลข 0-100)";
        } else {
            if ($_POST["score"] >= 80) {
                $grade = A;
            } elseif ($_POST["score"] >= 70) {
                $grade = B;
            } elseif ($_POST["score"] >= 60) {
                $grade = C;
            } elseif ($_POST["score"] >= 50) {
                $grade = D;
            } else {
                $grade = F;
            }
            echo 'รหัสนักศึกษา ';
            echo $get_id;
            ?><br>
            <?php
            echo 'ชื่อ ';
            echo $get_name;
            ?>&emsp;
            <?php
            echo 'นามสกุล ';
            echo $get_lastname;
            ?><br>
            <?php
            echo 'เบอร์โทรศัพท์ ';
            echo $get_phone;
            ?><br>
            <?php
            echo 'ที่อยู่ ';
            echo $get_address;
            ?>&emsp;
            <?php
            echo 'คะแนน ';
            echo $get_score;
            ?>&emsp;
            <?php
            echo 'เกรด ';
            echo $grade;
            $this->load->model('showdatabase');
            //        $sql .= "VALUE('{$data['get_id']}','{$data['get_name']}','{$data['get_lastname']}','{$data['get_phone']}','{$data['get_score']}')";
            $data = array(
                'id' => $id,
                'get_id' => $get_id,
                'get_name' => $get_name,
                'get_lastname' => $get_lastname,
                'get_phone' => $get_phone,
                'get_address' => $get_address,
                'get_score' => $get_score,
                'grade' => $grade
            );
            $result_update = $this->showdatabase->update($data);
        }
    }

    public function delete() {
        $id = $_GET["ID"];
//โหลดโมเดล เทเบิ้ล
        $this->load->model('showdatabase');
        $result_edit = $this->showdatabase->deletedata($id);
//โหลดโมเดล เทเบิ้ล
        $this->load->model('showdatabase');
        $result = $this->showdatabase->getdata();
// ตั้งค่าตัวแปรส่งไปที่ view
        $data = array(
            'title' => 'TODO supply a title',
            'result' => $result
        );
        $this->load->view('vscore_showall', $data);
    }

    public function read_vscoer() {
        $this->load->view('vscore');
    }

}
