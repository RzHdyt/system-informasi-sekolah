@extends('layouts.frontend.halaman-depan')

@section('title')
<title>Halaman Utama</title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-sm-12 col-lg-12">

        <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
            <div class="card-body col-sm-12 col-lg-12">
                <h2>Jajaran Petinggi Sekolah</h2>
                <hr>
                <div class="row">
                    @foreach ($gurus as $guru)
                    @if ($guru['jabatan'] !== 'guru')
                    <div class="col-sm-3 col-lg-3  mt-3 mb-3">
                        <div class="card col-auto col-sm-auto">
                            <img src="{{ asset('images/profile-guru' . $guru->photoGuru['file_photo'] ) }}"
                                class="card-img-top mt-2" alt="..."
                                style="height: 150px; max-width: 100%; object-fit: contain; ">
                            <div class="card-body col-auto col-sm-auto">
                                <hr>
                                <p class="text-bold text-center">
                                    <span class="text-bold text-lg-center">
                                        <b> {{ $guru->nama }} </b><br>
                                        @if ($guru->jabatan == 'Yayasan')
                                        Yayasan
                                        @elseif ($guru->jabatan == 'Kepsek')
                                        Kepala Sekolah
                                        @else
                                        Wakil Kepala Sekolah
                                        @endif
                                        {{ $guru->mapel }} <br>
                                        {{ $guru->agama }} <br>
                                        {{ $guru->umur }} Tahun
                                    </span>
                                </p>
                                <p class="text-bold text-center mt-lg-5 mb-0 ">{{ $guru->nomer_induk }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>

                <nav aria-label="Page navigation example" class="pr-4 pl-4">
                    <div class="d-flex justify-content-between">
                        Total : {{ $gurus->count() }}
                        {{ $gurus->links() }}
                    </div>
                </nav>
            </div>
        </div>

    </div>
</div>
@endsection