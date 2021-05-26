@extends('layouts.frontend.halaman-depan')

@section('title')
<title>Visi Misi</title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-sm-12 col-lg-12">
        <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
            <div class="card-body col-sm-12 col-lg-12">

                <div class="row">
                    <div class="col-sm-6 col-lg-6 text-lg-center">
                        <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
                            <h1 class="mt-3 mb-0">Visi</h1>
                            <hr>
                            <div class="card-body col-sm-12 col-lg-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores fugit ea
                                    enim
                                    culpa nisi minima? Obcaecati inventore dolore aliquid dolores mollitia
                                    repudiandae
                                    totam explicabo. Expedita dolor non suscipit? Quam!</p>
                                {{-- if using list --}}
                                <ul class="text-lg-left">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-6 text-lg-center">
                        <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
                            <h1 class="mt-3 mb-0">Misi</h1>
                            <hr>
                            <div class="card-body col-sm-12 col-lg-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab officia velit facilis
                                    optio tenetur officiis nisi beatae impedit placeat totam? Magnam, consequuntur
                                    vero?
                                    Architecto veritatis dolores vitae assumenda nemo illum.</p>
                                {{-- if using list --}}
                                <ul class="text-lg-left">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection