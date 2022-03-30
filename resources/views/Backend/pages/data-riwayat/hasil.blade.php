@extends('Backend.layouts.main')

@section('content-wrapper')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-custom-2-800">
                <i class="fas fa-history"></i>
                {{ $titlePage }}
            </h1>
        </div>

        <div class="card kartu-custom mb-3">
            <div class="card-header text-custom fw-bold">
                Hasil Konsultasi
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <h6 class="text-custom">*) Detail Pengunjung</h6>
                    <table class="table table-bordered custom-table" style="width: 100%">
                        <colgroup>
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 85%;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <td>Nama Pengunjung</td>
                                <td>{{ $dataDiagnosa['nama'] }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $dataDiagnosa['alamat'] }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Musang</td>
                                <td>{{ $dataDiagnosa['jenis_musang'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="container-fluid">
                    <h6 class="text-custom">*) Gejala yang dialami</h6>
                    <table class="table table-bordered custom-table" style="width: 100%">
                        <colgroup>
                            <col span="1" style="width: 3%;">
                            <col span="1" style="width: 12%;">
                            <col span="1" style="width: 85%;">
                        </colgroup>
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Kode Gejala.</th>
                                <th>Nama Gejala.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($hasilDiagnosa->Gejala_Penyakit as $gejalaYangDipilih)
                                <tr>
                                    <td class="text-center">{{ $i }}</td>
                                    <td class="text-center">{{ $gejalaYangDipilih->kode_gejala }}</td>
                                    <td>{{ $gejalaYangDipilih->nama_gejala }}</td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="container-fluid">
                    <h6 class="text-custom">*) Detail Penyakit</h6>
                    <table class="table table-bordered custom-table" style="width: 100%">
                        <colgroup>
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 5%;">
                            <col span="1" style="width: 80%;">
                        </colgroup>
                        <tr>
                            <td>Nama Penyakit</td>
                            <td class="text-center">:</td>
                            <td class="fw-bold">
                                {{ $hasilDiagnosa->Nama_Penyakit->nama_penyakit }}
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Kepercayaan</td>
                            <td class="text-center">:</td>
                            <td>{!! '<b>' . $hasilDiagnosa->Persentase_Penyakit . '</b>' . ' / (' . $hasilDiagnosa->Nilai_Belief_Penyakit . ')' !!}</td>
                        </tr>
                    </table>
                </div>

                <div class="container-fluid">
                    <h6 class="text-custom">*) Solusi Penyakit</h6>
                    <table class="table table-bordered custom-table" style="width: 100%">
                        <tbody>
                            @foreach (json_decode($hasilDiagnosa->Solusi_Penyakit->solusi) as $solusi)
                                <tr>
                                    <td>{{ $solusi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
        <a href="{{ URL::to('data-riwayat') }}" class="btn btn-custom mb-3">
            <i class="fas fa-arrow-alt-circle-left me-1"></i>
            Kembali ke Data Riwayat
        </a>
    </div>
@endsection
