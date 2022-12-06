<?php
    include('./data/fakta.php');

    if ($A11 && $A14 && $A5 && $A8 && $A24 && $A32) {
        header("location: hasil-visual.php");
    } else if ($A1 && $A17 && $A19 && $A21 && $A27) {
        header("location: hasil-auditori.php");
    } else if ($A12 && $A16 && $A2 && $A20 && $A25) {
        header("location: hasil-kinestetik.php");
    } else if ($A13 &&  $A10 && $A23 && $A28) {
        header("location: hasil-verbal.php");
    } else if ($A15 && $A26 && $A30 && $A7) {
        header("location: hasil-logis.php");
    } else if ($A18 && $A3 && $A4 && $A31 && $A9) {
        header("location: hasil-interpersonal.php");
    } else if ($A6 && $A21 && $A29 && $A33) {
        header("location: hasil-intrapersonal.php");
    }
    else {
        header("location: tidak-ditemukan.php");
    }
