@extends('Frontend.layouts.main')

@section('content-wrapper')
    <div class="row my-5 text-center">
        <div class="col my-lg-5">
            <div class="my-lg-5">
                <h4 class="text-custom fw-bold text-center text-justify">
                    Sistem Pakar Untuk Mendiagnosa Gangguan Saluran Pencernaan Pada Hewan Musang Menggunakan Metode Dempster
                    Shafer
                </h4>
                <p class="text-custom text-center">
                    Sistem pakar ini digunakan untuk mendiagnosa gangguan saluran pencernaan pada hewan musang yang
                    disebabkan oleh virus. Sistem pakar ini dilengkapi dengan metode Dempster Shafer dalam proses
                    mendiagnosa. Sehingga sistem ini mampu dengan cepat memberikan informasi kepada para pemilik hewan
                    musang tentang gangguan saluran pencernaan yang dialami musang akibat terinfeksi Virus.
                </p>
                <a href="{{ URL::to('diagnosa') }}" class="btn btn-custom">
                    <i class="fas fa-play-circle me-1"></i>
                    Mulai Konsultasi
                </a>
            </div>
        </div>
    </div>
@endsection
