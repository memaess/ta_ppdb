@extends('frontend.layouts.master')

@section('title')
    SMK AB | Dashboard Siswa
@endsection

@section('content-header')
   <div class="container">
       @if (session('success'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h1>Lanjutkan Upload Berkas</h1>
                <hr>
                <p><a href="">Klik Disini</a> {{ session('success') }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
       @endif
   </div>
@endsection

@section('content')
    
@endsection

@section('aside')
<h5>
    <i class="fas fa-fw fa-user-cog"></i>
    <span>Pengaturan Akun</span>
</h5>
<hr>
<p>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
        @csrf
    </form>
</p>
@endsection