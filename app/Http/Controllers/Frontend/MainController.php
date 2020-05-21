<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Siswa;

class MainController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        try {
            $siswa = Siswa::where('id', '=', $user->id)->firstOrFail();
            session()->flash('success', 'Untuk Melanjutkan Pendaftaran Dengan Upload Berkas !');

        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi Kesalahan ! Silahkan Ulangi Kembali Beberapa Saat !');
        }

        $check = Auth::check();
        if ($check) {
            $user = Auth::user();
            if ($user->roles->first()->name != 'Siswa') {
                Auth::logout();
                return redirect('/login');
            } else {
                $user = Auth::user();
                return view('frontend.users.main', compact('user'));
            }
        } else {
            Auth::logout();
            return redirect('/login');
        }
    }
}
