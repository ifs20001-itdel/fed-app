<!DOCTYPE html>
<html>

<head>
	<title>Cetak</title>
</head>

<body>

	<table class="table table-bordered table-striped">
		<tr>
			<td>Pelaksanaan Pendidikan</td>
			<td>{{ $data->status1 }}</td>
		</tr>
		<tr>
			<td>Pelaksanaan Penelitian</td>
			<td>{{ $data->status2 }}</td>
		</tr>
		<tr>
			<td>Pelaksanaan Pengabdian</td>
			<td>{{ $data->status3 }}</td>
		</tr>
		<tr>
			<td>Pelaksanaan Penunjang</td>
			<td>{{ $data->status4 }}</td>
		</tr>
		<tr style="background-color: #FFFBC1;">
			<td>Kriteria Pelaksanaan Pendidikan dan Pelaksanaan Penelitian</td>
			<td>{{ $data->status5 }}</td>
		</tr>
		<tr style="background-color: #FFFBC1;">
			<td>Kriteria Pelaksanaan Pengabdian dan Pelaksanaan Penunjang</td>
			<td>{{ $data->status6 }}</td>
		</tr>
		<tr>
			<td>TOTAL KINERJA</td>
			<td></td>
		</tr>

	</table>
	<script>
		window.print();
	</script>

</body>

</html>