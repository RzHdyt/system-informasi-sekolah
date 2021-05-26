@extends('layouts.frontend.halaman-depan')

@section('title')
<title>Profile Sekolah</title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-sm-12 col-lg-12">
        {{-- content  --}}
        <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
            <div class="card-body col-sm-12 col-lg-12">
                <div class="row">
                    <div class="col-sm-4 col-lg-4  mt-3 mb-3">

                        <div class="card col-auto col-sm-auto">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/profile-guru/1621790754mortarboard.png') }}"
                                            class="d-block w-100" alt="..." style="height: 15rem">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/profile-guru/1621789774dummy-image.jpg') }}"
                                            class="d-block w-100" alt="..." style="height: 15rem">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/profile-guru/1622026115buzz-andersen-IOKqP2VnHoc-unsplash.jpg') }}"
                                            class="d-block w-100" alt="..." style="height: 15rem">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/profile-guru/1621789774dummy-image.jpg') }}"
                                            class="d-block w-100" alt="..." style="height: 15rem">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                        <h3 class="mt-3 text-center">Sekolah Negeri Bayangan</h3>
                        <p class="text-center">
                            since : 1901
                        </p>
                        <hr>
                    </div>

                    <div class="col-sm-8 col-lg-8  mt-3 mb-3 ">
                        <h1>{{ 'TEXT TITLE' }}</h1>
                        <hr>
                        <p>
                            this body
                        </p>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsam
                            maiores delectus saepe
                            facilis consequatur at cumque quod veniam quisquam neque blanditiis magni aspernatur
                            possimus
                            perspiciatis, consectetur suscipit, doloremque provident!</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsam
                            maiores delectus saepe
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