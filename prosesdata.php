<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $nd = $_POST['nd'];
    $nb = $_POST['nb'];
    $tl = $_POST['tl'];
    $hobby = $_POST['hobby'];
    $cita = $_POST['cita-cita'];
    $alamat = $_POST['alamat'];

    echo "Nama Anda : ".$nama."</br>";
    echo "Nama depan : ".$nd."<br>";
    echo "Nama belakang : ".$nb."<br>";
    echo "Jenis Kelamin Anda : ".$jk."</br>";
    echo "Tanggal lahir anda : ".$tl."<br>";
    echo "Hobby anda : ".$hobby."<br>";
    echo "Cita-cita anda : ".$cita."<br>";
    echo "Alamat : ".$alamat."<br>";

}
?>