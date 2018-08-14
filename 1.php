<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

    </head>
    <body>
        <?php
        error_reporting(1);

        $input = 99;
        $input1 = $input;
        $Number = array(
            'id1' => 15,
            'id2' => 10,
            'id3' => 7,
            'id4' => 30
        );

        $tangmo = 0;
        $som = 0;

        while ($input >= $Number[id2]) {
            if ($input >= $Number[id4] && $t = $input - $Number[id4] >= $Number[id2]) {
                $tangmo++;
                $input = $input - $Number[id4];
              
            } else {
                $som++;
                $input = $input - $Number[id2];
                $t = $input;
               
            }
        }
     
        echo "แตงโมราคา " . "$Number[id4]" . " บาท จำนวน " . "$tangmo" . " ลูก เป็นเงิน " . $Number[id4] * $tangmo . " บาท";
        ?><br><?php echo "ส้มราคา " . "$Number[id2]" . " บาท จำนวน " . "$som" . " ลูก เป็นเงิน " . $Number[id2] * $som . " บาท"; ?><br><?php
        echo "รวม " . $tote = ($Number[id2] * $som) + ($Number[id4] * $tangmo) . " บาท เหลือเงิน " . $input . " บาท"; ?><br><?php
        
        $som = 0;
        $kuy = 0;

        while ($input1 >= $Number[id3]) {
            if ($input1 >= $Number[id2] && $t = $input1 - $Number[id2] >= $Number[id3]) {
                $som++;
                $input1 = $input1 - $Number[id2];
            } else {
                $kuy++;
                $input1 = $input1 - $Number[id3];
                $t = $input1;
            }
        }
        
        ?><br><?php
        echo "ส้มราคา " . "$Number[id2]" . " บาท จำนวน " . "$som" . " ลูก เป็นเงิน " . $Number[id2] * $som . " บาท";
        ?><br><?php
        echo "กล้วยราคา " . "$Number[id3]" . " บาท จำนวน " . "$kuy" . " หวี เป็นเงิน " . $Number[id3] * $kuy . " บาท";
        ?><br><?php
        echo "รวม " . $tote = ($Number[id2] * $som) + ($Number[id3] * $kuy) . " บาท เหลือเงิน " . $input1 . " บาท";
        ?>
    </body>
</html>
