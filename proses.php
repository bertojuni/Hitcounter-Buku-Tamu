<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body background="bg.jpg">
<div class="jumbotron">

<?php
echo "<head><title>GUEST BOOK</head></title>";
$fp = fopen("bukutamu.txt","a+");
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$komen = $_POST['komen'];

fputs($fp,"$nama|$alamat|$jk|$komen\n");
fclose($fp);
echo " Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a class=btn href=buku.html> Isi Buku Tamu </a><br>";
echo "<a class=btn href=index.php> Lihat Profile </a><br> ";
?>
</div>
</body>
</html>