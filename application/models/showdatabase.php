<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Showdatabase extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getdata() {
//        $this->load->library('adodb_loader');
        $sql = "SELECT * FROM t_student WHERE recordstatus = 'n'";
        $result = $this->adodb->GetAll($sql);
//        return by array
//        $result=database
//        foreach ($result as $row) {
//            //....
//        }
        return $result;
    }

    function getdata_exc($param) {
        $sql = "SELECT * FROM t_student";
        $result = $this->adodb->Execute($sql);
//        return by result set
//        while ($row = $result->FetchRow()) {
//            //....
//        }
        return $result;
    }

    function get_data_by_id($id) {
        $sql = "SELECT * FROM t_student WHERE id ={$id} ";
        // return by result set
        $result = $this->adodb->GetRow($sql);
        return $result;
    }

    function insert_into_t_student($data) {
        $sql = "INSERT INTO t_student (STD_ID,STD_NAME,STD_LASTNAME,STD_PHONE,STD_ADDRESS,STD_SCORE,STD_GRADE,recordstatus) "
                . "VALUE('{$data['get_id']}',"
                . "'{$data['get_name']}',"
                . "'{$data['get_lastname']}',"
                . "'{$data['get_phone']}',"
                . "'{$data['get_address']}',"
                . "'{$data['get_score']}',"
                . "'{$data['grade']}',"
                . "'n')";
        $this->adodb->Execute($sql);
    }

    function update($data) {
        $sql = "UPDATE `t_student` "
                . "SET STD_ID = '{$data['get_id']}',"
                . "STD_NAME = '{$data['get_name']}',"
                . "STD_LASTNAME ='{$data['get_lastname']}',"
                . "STD_PHONE = '{$data['get_phone']}',"
                . "STD_ADDRESS = '{$data['get_address']}',"
                . "STD_SCORE = '{$data['get_score']}',"
                . "STD_GRADE = '{$data['grade']}' "
                . "WHERE ID = '{$data['id']}'";
//        $this->load->library('adodb_loader');
        $result = $this->adodb->Execute($sql);
        return $result;
    }

    function deletedata($id) {
        $sql = "UPDATE `t_student` SET `recordstatus`= 'd' WHERE ID = {$id}";
        /* $sql = "DELETE FROM t_student WHERE id ={$id}"; */
        // return by result set
        $result = $this->adodb->GetRow($sql);
        return $result;
    }

    function getdataold() {

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "student";

        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
        mysqli_set_charset($conn, "utf8");

        $sql = "SELECT*FROM t_student";
        $result = $conn->query($sql);
        return $result;
    }

}
