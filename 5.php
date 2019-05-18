<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>soal 5</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
	// buat datanya
		$data=['z','a','s','b'];
		// buat fungsi menampilkan data terendah dan tertinggi
		function minmax($datanya){
			// buat array baru untuk meampung hasil
			$dataBaru=[];
			// buat vaiabel untuk awal data baru
			$jumlah=0;
			// susun array dari terendahke tertinggi
			$sort=sort($datanya);
			// cari panjang array
			$hitung=count($datanya);
			// buat perulangan untuk memasukkan data terendah dan tertinggi ke array baru
			for ($i=0; $i < $hitung; $i++) { 
				// jika data awal atau data akhir maka masukkan data ke aray baru
				if ($i==0||$i==$hitung-1) {
					$dataBaru[$jumlah]=$datanya[$i];
					$jumlah++;
				}
			}
			// munculan nilai data baru
			return $dataBaru;
		}
		// panggil fungsi mencari data terendah dan tertinggi
		print_r(minmax($data));
	?>
</body>
</html>