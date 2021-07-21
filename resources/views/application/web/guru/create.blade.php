@extends('layouts.web.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.guru.index') }}">Data Guru & Staf</a></li>
                    <li class="breadcrumb-item active">Tambah Data Guru & Staf</li>
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
                        <h3 class="card-title">Tambah Data Guru & Staf SMP Nurul Halim</h3>
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


                        <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row justify-content-center ">
                                <div class="col-sm-12">

                                    {{-- <div class="form-group">
                                        <label for="photo_id">Photos</label>
                                        <input type="file" name="photo_id" id="photo_id" class="form-control"
                                            value="{{ old('photo_id') }}">

                                        @error('photo')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div> --}}

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
                                        <label for="nomer_induk">Nomer Induk Yayasan &nbsp;&nbsp;*Wajib diisi</label>
                                        <input type="text" class="form-control" name="nomer_induk" id="nomer_induk"
                                            placeholder="Enter Nomer Induk" value="{{ old('nomer_induk') }}">

                                        @error('nomer_induk')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="Masukan Nama" value="{{ old('nama') }}">

                                        @error('nama')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="mapel">Mata Pelajaran</label>
                                        <input type="text" class="form-control" name="mapel" id="mapel"
                                            placeholder="Masukan Mata Pelajaran" value="{{ old('mapel') }}">

                                        @error('mapel')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tahun_menjabat">Tahun Menjabat</label>
                                        <input type="text" class="form-control" name="tahun_menjabat" id="tahun_menjabat"
                                            placeholder="Masukan Tahun Menjabat" value="{{ old('tahun_menjabat') }}">

                                        @error('tahun_menjabat')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <select class="form-control" name="jabatan" id="jabatan">
                                            <option value="">Choose Options</option>
                                            <option value="ketua-Yayasan" @if(old('jabatan')=='ketua-Yayasan' ) selected="selected"
                                                @endif>
                                                Ketua Yayasan
                                            </option>
                                            <option value="Wa-Yayasan" @if(old('jabatan')=='Wa-Yayasan') selected="selected"
                                                @endif>
                                                Wakil Ketua Yayasan
                                            </option>
                                            <option value="Kepsek" @if(old('jabatan')=='Kepsek' ) selected="selected"
                                                @endif>
                                                Kepala Sekolah
                                            </option>
                                            <option value="Wa-Kepsek" @if(old('jabatan')=='Wa-Kepsek' ) selected="selected"
                                                @endif>
                                                Wakasek Kesiswaan
                                            </option>
                                            <option value="Wakep-Kurikulum" @if(old('jabatan')=='Wakep-Kurikulum') selected="selected"
                                                @endif>
                                                Wakasek Kurikulum
                                            </option>
                                            <option value="Guru" @if(old('jabatan')=='Guru' ) selected="selected"
                                                @endif>
                                                 Guru
                                                </option>
                                            <option value="Guru-BK" @if(old('jabatan')=='Guru-BK') selected="selected"
                                                @endif>
                                                Guru BK
                                            </option>
                                            <option value="Kep-TU" @if(old('jabatan')=='Kep-TU') selected="selected"
                                                @endif>
                                                Kepala Tata Usaha
                                            </option>
                                            <option value="Staf-TU" @if(old('jabatan')=='Staf-TU' ) selected="selected"
                                                @endif>
                                                Staf Tata Usaha
                                            </option>
                                            <option value="Staf-Perpus" @if(old('jabatan')=='Staf-Perpus') selected="selected"
                                                @endif>
                                                Staf Perpustakaan
                                            </option>
                                            <option value="Staf-lab" @if(old('jabatan')=='Staf-lab') selected="selected"
                                                @endif>
                                                Staf Lab. Komputer
                                            </option>
                                            <option value="Satpam" @if(old('jabatan')=='Satpam') selected="selected"
                                                @endif>
                                                Satpam Sekolah
                                            </option>
                                            <option value="Penjaga-Sekolah" @if(old('jabatan')=='Penjaga-Sekolah') selected="selected"
                                                @endif>
                                                Penjaga Sekolah
                                            </option>
                                        </select>

                                        @error('jabatan')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                            placeholder="Masukan Tempat Lahir" value="{{ old('tempat_lahir') }}">

                                        @error('tempat_lahir')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                            placeholder="Masukan Tanggal Lahir" value="{{ old('tanggal_lahir') }}">

                                        @error('tanggal_lahir')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select class="form-control" name="agama" id="agama">
                                            <option value="">Choose Options</option>
                                            <option value="Islam" @if(old('agama')=='Islam' ) selected="selected"
                                                @endif>
                                                Islam
                                            </option>
                                            <option value="Kristen" @if(old('agama')=='Kristen' ) selected="selected"
                                                @endif>
                                                Kristen
                                            </option>
                                            <option value="Budha" @if(old('agama')=='Budha' ) selected="selected"
                                                @endif>
                                                Budha
                                            </option>
                                            <option value="Hindu" @if(old('agama')=='Hindu' ) selected="selected"
                                                @endif>
                                                Hindu
                                            <option value="Konghcu" @if(old('agama')=='Konghcu' ) selected="selected"
                                                @endif>
                                                Konghcu
                                            </option>
                                        </select>

                                        @error('agama')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="">Choose Options</option>
                                            <option value="L" @if(old('gender')=='L' ) selected="selected" @endif>
                                                Laki-Laki
                                            </option>
                                            <option value="P" @if(old('gender')=='P' ) selected="selected" @endif>
                                                Perempuan
                                            </option>
                                        </select>

                                        @error('gender')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <a class="button btn btn-outline-light col-lg-6 mb-3 mr-auto ml-auto text-bold"
                                    style="color: black; background: gray;"
                                    href="{{ route('admin.guru.index') }}">Batal</a>

                                <button type="submit"
                                    class="btn btn-outline-light col-lg-6 mb-3 mr-auto ml-auto text-bold"
                                    style="color: black; background: blue">
                                    Buat Data</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
