<style>
    .breadcrumb{
        font-size: 12px;
        background-color: none;
    }
</style>

@extends('Layout.master')

@section('judul')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profil</li>
    </ol>
</nav>
@endsection

@section('content')
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://www.pngmart.com/files/21/Admin-Profile-PNG-Clipart.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Samuel Tobing</h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Tarutung, TA</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Jenjang Pendidikan</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Bidang Studi</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Perguruan Tinggi</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tahun Lulus</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
            </div>
            <hr>
          </div>
        </div>
        <div class="row">
        </div>
      </div>      
    </div>
  </div>
</section>
@endsection