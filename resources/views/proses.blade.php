<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<div class="container">
    <div class="justify-content-center">
        <div class="card-body">
            <table class="table table-bordered">
                <tr class="table-secondary">
                    <td>Jenis Kinerja</td>
                    <td>Status</td>
                </tr>
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
            </table>
            <a href="/input" class="btn btn-primary">Kembali</a>
            <button onclick="window.print()" class="btn btn-warning" style="float: right;">Cetak</button>
        </div>
    </div>
</div>

</body>

</html>