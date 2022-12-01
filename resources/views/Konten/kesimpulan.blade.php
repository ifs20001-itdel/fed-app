<style>
    .breadcrumb {
        font-size: 12px;
        background-color: none;
    }

    h1 {
        font-size: 25px;
        font-weight: 700;
    }
</style>

@extends('Layout.master')
@section('judul')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kualifikasi</li>
    </ol>
</nav>
<p>Laporan Kinerja - Semester 2021/2022 Ganjil</p>
@endsection

@section('content')
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <h2>kesimpulan</h2>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
@endsection