<?php 

$kalimat_lama = "purwakarta";

function ganti_kata($kalimat, $pilihan, $ubah){
	$pecah = str_split($kalimat, 1);
	$jum_pecah = count($pecah);

	for ($i=0; $i < $jum_pecah; $i++) { 
		if ($pecah[$i] == $pilihan) {
			$pecah[$i] = $ubah;
		}
	}

	$hasil = implode("", $pecah);
	return $hasil;
}

$kalimat_baru = ganti_kata($kalimat_lama, "a", "o"); // MENJALANKAN FUNGSI ganti_kata

// OUTPUT
echo "Kalimat Awal : ".$kalimat_lama;
echo "<br>";
echo "Kalimat Baru : ".$kalimat_baru;
?>