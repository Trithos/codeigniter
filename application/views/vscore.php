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
       <div class="alert alert-info" role="alert">คำนวนเกรด</div>
<form action="insert" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">รหัสนักศึกษา</label>
      <input type="text" class="form-control" name="stdid" id="stdid" placeholder="StudentID" required pattern="[0-9\s]*" title="กรุณากรอกตัวเลข">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">ชื่อ</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="name" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">นามสกุล</label>
      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร">
    </div>
    </div>
  <div class="form-row">
      <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">เบอร์โทรศัพท์</label>
      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required pattern="[0-9\s]*" title="กรุณากรอกตัวเลข">
      </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">ที่อยู่</label>
      <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationDefault04">คะแนน</label>
      <input type="text" class="form-control" name="score" id="score" placeholder="Score" required pattern="[0-9\s.]*" title="กรุณากรอกตัวเลข">
    </div>
  </div>
    <input type="submit" class="btn btn-success btn-lg btn-block" value="Submit">
</form>
    </body>
</html>
