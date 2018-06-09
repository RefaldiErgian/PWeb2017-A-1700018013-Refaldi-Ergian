<html>
<head>
	<title>Kalkulator Simple</title>
	<link rel="stylesheet" type="text/css" href="simplestyle.css">
	<link rel="stylesheet" type="text/css" href="simpleloader.css">
</head>
<body onload="loadfunc()" style="margin:0;" bgcolor="#3e3e3e">
	<div id="loader"></div>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	
	<div style="display:none;" id="myDiv" class="animate-bottom">
	<h3><a href="index.php"><button class="cbutton cbutton1">Go To Advance Calculator</button></a></h3>
	<div class="kalkulator">
		<form method="post" action="simpleindex.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+ (tambah)</option>
				<option value="kurang">- (kurang)</option>
				<option value="kali">x (kali)</option>
				<option value="bagi">/ (bagi)</option>
			</select>
			<input type="submit" name="hitung" value="Hasil =" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
	</div>
	<script>
	var myVar;
	function loadfunc() {
		myVar = setTimeout(showPage, 500);
	}

	function showPage() {
	  document.getElementById("loader").style.display = "none";
	  document.getElementById("myDiv").style.display = "block";
	}
	</script>
</body>
</html>