@extends('home')

@section('page-title', 'kesimpulan')
@section('breadcrumb-title', 'kesimpulan')

@section('konten')

<div class="container">
    <div class="row justify-content-center">
        <div class="card mt-5">
            <div class="card-body">
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
                            <td>
                                <div>
                                    {{-- <input type="text" name="status1" id="tambahStatus" class="form-control"> --}}
                                    <select name="status1" id="status1" class="form-select">
                                        <option value="">Status</option>
                                        <option value="Memenuhi">Memenuhi</option>
                                        <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>2</th>
                            <td><label for="status2">Pelaksanaan Penelitian</label></td>
                            <td>
                                <div>
                                    {{-- <input type="text" name="status2" id="tambahStatus" class="form-control"> --}}
                                    <select name="status2" id="status2" class="form-select">
                                        <option value="">Status</option>
                                        <option value="Memenuhi">Memenuhi</option>
                                        <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>3</th>
                            <td><label for="status3">Pelaksanaan Pengabdian</label></td>
                            <td>
                                <div>
                                    {{-- <input type="text" name="status3" id="tambahStatus" class="form-control"> --}}
                                    <select name="status3" id="status3" class="form-select">
                                        <option value="">Status</option>
                                        <option value="Memenuhi">Memenuhi</option>
                                        <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>4</th>
                            <td><label for="status4">Pelaksanaan Penunjang</label></td>
                            <td>
                                <div>
                                    {{-- <input type="text" name="status4" id="tambahStatus" class="form-control"> --}}
                                    <select name="status4" id="status4" class="form-select">
                                        <option value="">Status</option>
                                        <option value="Memenuhi">Memenuhi</option>
                                        <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr style="background-color: #FFFBC1;">
                            <th>5</th>
                            <td><label for="status5">Kriteria Pelaksanaan Pendidikan dan Pelaksanaan Penelitian</label></td>
                            <td>
                                <div>
                                    {{-- <input type="text" name="status5" id="tambahStatus" class="form-control"> --}}
                                    <select name="status5" id="status5" class="form-select">
                                        <option value="">Status</option>
                                        <option value="Memenuhi">Memenuhi</option>
                                        <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr style="background-color: #FFFBC1;">
                            <th>6</th>
                            <td><label for="status6">Kriteria Pelaksanaan Pengabdian dan Pelaksanaan Penunjang</label></td>
                            <td>
                                <div>
                                    {{-- <input type="text" name="status6" id="tambahStatus" class="form-control"> --}}
                                    <select name="status6" id="status6" class="form-select">
                                        <option value="">Status</option>
                                        <option value="Memenuhi">Memenuhi</option>
                                        <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <a href="/proses" target="_blank"><input class="btn btn-primary" type="submit" value="Proses" stat style="float: right;"></a>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection