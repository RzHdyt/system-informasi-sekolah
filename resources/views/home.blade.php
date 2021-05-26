@extends('layouts.web.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
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
                <!-- Default box -->
                <div class="card" style="height: 49rem">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 p-5 text-center">
                                <div class="card-title-block">
                                    <h3 class="title">Sistem Keputusan Karyawan Terbaik ~ Metode TOPSIS</h3>
                                </div>
                                <br>
                                <p class="text-justify" style='margin: 0; padding: 5%'>Lorem ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit. Iure sit velit veritatis officia ipsam perspiciatis illo optio praesentium vel
                                    cupiditate laboriosam, aspernatur a, sint quis provident eaque facilis possimus
                                    quos?
                                    <br>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus ullam, eaque
                                    dignissimos pariatur consectetur blanditiis dolor temporibus vitae illum ex
                                    voluptatem
                                    ab quidem aperiam impedit incidunt placeat dolorum expedita facere!
                                    <br>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, illum?
                                    Quibusdam numquam harum ullam magnam, omnis nesciunt molestiae. Qui ut ullam
                                    excepturi natus debitis praesentium amet provident error hic fugit?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

@endsection