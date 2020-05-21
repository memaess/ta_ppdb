@extends('frontend.layouts.master')

@section('title')
    SMK AB | Upload Berkas Siswa
@endsection

@section('content-header')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                *<input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN Sekolah Asal">
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                *<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Sesuai Ijazah">
                            </div>

                            <div class="form-group">
                                <label for="nama">Provinsi</label>
                                *<select name="province" id="province" class="form-control">
                                    <option value="">== Pilih Provinsi ==</option>
                                        @foreach ($provinces as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama">Kota / Kabupaten</label>
                                *<select name="city" id="city" class="form-control">
                                    <option value="">== Select City ==</option>
                                </select>
                            </div>

                            {{-- <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
        <!-- /.card -->
    </div>
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