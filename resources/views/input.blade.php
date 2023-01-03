@extends('home')

@section('page-title', 'kesimpulan')
@section('breadcrumb-title', 'kesimpulan')

@section('konten')

<div class="container">
    <div class="row justify-content-center">
        <div class="card mt-5">
            <div class="card-body">
                {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <br />
                <!-- form validasi -->
                <form action="/proses" method="post">
                    {{ csrf_field() }}
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Jenis Kinerja</th>
                            <th>Status</th>
                        </tr>

                        <tr>
                            <th>1</th>
                            <td><label for="status1">Pelaksanaan Pendidikan</label></td>
                            <td><input type="text" class="form-control" name="status1" value="{{ old('status1') }}"></td>
                        </tr>

                        <tr>
                            <th>2</th>
                            <td><label for="status2">Pelaksanaan Penelitian</label></td>
                            <td><input type="text" class="form-control" name="status2" value="{{ old('status2') }}"></td>
                        </tr>

                        <tr>
                            <th>3</th>
                            <td><label for="status3">Pelaksanaan Pengabdian</label></td>
                            <td><input type="text" class="form-control" name="status3" value="{{ old('status3') }}"></td>
                        </tr>

                        <tr>
                            <th>4</th>
                            <td><label for="status4">Pelaksanaan Penunjang</label></td>
                            <td><input type="text" class="form-control" name="status4" value="{{ old('status4') }}"></td>
                        </tr>

                        <tr style="background-color: #FFFBC1;">
                            <th>5</th>
                            <td><label for="status5">Kriteria Pelaksanaan Pendidikan dan Pelaksanaan Penelitian</label></td>
                            <td><input type="text" class="form-control" name="status5" value="{{ old('status5') }}"></td>
                        </tr>

                        <tr style="background-color: #FFFBC1;">
                            <th>6</th>
                            <td><label for="status6">Kriteria Pelaksanaan Pengabdian dan Pelaksanaan Penunjang</label></td>
                            <td><input type="text" class="form-control" name="status6" value="{{ old('status6') }}"></td>
                        </tr>

                        <tr>
                            <th>TOTAL KINERJA</th>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="float: right;"><input class="btn btn-primary" type="submit" value="Proses" stat></td>
                        </tr>

                    </table>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection