@extends('layouts.frontend.halaman-depan')

@section('title')
<title>Sambutan Kepala Sekolah</title>
@endsection

<style type="text/css">
    .read-more-show {
        cursor: pointer;
        color: #ed8323;
    }

    .read-more-hide {
        cursor: pointer;
        color: #ed8323;
    }

    .hide_content {
        display: none;
    }
</style>

@section('content')
<div class="row mb-3">
    <div class="col-sm-12 col-lg-12">
        {{-- content  --}}
        <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
            <div class="card-body col-sm-12 col-lg-12">
                <h2 class="text-center">Sambutan Kepala Sekolah </h2>
                <hr>

                @foreach ($pemberitahuans as $pemberitahuan)
                @if ($pemberitahuan->status == 1 && $pemberitahuan->author == 'Kepsek' )
                <div class="row">
                    <div class="col-sm-3 col-lg-3  mt-3 mb-3">
                        <div class="card col-auto col-sm-auto">
                            <img src="{{ asset('images/pemberitahuan/' .$pemberitahuan->photoPemberitahuan['file_photo'] ) }}"
                                class="card-img-top mt-2 mb-2" alt="..."
                                style="height: 150px; max-width: 100%; object-fit: contain; ">
                        </div>
                        <hr>
                    </div>

                    <div class="col-sm-9 col-lg-9  mt-3 mb-3 ">
                        <h1>{{ $pemberitahuan->judul }}</h1>
                        <hr>
                        <div class="isi more text-justify">
                            @if (strlen($pemberitahuan->isi) > 100)
                            {{ substr($pemberitahuan->isi,0,400) }}
                            &nbsp;
                            <span class="read-more-show hide_content"><a href="#" class='button btn btn-dark'> Read
                                    More </a></span>

                            <span class="read-more-content">
                                {{substr($pemberitahuan->isi,300,strlen($pemberitahuan->isi))}}
                                &nbsp;
                                <span class="read-more-hide hide_content"><a href="#" class='button btn btn-dark'>
                                        Read Less </a></span>
                            </span>
                            @else
                            {{ $pemberitahuan->isi }}
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                @endif
                @endforeach
                {{ $pemberitahuans->links() }}

            </div>
        </div>
        {{-- end content --}}
    </div>
</div>
@endsection