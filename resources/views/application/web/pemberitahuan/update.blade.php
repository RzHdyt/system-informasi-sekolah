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
                    <li class="breadcrumb-item"><a href="{{ route('admin.pemberitahuan.index') }}">Pemberitahuan</a></li>
                    <li class="breadcrumb-item active">Edit Pemberitahuan</li>
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
                        <h3 class="card-title">Update Pemberitahuan SMP Nurul Halim Widasari</h3>
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


                        <form action="{{ route('admin.pemberitahuan.update', $pemberitahuans->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            {{ method_field("PUT") }}

                            <div class="row justify-content-center ">

                                {{-- for img --}}
                                <div class="col-sm-4 text-lg-center">
                                    @if ($pemberitahuans->photo_id == $pemberitahuans->photoPemberitahuan['id'] )

                                    <img src="{{ asset('images/pemberitahuan' . $pemberitahuans->photoPemberitahuan['file_photo'] ) }}"
                                        alt="" style=" width:300px; height:300px; border-radius:100%;">

                                    @else

                                    <img src="http://placehold.it/400x400" alt=""
                                        style=" width:50px; height:50px; border-radius:100%;">

                                    @endif
                                </div>


                                {{-- Form --}}

                                <div class="col-sm-8">

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
                                            placeholder="Enter judul" value="{{ $pemberitahuans->judul }}">

                                        @error('judul')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="isi">Isi Pemberitahuan&nbsp;&nbsp;*Wajib diisi</label>
                                        <textarea class="form-control" name="isi" id="isi" placeholder="Enter Text"
                                            cols="30" rows="10"> </textarea>

                                        @error('isi')
                                        <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis">Jenis Pemberitahuan</label>
                                        <select class="form-control" name="jenis" id="jenis">
                                            <option value="">Choose Options</option>
                                            <option value="prestasi" @if($pemberitahuans->jenis == 'prestasi' )
                                                selected="selected"
                                                @endif>
                                                Prestasi
                                            </option>
                                            <option value="kegiatan" @if($pemberitahuans->jenis == 'kegiatan' )
                                                selected="selected"
                                                @endif>
                                                Kegiatan
                                            </option>
                                        </select>

                                        @error('jenis')
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
                                    Update Pemberitahuan</button>
                            </div>
                        </form>

                        <form action="{{ route('admin.pemberitahuan.destroy', $pemberitahuans->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger col-12 mb-3 mr-auto ml-auto">
                                Hapus Pemberitahuan?</button>
                        </form>
                    </div>
                    <!-- End Card Header  -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
