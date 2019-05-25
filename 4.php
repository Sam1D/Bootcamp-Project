<?php 

function gambar($petak){
	$confirm = $petak % 2;

	if ($confirm == 0) {
		echo "Harus bilangan Ganjil";
	}else{
		$median = $petak / 2 + 0.5; // MENCARI BILANGAN TENGAH
		$kotak_isi = $petak - 2; // MENCARI BERAPA BARIS ISI KOTAK
		
		// BARIS ATAS
		for ($i=1; $i <= $petak; $i++) { 
			echo "x ";
		}
		echo "<br>";

		// BARIS ISI
		for ($i=0; $i < $kotak_isi; $i++) { 
			for ($j=1; $j <= $petak; $j++) { 
				if ($j != $median) {
				echo "= ";
				}else{
					echo "x ";
				}
			}

			echo "<br>";
		}

		// BARIS BAWAH
		for ($i=1; $i <= $petak; $i++) { 
			echo "x ";
		}
	}

}

gambar(7);
?>