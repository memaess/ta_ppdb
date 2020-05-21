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
        $check = Auth::check();
        if ($check) {
            $user = Auth::user();
            if ($user->roles->first()->name != 'Siswa') {
                Auth::logout();
                return redirect('/login');
            } else {
                $user = Auth::user();
                try {
                    $siswa = Siswa::where('user_id', '=', $user->id)->firstOrFail();
                    session()->flash('success', 'Lanjut Upload Berkas Untuk Memenuhi Persyaratan Pedaftaran');
                } catch (\Exception $e) {
                    session()->flash('danger', 'Anda Sudah Upload Berkas Silahkan Tunggu Notifikasi Di E-Mail Anda');
                }
                return view('frontend.users.main', compact('user'));
            }
        } else {
            Auth::logout();
            return redirect('/login');
        }
    }
    
}
