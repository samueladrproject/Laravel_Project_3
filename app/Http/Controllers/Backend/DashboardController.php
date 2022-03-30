<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BasisPengetahuan;
use App\Models\Gejala;
use App\Models\Hasil;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Dashboard',
            'navLink' => 'dashboard',
            'dataPenyakit' => Penyakit::count(),
            'dataGejala' => Gejala::count(),
            'dataBasisPengetahuan' => BasisPengetahuan::count(),
            'dataRiwayat' => Hasil::count()
        ];

        return view('Backend.pages.dashboard', $datas);
    }
}
