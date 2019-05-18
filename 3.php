<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Soal 3</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
	// buat fungsi mencari karakter yang sama dalam string
	function myCountChar($string,$karakter) {
		// pecah string menjadi satu karakter dalam array
		$pecah=str_split($string);
		// nilai awal jumlah yang sama
		$awal= 0;
		// buat perulangan menampikan jumlah data yang sama
		foreach($pecah as $key => $val)
			// jika karakter sam dengan array ke n dari $pecah maka tambahkan nilai awal dengan 1.
			if ($val==$karakter) $awal++;
		// return nilai awal
		return $awal;
	} 
	// panggil fungsi untuk mencari karakter yang sama dalam string
	print(myCountChar("bootcamp","o"));
	?>
</body>
</html>