<?php
  //koneksi ke database

$konek = mysqli_connect("localhost", "root","","websensor");

//baca isi tabel sensor
$sql = mysqli_query($konek, "select * from sensor");
$data = mysqli_fetch_array($sql);
$nilai = $data["nilai_sensor"];

echo $nilai ; 



?>