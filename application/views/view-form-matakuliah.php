<html>

<head>
	<title>Form Input Matakuliah</title>
</head>

<body>
	<center>
		<from  action="<? =  base url('matakuliah/cetak');   ?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						Form Input Data Mata Kuliah
					</th>
				</tr>
				<tr>
				<td clospan="3">
					<hr>
				</td>
			</tr>
			<tr>
			<th>Kode Mtk</th>
			<th>:</th>
			<td>
				<input type="text" name="Kode" id="Kode">
			</td>
		</tr>
		<tr>
			<th>Nama MTK</th>
			<td>:</td>
			<td>
				<input type="text" name="nama" id="nama">
			</td>
		</tr>
		<tr>
			<th>SKS</th>
			<td>:</td>
			<td>
				<select name="sks" id="sks">
					<option value="">Pilih SKS</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colpan="3" aling="center">
				<input type="submit" value="submit">
			</td>
		</tr>
	</table>
</from>
</center>
</body>
</html>
