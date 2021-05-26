@extends('layouts.frontend.halaman-depan')

@section('title')
<title>Sambutan Kepala Sekolah</title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-sm-12 col-lg-12">
        {{-- content  --}}
        <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
            <div class="card-body col-sm-12 col-lg-12">
                <div class="row">
                    <div class="col-sm-3 col-lg-3  mt-3 mb-3">

                        <div class="card col-auto col-sm-auto">
                            <img src="{{ asset('images/profile-guru/1622026115buzz-andersen-IOKqP2VnHoc-unsplash.jpg' ) }}"
                                class="card-img-top mt-2 mb-2" alt="..."
                                style="height: 150px; max-width: 100%; object-fit: contain; ">
                        </div>

                        <h3 class="mt-3 text-center">{{ 'NAME' }}</h3>
                        <p class="text-center">
                            this body
                        </p>
                        <hr>
                    </div>

                    <div class="col-sm-9 col-lg-9  mt-3 mb-3 ">
                        <h1>{{ 'TEXT TITLE' }}</h1>
                        <hr>
                        <p>
                            this body
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsam maiores delectus saepe
                            facilis consequatur at cumque quod veniam quisquam neque blanditiis magni aspernatur
                            possimus
                            perspiciatis, consectetur suscipit, doloremque provident!</p>

                    </div>
                </div>
            </div>
        </div>
        {{-- end content --}}
    </div>
</div>
@endsection