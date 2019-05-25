<?php 

function tanggal_maju($tgl_awal, $tgl_akhir){
	$awal = strtotime($tgl_awal);
	$akhir = strtotime($tgl_akhir);

	for ($tgll = $awal; $tgll <= $akhir ; $tgll += 86400) { 
		echo "'".date("Y-m-d", $tgll)."', ";
	}
}

function tanggal_mundur($tgl_awal, $tgl_akhir){
	$awal = strtotime($tgl_awal);
	$akhir = strtotime($tgl_akhir);

	for ($tgll = $awal; $tgll >= $akhir ; $tgll -= 86400) { 
		echo "'".date("Y-m-d", $tgll)."', ";
	}
}

tanggal_maju('2019-05-19', '2019-05-25'); // Satu minggu kedepan (一週間先)
echo "<br><br>";
tanggal_mundur('2019-05-25', '2019-05-19'); // Satu minggu kebelsakang (一週間前)

?>