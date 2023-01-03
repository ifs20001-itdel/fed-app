<?php

namespace App\Http\Controllers;

use App\Models\TablePendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRUDTableController extends Controller
{
    function tambahData(Request $request, $jenisTabel)
    {
        $namatabel = "";
        $url = "";
        if ($jenisTabel == "pendidikan") {
            $namatabel = "table_pendidikan";
            $url = "evaluasi-kerja/pendidikan";
        } else if ($jenisTabel == "penelitian") {
            $namatabel = "table_penelitian";
            $url = "evaluasi-kerja/penelitian";
        } else if ($jenisTabel == "pengabdian") {
            $namatabel = "table_pengabdian";
            $url = "evaluasi-kerja/pengabdian";
        } else if ($jenisTabel == "penunjang") {
            $namatabel = "table_penunjang";
            $url = "evaluasi-kerja/penunjang";
        } else {
            $namatabel = "table_kesimpulan";
            $url = "evaluasi-kerja/kesimpulan";
        }

        DB::table($namatabel)->insert([
            'bagian_table' => $request->pelaksanaan,
            'nama_kegiatan' => $request->namaKegiatan,
            'bukti_penugasan' => $request->file('buktiPenugasan')->move('filebukti/', $request->file('buktiPenugasan')->getClientOriginalName()),
            'status' => $request->status,
            'jumlah_kegiatan' => $request->jumlahKegiatan,
            'beban_tugas' => $request->bebanTugas,
            'capaian' => $request->capaian
        ]);


        //fungsi upload file
        //    $namatabel = TablePendidikan ::class($request->all());
        //     if($request->has('bukti_penugasan')){
        //         $namatabel->bukti_penugasan = $request->bukti_penugasan('bukti_penugasan')->getClientOriginalName();
        //         $namatabel->save();
        //     }

        //endfungsi

        return redirect($url);
    }



    function tampilData($jenisPelaksanaan)
    {
        $namatabel = $this->getNamaTabel($jenisPelaksanaan);

        $dataTabel = DB::table($namatabel)->select('id', 'bagian_table', 'nama_kegiatan', 'bukti_penugasan', 'status', 'jumlah_kegiatan', 'beban_tugas', 'capaian')->get();
        if ($jenisPelaksanaan == "pendidikan") {

            $tabelDataPendidikan = DB::table($namatabel)->select('id', 'bagian_table', 'nama_kegiatan', 'bukti_penugasan', 'status', 'jumlah_kegiatan', 'beban_tugas', 'capaian')->get();

            return view('pages.pel_pendidikan')->with('datapendidikan', $tabelDataPendidikan);
        } else if ($jenisPelaksanaan == "penelitian") {

            return view('pages.pel_penelitian')->with('datapenelitian', $dataTabel);
        } else if ($jenisPelaksanaan == "pengabdian") {

            return view('pages.pel_pengabdian')->with('datapengabdian', $dataTabel);
        } else if ($jenisPelaksanaan == "penunjang") {

            return view('pages.pel_penunjang')->with('datapenunjang', $dataTabel);
        } else if ($jenisPelaksanaan == "kesimpulan") {

            return view('pages.kesimpulan')->with('datakesimpulan', $dataTabel);
        } else {
            return view('errors.404');
        }
    }
    function getNamaTabel($jenisPelaksanaan)
    {
        if ($jenisPelaksanaan == "pendidikan") {
            return "table_pendidikan";
        } else if ($jenisPelaksanaan == "penelitian") {
            return "table_penelitian";
        } else if ($jenisPelaksanaan == "pengabdian") {
            return "table_pengabdian";
        } else if ($jenisPelaksanaan == "penunjang") {
            return "table_penunjang";
        } else if ($jenisPelaksanaan == "kesimpulan") {
            return "table_kesimpulan";
        }
    }

    public function edit($jenisPelaksanaan)
    {

        $namatabel = $this->getNamaTabel($jenisPelaksanaan);

        $dataTabel = DB::table($namatabel)->select('bagian_table', 'nama_kegiatan', 'bukti_penugasan', 'status', 'jumlah_kegiatan', 'beban_tugas', 'capaian')->get();
        if ($jenisPelaksanaan == "pendidikan") {

            $tabelDataPendidikan = DB::table($namatabel)->select('bagian_table', 'nama_kegiatan', 'bukti_penugasan', 'status', 'jumlah_kegiatan', 'beban_tugas', 'capaian')->get();

            return view('pages.pel_pendidikan')->with('datapendidikan', $tabelDataPendidikan);
        } else if ($jenisPelaksanaan == "penelitian") {

            return view('pages.pel_penelitian')->with('datapenelitian', $dataTabel);
        } else if ($jenisPelaksanaan == "pengabdian") {

            return view('pages.pel_pengabdian')->with('datapengabdian', $dataTabel);
        } else if ($jenisPelaksanaan == "penunjang") {

            return view('pages.pel_penunjang')->with('datapenunjang', $dataTabel);
        } else if ($jenisPelaksanaan == "kesimpulan") {

            return view('pages.kesimpulan')->with('datakesimpulan', $dataTabel);
        } else {
            return view('errors.404');
        }
    }

    // Fungsi edit & hapus pendidikan

    public function editdata($id)
    {

        $namatabel = $this->getNamaTabel("pendidikan");

        $dataTabel = DB::table($namatabel)->where('id', $id)->get();
        return view('components.edit')->with('datapendidikan', $dataTabel);
    }

    public function update(Request $request)
    {
        DB::table('table_pendidikan')->where('id', $request->id)->update([
            'nama_kegiatan' => $request->namaKegiatan,
            'bukti_penugasan' => $request->buktiPenugasan,
            'status' => $request->status,
            'jumlah_kegiatan' => $request->jumlahKegiatan,
            'beban_tugas' => $request->bebanTugas,
            'capaian' => $request->capaian
        ]);

        return redirect('evaluasi-kerja/pendidikan');
    }
    public function destroy($id)
    {

        $namatabel = $this->getNamaTabel("pendidikan");

        DB::table($namatabel)->where('id', $id)->delete();
        return redirect('evaluasi-kerja/pendidikan');
    }

    // Fungsi edit & hapus penelitian

    public function editdata2($id)
    {

        $namatabel = $this->getNamaTabel("penelitian");

        $dataTabel = DB::table($namatabel)->where('id', $id)->get();
        return view('components.edit2')->with('datapenelitian', $dataTabel);
    }

    public function update2(Request $request)
    {
        DB::table('table_penelitian')->where('id', $request->id)->update([
            'nama_kegiatan' => $request->namaKegiatan,
            'bukti_penugasan' => $request->buktiPenugasan,
            'status' => $request->status,
            'jumlah_kegiatan' => $request->jumlahKegiatan,
            'beban_tugas' => $request->bebanTugas,
            'capaian' => $request->capaian
        ]);

        return redirect('evaluasi-kerja/penelitian');
    }
    public function destroy2($id)
    {

        $namatabel = $this->getNamaTabel("penelitian");

        DB::table($namatabel)->where('id', $id)->delete();
        return redirect('evaluasi-kerja/penelitian');
    }
    // Fungsi edit & hapus pengabdian

    public function editdata3($id)
    {

        $namatabel = $this->getNamaTabel("pengabdian");

        $dataTabel = DB::table($namatabel)->where('id', $id)->get();
        return view('components.edit3')->with('datapengabdian', $dataTabel);
    }

    public function update3(Request $request)
    {
        DB::table('table_pengabdian')->where('id', $request->id)->update([
            'nama_kegiatan' => $request->namaKegiatan,
            'bukti_penugasan' => $request->buktiPenugasan,
            'status' => $request->status,
            'jumlah_kegiatan' => $request->jumlahKegiatan,
            'beban_tugas' => $request->bebanTugas,
            'capaian' => $request->capaian
        ]);

        return redirect('evaluasi-kerja/pengabdian');
    }
    public function destroy3($id)
    {

        $namatabel = $this->getNamaTabel("pengabdian");

        DB::table($namatabel)->where('id', $id)->delete();
        return redirect('evaluasi-kerja/pengabdian');
    }

    // Fungsi edit & hapus penunjang

    public function editdata4($id)
    {

        $namatabel = $this->getNamaTabel("penunjang");

        $dataTabel = DB::table($namatabel)->where('id', $id)->get();
        return view('components.edit4')->with('datapenunjang', $dataTabel);
    }

    public function update4(Request $request)
    {
        DB::table('table_penunjang')->where('id', $request->id)->update([
            'nama_kegiatan' => $request->namaKegiatan,
            'bukti_penugasan' => $request->buktiPenugasan,
            'status' => $request->status,
            'jumlah_kegiatan' => $request->jumlahKegiatan,
            'beban_tugas' => $request->bebanTugas,
            'capaian' => $request->capaian
        ]);

        return redirect('evaluasi-kerja/penunjang');
    }
    public function destroy4($id)
    {

        $namatabel = $this->getNamaTabel("penunjang");

        DB::table($namatabel)->where('id', $id)->delete();
        return redirect('evaluasi-kerja/penunjang');
    }

    // Fungsi edit & hapus kesimpulan

    public function editdata5($id)
    {

        $namatabel = $this->getNamaTabel("kesimpulan");

        $dataTabel = DB::table($namatabel)->where('id', $id)->get();
        return view('components.edit5')->with('datakesimpulan', $dataTabel);
    }

    public function update5(Request $request)
    {
        DB::table('table_kesimpulan')->where('id', $request->id)->update([
            'nama_kegiatan' => $request->namaKegiatan,
            'bukti_penugasan' => $request->buktiPenugasan,
            'status' => $request->status,
            'jumlah_kegiatan' => $request->jumlahKegiatan,
            'beban_tugas' => $request->bebanTugas,
            'capaian' => $request->capaian
        ]);

        return redirect('evaluasi-kerja/kesimpulan');
    }
    public function destroy5($id)
    {

        $namatabel = $this->getNamaTabel("kesimpulan");

        DB::table($namatabel)->where('id', $id)->delete();
        return redirect('evaluasi-kerja/kesimpulan');
    }
}
