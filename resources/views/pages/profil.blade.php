@extends('home')

@section('konten')
@section('breadcrumb-title', 'Profil')
<section style="background-color: #eee;">
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://www.pngitem.com/pimgs/m/512-5125598_computer-icons-scalable-vector-graphics-user-profile-avatar.png" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px; margin: 20px auto;">
                        <h5 class="my-3"> {{ Auth::user()->nama }}</h5>
                        <p class="text-dark mb-1">{{ Auth::user()->nidn }}</p>
                        <p class="text-dark mb-4">{{ Auth::user()->jabatan_fungsional }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class=" mb-1 w-fit ml-auto">
                            @include('components.setting_biodata')
                        </div>
                        <div class="sm:rounded-lg p-3 bg-white border">
                            <table class="w-full rounded-lg">
                                <tr class="font-medium bg-gray-200">
                                    <th class="p-2">
                                        Nama
                                    </th>
                                    <td class="w-4/6">
                                        {{ Auth::user()->nama }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="p-2">
                                        NIP
                                    </th>
                                    <td class="w-4/6">
                                        {{ Auth::user()->nip }}
                                    </td>
                                </tr>
                                <tr class="border-b bg-gray-200">
                                    <th class="p-2">
                                        NIDN
                                    </th>
                                    <td class="w-4/6">
                                        {{ Auth::user()->nidn }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="p-2">
                                        Fakultas
                                    </th>
                                    <td class="w-4/6">
                                        @if (Auth::user()->prodi == 'S1 Informatika' || Auth::user()->prodi == 'S1 Sistem Informasi' || Auth::user()->prodi == 'S1 Teknik Elektro')
                                        Fakultas Informatika dan Teknik Elektro
                                        @elseif (Auth::user()->prodi == 'S1 Manajemen Rekayasa')
                                        Fakultas Teknik Industri
                                        @elseif (Auth::user()->prodi == 'S1 Teknik Bioproses')
                                        Fakultas Bioteknologi
                                        @elseif (Auth::user()->prodi == 'DIII Teknologi Kompoter' || Auth::user()->prodi == 'DII Teknologi Informasi' || Auth::user()->prodi == 'DIV Teknologi Rekayasa Perangkat Lunak')
                                        Fakultas Vokasi
                                        @endif
                                    </td>
                                </tr>
                                <tr class="border-b bg-gray-200">
                                    <th class="p-2">
                                        Program Studi
                                    </th>
                                    <td class="w-4/6">
                                        {{ Auth::user()->prodi }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="p-2">
                                        Status Dosen
                                    </th>
                                    <td class="w-4/6">
                                        -
                                    </td>
                                </tr>
                                <tr class="border-b bg-gray-200">
                                    <th class="p-2">
                                        Jabatan Fungsional
                                    </th>
                                    <td class="w-4/6">
                                        {{ Auth::user()->jabatan_fungsional }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="p-2">
                                        Jabatan
                                    </th>
                                    <td class="w-4/6">
                                        -
                                    </td>
                                </tr>
                                <tr class="border-b bg-gray-200">
                                    <th class="p-2">
                                        Status Serdos
                                    </th>
                                    <td class="w-4/6">
                                        -
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="p-2">
                                        Nomor Sertifikasi
                                    </th>
                                    <td class="w-4/6">
                                        -
                                    </td>
                                </tr>
                                <tr class="border-b bg-gray-200">
                                    <th class="p-2">
                                        Status Keaktifan
                                    </th>
                                    <td class="w-4/6">
                                        @if (Auth::user()->keaktifan == 'A')
                                        Aktif
                                        @else
                                        Keluar
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection