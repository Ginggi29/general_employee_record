<?php 

$koneksi = mysqli_connect("localhost", "root", "", "firefight_company_employees");

$data = mysqli_query($koneksi, "SELECT * FROM ger");

 ?>





<!DOCTYPE html>
<html>
<head>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>           
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>General Employee Record</title>
</head>
<body>

	<div class = "container">

<h2 align="center">General Employee Record</h2>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Nama Perusahaan</th>
		<th>Jenis Perusahaan</th>
		<th>Jabatan</th>
		<th>Periode</th>
		<th>Alasan</th>
	</tr>

	<?php $i =1; ?>
	<?php while( $row = mysqli_fetch_assoc($data) ) : ?>
		<tr>
			<td align="center"><?= $i; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["nama_perusahaan"]; ?></td>
			<td><?= $row["jenis_perusahaan"]; ?></td>
			<td><?= $row["jabatan"]; ?></td>
			<td><?= $row["periode"]; ?></td>
			<td><?= $row["alasan"]; ?></td>
		</tr>

	<?php $i++; ?>
	<?php endwhile;?>
</table>

</div>

</body>
</html>