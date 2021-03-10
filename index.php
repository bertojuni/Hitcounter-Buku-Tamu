<html>
<head>
<title>Berto Juni Krisnanto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="ketengah" align="center"><h3>My Profile</h3></div>
	<img src="berto.jpg" class="img-thumbnail img-fluid" width="250" height="100" alt="Cinque Terre">
	<table class="table">
	<div class="table-responsive">
		<table class="table  table-striped table-hover">
		<tbody>
			<tr>
				<td><h4>Nama</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Berto Juni Krisnanto</h4></td>
			</tr>
			<tr>
				<td><h4>NIM</h4></td>
				<td><h4> : </h4></td>
				<td><h4>1700018224</h4></td>
			</tr>
			<tr>
				<td><h4>Prodi</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Teknik Informatika</h4></td>
			</tr>
			<tr>
				<td><h4>Alamat</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Warungboto Yogyakarta</h4></td>
			</tr>
			<tr>
				<td><h4>Skill</h4></td>
				<td><h4> : </h4></td>
				<td><h4>Web Developer and UI/UX Designer</h4></td>
			</tr>
			</tbody>
	</table>
<a aling="center" href="buku.html" class="btn btn-primary btn-lg">Buku Tamu</a>
<a aling="center" href="lihat.php" class="btn btn-info btn-lg">Lihat Pengunjung</a>
<?php
$filecounter="counter.txt";
$fl=fopen($filecounter,"r+");
$hit=fread($fl,filesize($filecounter));
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF><tr>");
echo("<td width=250 valign=middle align=center>");
echo("<font face=verdana size=2 color=#FF0000><b>");
echo("Anda pengunjung yang ke:");
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl);
$fl=fopen($filecounter,"w+");
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit));
fclose($fl);
?>
</body>

</html>