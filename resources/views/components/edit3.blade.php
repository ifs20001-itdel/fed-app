<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .konten {
        width: 500px;
        margin: 20px auto;
    }
</style>
<div class="container konten">
    <div id="tambahData" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="shadow-lg hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative w-full max-w-2xl rounded-lg h-full md:h-auto bg-white">

            {{-- Modal Content --}}
            <div class="relative p-4 bg-whitety rounded-lg shadow sm:p-5">
                {{-- Modal Header --}}
                <div class="header flex justify-between border-b mb-3">
                    <h3>Update Data</h3>
                </div>
                {{-- Modal Body --}}
                <form action="/evaluasi-kerja/edit-data3" method="POST">
                    @csrf
                    <div>

                        @foreach ($datapengabdian as $dt)
                        <input type="hidden" name="id" value="{{$dt->id}}">
                        <br>
                        <div class="mb-2">
                            <label for="namaKegiatan">Nama Kegiatan</label>
                            <input value="{{$dt->nama_kegiatan}}" type="text" name="namaKegiatan" id="tambahKegiatan" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label for="namaKegiatan">Bukti Penugasan</label>
                            <input value="{{$dt->bukti_penugasan}}" type="text" name="buktiPenugasan" id="tambahBukti" class="form-control">

                        </div>

                        <div class="flex justify-between gap-3">
                            <div>
                                <label for="status">Status</label><br>
                                {{-- <input value="{{$dt->status}}" type="text" name="status" id="tambahStatus" class="form-control"> --}}
                                <select name="status" id="status" class="form-select">
                                    <option value="Berlanjut">Berlanjut</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                            </div>

                            <div>
                                <label for="jlhKegiatan">Capaian SKS</label>
                                <input value="{{$dt->jumlah_kegiatan}}" type="text" name="jumlahKegiatan" id="tambahJlhKegiatan" class="form-control">
                            </div>
                            <div>
                                <label for="bebanTugas">Beban Tugas</label>
                                <input value="{{$dt->beban_tugas}}" type="text" name="bebanTugas" id="tambahBebanTugas" class="form-control">
                            </div>
                            <div>
                                <label for="jlhKegiatan">Capaian(%)</label>
                                <input value="{{$dt->capaian}}" type="text" name="capaian" id="tambahCapaian" class="form-control">
                            </div>

                        </div>
                    </div>

                    <div class="flex justify-end gap-2 mt-4">
                        <button type="submit" class="px-4 py-2 btn btn-primary">Simpan</button>
                        <button type="submit" data-modal-toggle="tambahData" class="px-4 py-2 btn btn-outline-danger">Batal</button>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#pel").select2({
            dropdownCssClass: 'bigdrop'
        });
        // $("#status").select2({dropdownCssClass : 'bidrop'});
    });
</script>