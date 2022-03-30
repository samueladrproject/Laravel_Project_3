<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UbahPasswordController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Ubah Password',
            'navLink' => 'ubah-password'
        ];

        return view('Backend.pages.ubahpassword', $datas);
    }

    public function edit(Request $request)
    {
        $idUser = Auth()->user()->id;

        $validateReq = $request->validate([
            'password' => 'required|confirmed'
        ]);

        $user = User::find($idUser);
        $user->password = Hash::make($validateReq['password']);
        $user->save();

        return back()->with('success', 'Berhasil mengganti password');
    }
}
