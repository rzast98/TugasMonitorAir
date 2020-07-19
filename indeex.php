<!DOCTYPE html>
<html>
<head>
	<title>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>

	<center>

		<h2>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP<br/><a href="https://www.malasngoding.com">WWW.MALASNGODING.COM</a></h2>


		<?php 
		include 'koneksi.php';
		?>

		<br/><br/><br/>

		<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<input type="submit" value="FILTER">
		</form>

		<br/> <br/>

		<table border="1">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Waterflow1</th>
                <th>Waterflow2</th>
				<th>Waterflow3</th>
				<th>Waterflow4</th>

			</tr>
			<?php 
			$no = 1;

			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$sql = mysqli_query($koneksi,"select * from datasensor where tanggal='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"select * from datasensor");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['waterflow1']; ?></td>
                <td><?php echo $data['waterflow2']; ?></td>
                <td><?php echo $data['waterflow3']; ?></td>

                <td><?php echo $data['waterflow4']; ?></td>

			</tr>
			<?php 
			}
			?>
		</table>

	</center>
</body>
</html>