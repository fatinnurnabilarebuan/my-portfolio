<?php
	include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$results = mysqli_query($db, "SELECT * FROM logpelapor WHERE tarikh='$tarikh'");

while ($row = mysqli_fetch_array($results))
{
?>

<table class="table table-striped">
<tr>
<th>Tarikh</th>
<td><?php echo $row['tarikh'] ?></td>
</tr>
<tr>
<th>Masa</th>
<td><?php echo $row['masa'] ?></td>
</tr>
<tr>
<th>Nama Pelapor</th>
<td><?php echo $row['namapelapor'] ?></td>
</tr>
<tr>
<th>Bahagian</th>
<td><?php echo $row['bahagian'] ?></td>
</tr>
<tr>
<th>Pejabat/Sektor/Unit</th>
<td><?php echo $row['pejsektorunik'] ?></td>
</tr>
<tr>
<th>Aras</th>
<td><?php echo $row['aras'] ?></td>
</tr>
<tr>
<th>Blok</th>
<td><?php echo $row['blok'] ?></td>
</tr>
<tr>
<th>No. Telefon</th>
<td><?php echo $row['nophone'] ?></td>
</tr>
<tr>
<th>Emel</th>
<td><?php echo $row['email'] ?></td>
</tr>
<tr>
<th>Jenis Kerosakan / Perkhidmatan</th>
<td><?php echo $row['JKP'] ?></td>
</tr>
<tr>
<th><th>Jenis Peralatan</th></th>
<td><?php echo $row['JP'] ?></td>
</tr>
<tr>
<th>Jenis Jenama</th>
<td><?php echo $row['jenama'] ?></td>
</tr>
<tr>
<th>Model Perisian</th>
<td><?php echo $row['model'] ?></td>
</tr>
<tr>
<th>Butiran Kerosakan / No Siri</th>
<td><?php echo $row['butiran'] ?></td>
</tr>
<tr>
<th>Keterangan Tambahan Butiran</th>
<td><?php echo $row['keterangan'] ?></td>
</tr>
<tr>
<th>Tarikh</th>
<td><?php echo $row['tarikh'] ?></td>
</tr>
</table>
<?php
}
?> 
<script type="text/javascript">
print();
window.close();
</script>
</body>
</html>