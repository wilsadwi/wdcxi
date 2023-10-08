<?php
    $siswas = [
        "Ranni",
        "Rykard",
        "Radhan",
        "Miquella",
        "Morgot",
        "Malenia"
  ];
  echo "<h3 style='color : blue'>Nama-nama Siswa</h3>";
  echo "<p>Berikut adalah nama-nama siswa yang <span style='color : red'>bermasalah di kelas XI RPL 10<span></p>";
  echo "<ul>";
    foreach ($siswas as $siswa) {
        echo "<li>".$siswa."</li>";
    }
    echo "</ul>";
?>