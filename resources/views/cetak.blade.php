@extends('home')

@section('page-title', 'kesimpulan')
@section('breadcrumb-title', 'kesimpulan')

@section('konten')

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
<a href="/cetak" target="_blank">CETAK</a>
<div class="container">
    <div class="justify-content-center">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <h2>SELAMAT KAMU BERUNTUNG!!!</h2>

            </table>

            <script>
                window.print();
            </script>

            <a href="/input" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

</body>

</html>


@endsection