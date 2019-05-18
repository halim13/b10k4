<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>soal 4</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
	echo "<br>";
	
	// buat fungsi cetak
	function cetak($jumlah){
		// buat variabel untuk penjumlahan
		$jumlahna=$jumlah-1;
		// jika angka yang di masukkan genap
		if ($jumlah%2==0) {
			// jika ya
			// tampikan ini
			echo "Masukkan angka ganjil";
		}else{
			// jika tidak
			// tampilkan ini
			// perulangan ntuk menampilkan karkter
			for ($i=0; $i < $jumlah; $i++) { 
				for ($k=0; $k < $jumlah; $k++) {
				 // jika $i sama dengan $k atau $K samadengan $jumlahna
					if ($k==$i||$k==$jumlahna) {
						// jika iya
						echo "x ";
					}else{
						// jika tidak
						echo "= ";
					}
				}
				// kurangi jumlahna dengan 1
				$jumlahna--;
				echo "<br>";
			}
		}
	}
	// panggil fungsi cetak
	cetak(5);
	?>
</body>
</html>