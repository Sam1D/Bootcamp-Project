<?php 

function hitung_vokal($kalimat){
	$jumlah = 0;

	$pecah = str_split($kalimat, 1);
	$jum_pecah = count($pecah);

	for ($i=0; $i < $jum_pecah; $i++) { 
		if ($pecah[$i] == 'a' || $pecah[$i] == 'i' || $pecah[$i] == 'u' || $pecah[$i] == 'e' || $pecah[$i] == 'o') {
			$jumlah++;
		}	
	}

	return $jumlah;
}

$vokal = hitung_vokal("programmer"); // Menjalankan Fungsi hitung_vokal
echo "Jumlah Vokal : ". $vokal;
?>