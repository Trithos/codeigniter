<!DOCTYPE html>
<html>
    <head>
        <style>

            * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial;
                padding: 30px;
                background:#B0C4DE; /* สีพื้นหลัง */
            }

            /*ส่วนหัวข้อหลัก*/
            .header {
                padding: 30px;
                text-align: center;
                background: window;
            }


            .header h1 {
                font-size: 60px; /*ขนาดตัวหนังสือหัวข้อหลัก*/
            }


            /* สไตล์แถบการลิ้งค์ด้านบน */
            .topnav {
                overflow: hidden;
                background-color:	#000080;
            }

            /* จัดรูปแบบบนแถบลิ้งค์ */
            .topnav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* เปลี่ยนสีแถบลิ้งค์ */
            .topnav a:hover {
                background-color: #f2f2f2;
                color: black;
            }

            /* ตำแหน่งคอลัมม์ */
            /* Left column */
            .leftcolumn {   
                float: left;
                width: 75%;
            }

            /* Right column */
            .rightcolumn {
                float: right;
                width: 25%;
                background-color: #f1f1f1;
                padding-left: 20px;
            }

            /* สีกรอบตรงกลางรอบใน */ 
            .fakeimg {
                background-color: #F8F8FF;
                width: 100%;
                padding: 20px;
            }

            /* สีกรอบรอบนอก */
            .card {
                background-color: #ADD8E6;
                padding: 20px;
                margin-top: 20px;
            }

            /* แบ่งช่องว่างคอลัมป์ */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* ส่วนล่าง */
            .footer {
                padding: 10px;
                text-align: center;
                background: #87CEFA;
                margin-top: 20px;
            }

            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 800px) {
                .leftcolumn, .rightcolumn {   
                    width: 100%;
                    padding: 0;
                }
            }

            /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
            @media screen and (max-width: 400px) {
                .topnav a {
                    float: none;
                    width: 100%;
                }
            }
            div.static {
                position: static;
                text-align: center;
                border: 10px solid #0000CD;
            </style>
        </head>
        <body>
            <div class="static">

                <div class="header">
                    <h1>ระบบทะเบียนและประมวลผลเกรด</h1>
                    <p>.........................................</p>
                </div>
            </div>

            <div class="topnav">
                <h3><a href="http://127.0.0.1/php/index.php/cscore/read_vscoer">ลงทะเบียน</a></h3>
                <h3><a href="http://127.0.0.1/php/index.php/cscore/showdatabase">แสดงข้อมูล</a></h3>
                
                <h3><a href="http://www.google.com" style="float:right">Help</a></h3>
                </div>

                <div class="row">
                    <div class="leftcolumn">
                        <div class="card">
                            <h2>CodeIgniter</h2>

                            <div class="fakeimg" style="height:200px;">CodeIgniter คือ framework ที่ถูกพัฒนาขึ้นด้วย ภาษา PHP สำหรับ CodeIgniter Framework เป็นเครื่องมือสำหรับช่วยพัฒนาเว็บไซต์และเว็บแอปผลิเคชั่น โดยมีโครงสร้างการพัฒนาโปรแกรมอย่างเป็นระบบและรวมคำสั่งต่างๆ ที่จำเป็นต่อการพัฒนาเว็บไซต์ด้วย PHP ใว้ภายใน CodeIgniter พัฒนาโดย Rick Ellis ซึ่งมีลิขสิทธิเป็น Open Source สามารถดาวน์โหลดและใช้ได้ฟรี ถูกพัฒนาขึ้นตั้งแต่ปี 2006 และยังมีการพัฒนามาเรื่อยๆ จนถึงปัจจุบัน</div>
                        <p>Some text..</p>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>

                </div>

                <div class="rightcolumn">


                    <div class="card">

                        <div class="static">
                            <h2>--ปฏิทิน--</h2>
                            <style type="text/css">
     /*ปฏิทิน*/                   #calendar_css {
                                    background-color:#F0F0F0;
                                    border-style:solid;
                                    border-width:0px;
                                    border-right-width:0px;
                                    border-bottom-width:0px;
                                    border-color:#cccccc;
                                }
                                #calendar_css td{
                                    text-align:center;
                                    font:35px tahoma;
                                    width:2%;
                                    height:30px;
                                }
                                #calendar_css thead{
                                    text-align:center;
                                    font:15px tahoma;
                                    width:2%;
                                    height:30px;
                                    background-color:#333333;
                                    color:#FFFFFF;
                                }
                                #calendar_css .current{
                                    text-align:center;
                                    font:15px tahoma;
                                    width:2%;
                                    height:30px;
                                    background-color:#FF0000;
                                    color:#FFFFFF;
                                }
                                col.holidayCol{
                                    background-color:#FDDFE4;
                                    color:#FF0000;
                                }
                                td.monthTitle{
                                    background-color:#666666;
                                    text-align:center;
                                    font:30px bold tahoma;  
                                }
                            </style>
                            <?php
                            $day_now = array("Sun" => "1", "Mon" => "2", "Tue" => "3", "Wed" => "4", "Thu" => "5", "Fri" => "6", "Sat" => "7");
                            $first_day = date("D", mktime(0, 0, 1, intval(date("m")), 1, date("Y")));
                            $start_td = $day_now[$first_day] - 1;
                            $num_day = date("t");
                            $num_day2 = ($num_day + $start_td);
                            $num_day3 = (7 * ceil($num_day2 / 7));
                            ?>   
                            <table id="calendar_css" width="175" border="0" cellspacing="0" cellpadding="0">   
                                <colgroup>   
                                    <col class="holidayCol" />   
                                    <col span="5" />   
                                    <col class="holidayCol" />   
                                </colgroup>   
                                <thead>   
                                    <tr>
                                        <td colspan="7" class="monthTitle">
                                            <?= date("M-Y") ?>
                                        </td>
                                    </tr>
                                    <tr>   
                                        <td>อา </td>   
                                        <td>จ </td>   
                                        <td>อ </td>   
                                        <td>พ </td>   
                                        <td>พฤ </td>   
                                        <td>ศ </td>   
                                        <td>ส </td>   
                                    </tr>   
                                </thead>   
                                <?php for ($i = 1; $i <= $num_day3; $i++) { ?>   
                                    <?php if ($i % 7 == 1) { ?>   
                                        <tr>   
                                        <?php } ?>   
                                        <td   <?= (date("j") == $i - $start_td) ? "class=\"current\"" : "" ?>> <?= ($i - $start_td >= 1 && $i - $start_td <= $num_day) ? $i - $start_td : " " ?> </td>   
                                        <?php if ($i % 7 == 0) { ?>   
                                        </tr>   
                                    <?php } ?>   
                                <?php } ?>   
                            </table> 


                        </div>

                    </div>


                </div>
            </div>

            <div class="footer">
                <h2> copyright &copy 2018-2018</h2>
            </div>

        </body>
    </html>
