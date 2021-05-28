@extends('layouts.web.admin')

@section('title')
<title>Buat Pemberitahuan</title>
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.guru.index') }}">Data Guru</a></li>
                    <li class="breadcrumb-item active">Tambah Data Guru</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class=" card-header">
                        <h3 class="card-title">Tambah Pemberitahuan Sekolah Negeri Bayangan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div>
                            <!-- Message Status -->
                            @if(Session::has('success_message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success_message') }}
                            </div>
                            @endif

                            @if(Session::has('error_message'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error_message') }}
                            </div>
                            @endif
                            <!--End Message Status -->
                        </div>


                        <form action="{{ route('admin.pemberitahuan.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row justify-content-center ">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label for="photo_id">Photos</label>
                                        <input type="file" name="photo_id" id="photo_id" class="form-control"
                                            value="{{ old('photo_id') }}">

                                        @error('photo')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" name="judul" id="judul"
                                            placeholder="Enter judul" value="{{ old('judul') }}">

                                        @error('judul')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="isi">Isi Pengumuman</label>
                                        <textarea class="form-control" name="isi" id="isi" placeholder="Enter Text"
                                            value="{{ old('isi') }}" cols="30" rows="10"></textarea>

                                        @error('isi')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="author">Pembuat</label>
                                        <select class="form-control" name="author" id="author">
                                            <option value="">Choose Options</option>
                                            <option value="Kepsek" @if(old('author')=='Kepsek' ) selected="selected"
                                                @endif>
                                                Kepala Sekolah
                                            </option>
                                            <option value="Admin" @if(old('author')=='Admin' ) selected="selected"
                                                @endif>
                                                Admin
                                            </option>
                                        </select>

                                        @error('author')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <a class="button btn btn-outline-light col-lg-6 mb-3 mr-auto ml-auto text-bold"
                                    style="color: black; background: gray;"
                                    href="{{ route('admin.pemberitahuan.index') }}">Batal</a>

                                <button type="submit"
                                    class="btn btn-outline-light col-lg-6 mb-3 mr-auto ml-auto text-bold"
                                    style="color: black; background: blue">
                                    Buat Pemberitahuan</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
