<?php
$hargabeli = 8000;
$hargajual = 7500;
$keuntungan = 300;
$hasil = ($hargabeli - $hargajual) / $keuntungan;
$inthasil = (int) $hasil;
echo "Harga beli = Rp $hargabeli<br>";
echo "Harga Jual = Rp $hargajual<br>";
echo "Keuntungan = Rp $keuntungan<br>";
echo "Berapa Jumlah kambing yang dibeli?Jawaban : $inthasil ekor ";
?>