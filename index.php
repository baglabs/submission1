<html>
	<head>
		<title>My Bubble Apps and Games Laboratory</title>
	</head>
	<body style="text-align: center;margin: auto;width: 50%;padding: 10px;">
		<div>
			<h2>Daftar Kegiatan</h2>
		</div>
		<div>
			<form action="insert_data.php" method="POST">
				Nama Kegiatan: <input name="kegiatan" type="text"/><br/><br/>
				<input type="submit" value="Simpan"/>
			</form>
		</div>
		<div style="margin: auto;width: 50%;padding: 10px;">
			<table border='1px'>
				<tr>
					<td>Kegiatan</td>
					<td>Tanggal Dibuat</td>
				</tr>
				<?php
					include('get_data.php');
				?>
			</table>
		</div>
	</body>
</html>