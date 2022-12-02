<?php
    
     $A1 = isset($_POST["A1"]) ? $_POST["A1"] : "0";
     $A2 = isset($_POST["A2"]) ? $_POST["A2"] : "0";
     $A3 = isset($_POST["A3"]) ? $_POST["A3"] : "0";
     $A4 = isset($_POST["A4"]) ? $_POST["A4"] : "0";
     $A5 = isset($_POST["A5"]) ? $_POST["A5"] : "0";
     $A6 = isset($_POST["A6"]) ? $_POST["A6"] : "0";

    if ($A1 == 1 && $A2 == 1 && $A3 == 1 && $A4 == 1 && $A5 == 1 && $A6 == 1 ) {
        echo 'Gaya Belajar Visual';
    } else if ($A1==1 && $A4 == 1 && $A5 == 1) {

        echo 'Gaya Belajar Verbal';
    }
    else {
        echo 'Mohon maaf sistem kami belum dapat memberikan kesimpulan untuk gaya belajar anda';
    }

?>