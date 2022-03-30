<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use Illuminate\Http\Request;

class DataRiwayatController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Data Riwayat',
            'navLink' => 'data-riwayat',
            'dataDiagnosa' => Hasil::all()
        ];

        return view('Backend.pages.data-riwayat.index', $datas);
    }

    public function showdata($id_diagnosa)
    {
        $dataDiagnosa = Hasil::find($id_diagnosa)->toArray();

        $dataTampilan = [
            'titlePage' => 'Hasil Diagnosa',
            'navLink' => 'data-riwayat',
            'dataDiagnosa' => $dataDiagnosa,
            'hasilDiagnosa' => json_decode($dataDiagnosa['hasil_diagnosa'])
        ];

        return view('Backend.pages.data-riwayat.hasil', $dataTampilan);
    }

    public function destroy($id_diagnosa)
    {
        $dataDiagnosa = Hasil::find($id_diagnosa);
        $dataDiagnosa->delete();

        return redirect()->to('data-riwayat')->with('success', 'Data Riwayat Berhasil Dihapus');
    }
}
