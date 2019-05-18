<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>soal 2</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
	// buat array baru
	$arr=[];
	// buat fungsi generateString
	function generateString($jumlah){
		// inisialisasi index 
		$index=0;
		// buat perulangan menghitung jumlah string yang akan di tampilkan 
		for ($i=0; $i < $jumlah; $i++) { 
			// limit panjang string
			$jumlahna=32;
			// karakter yang ada untuk string 
			$karakter = '0123456789abcdefghijklmnopqrstuvwxyz';
			// hitung jumlah karakter
			$panjangKarakter=strlen($karakter);
			// string kosong untuk di isi
			$string="";
			// buat perulangan acak dan mengisi karakter untuk $string
			for ($j=0; $j < $jumlahna; $j++) { 
				// acak karakter
				$acak=rand(0,$panjangKarakter-1);
				// masukkan karakter yang di acak ke dalam string
				$string .=$karakter[$acak];
			}
			// masukkan string ke array baru
			$GLOBALS['arr'][$i]=$string;
		}
		// tampilkan data array baru
		print_r($GLOBALS['arr']);
	}

	// buat fugsi cek duplikasi
	function cekDuplikasi($data){
		// hitungpanjang array
		$jumlah=count($data);
		// buat kondisi data duplikat
		$ada=false;
		// buat perulangan mencari data duplkat
		for ($i=0; $i < $jumlah; $i++) { 
			for ($j=$i+1; $j < $jumlah; $j++) { 
				if ($data[$j]==$data[$i])
				{
					// jika ada
					$ada=true;
				}
				else
				{
					// jika tidak
					$ada=false;
				}
			}
		}
		// buat kondisi jika data ada.
		if ($ada) {
			// jika iya
			echo "ada data yang sama!";
		}else{
			// jika tidak
			echo "tidak ada data yang sama!";
		}
	}
	// panggil fungsi generate string
	print(generateString(5));
	// panggil fngsi cek duplikasi
	print_r(cekDuplikasi($arr));
	?>
</body>
</html>