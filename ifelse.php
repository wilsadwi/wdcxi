<?php
//contoh if
//   $nilai = 85;

//   if($nilai > 90){
//     echo "Grade A";
//   }
//   elseif ($nilai > 80) {
//     echo "Grade B";
//   }
// echo "</br>";
// //contoh if
//   $uts = 10;

//   if($uts > 9){
//     echo "Anda Lulus";
//   }
//   else {
//     echo "Anda Tidak Lulus";
//   }


// percabangan switch case
    // $creddit = 9999;

    // switch ($creddit) {
    //     case '9':
    //         echo "Social Creddit Anda Anda Sangat Rendah";
    //         break;
    //     case '99':
    //         echo "Social Creddit Anda Anda Rendah";
    //         break;
    //     case '999':
    //         echo "Social Creddit Anda Anda Banyak";
    //         break;
    //     case '9999':
    //         echo "Pemerintah Menyukai Anda!";
    //         break;
    //     default:
    //     echo "Anda Buronan!";
    // }

    // $jomok = true;
    // echo $jomok ? "KAMU JOMOK" : "KAMU AMAN"

    // percabangan if
    $nilaiUas = 76;
    $nilaiUts = 80;

    if ($nilaiUas >= 80) {
        echo "Selamat, Anda Lulus!";
    }
    else {
        if ($nilaiUts >= 70) {
            echo "Anda Lulus Karena Nilai UTS Terpenuhi";
        }
        else {
            echo "Anda Tidak Lulus";
        }
    }
?>