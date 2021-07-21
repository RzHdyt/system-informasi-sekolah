@extends('layouts.web.admin')

@section('title')
<title>Pemberitahuan</title>
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
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pemberitahuan</li>
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
                    <div class="card-header">
                        <h3 class="card-title">Pemberitahuan SMP Nurul Halim Widasari</h3>
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
                        <a href="{{ route('admin.pemberitahuan.create') }}" class="button btn btn-outline-dark">Tambah
                            (+)</a>
                        <table id="" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 1.5rem">No</th>
                                    <th>Photo</th>
                                    <th style="width: 11rem">Judul</th>
                                    <th style="width: 40rem">Isi Pemberitahuan</th>
                                    <th style="width: 6rem">Jenis Pemberitahuan</th>
                                    <th style="width: 13rem">Status</th>
                                </tr>
                            </thead>
                            @if ($pemberitahuans)
                            @foreach ($pemberitahuans as $pemberitahuan)
                            <tbody>
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td class="text-center">
                                        @if ($pemberitahuan->photoPemberitahuan['file_photo'] == true)
                                        <img src="{{ asset('images/pemberitahuan' . $pemberitahuan->photoPemberitahuan['file_photo'] ) }}"
                                            alt="" style=" width:50px; height:50px; border-radius:100%;">
                                        @else
                                        <img src="http://placehold.it/400x400" alt=""
                                            style=" width:50px; height:50px; border-radius:100%;">
                                        @endif
                                    </td>
                                    <td class="text-justify">
                                        <a href="{{ route('admin.pemberitahuan.edit', [$pemberitahuan->id]) }}">
                                            {{ $pemberitahuan->judul }}
                                        </a>
                                    </td>
                                    <td class="text-justify">
                                        <div class="isi more text-justify">
                                            @if (strlen($pemberitahuan->isi) > 100)

                                            {{ substr($pemberitahuan->isi,0,400) }}

                                            &nbsp;
                                            {{-- <span class="read-more-show hide_content text-bold">
                                                Read More
                                            </span> --}}

                                            <span class="read-more-content">
                                                {{substr($pemberitahuan->isi,300,strlen($pemberitahuan->isi))}}

                                                &nbsp;
                                                {{-- <span class="read-more-hide hide_content text-bold">
                                                    Read Less
                                                </span> --}}
                                            </span>
                                            @else
                                            {!! nl2br(e($pemberitahuan->isi)) !!}
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        {{ $pemberitahuan->jenis == 'prestasi' ? 'Prestasi' : 'Kegiatan' }}

                                    </td>

                                    <td class="text-center">

                                        @if ($pemberitahuan->status == 0)

                                        <form
                                            action="{{ route('admin.pemberitahuan.approveStatus', $pemberitahuan->id) }}"
                                            method="POST">
                                            @csrf
                                            {{ method_field("PUT") }}

                                            <input type="hidden" name="status" value="1">

                                            <button type="submit"
                                                class="btn btn-outline-light col-lg-6 mb-3 mr-auto ml-auto text-bold"
                                                style="color: black; background: steelblue">
                                                Approve</button>

                                        </form>

                                        @else

                                        <form
                                            action="{{ route('admin.pemberitahuan.approveStatus', $pemberitahuan->id) }}"
                                            method="POST">
                                            @csrf
                                            {{ method_field("PUT") }}

                                            <input type="hidden" name="status" value="0">

                                            <button type="submit"
                                                class="btn btn-outline-light col-lg-6 mb-3 mr-auto ml-auto text-bold"
                                                style="color: black; background: red">
                                                Un-Approve</button>

                                        </form>

                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            @endif
                        </table>
                    </div>

                    <nav aria-label="Page navigation example" class="pr-4 pl-4">
                        <div class="d-flex justify-content-between">
                            Total Pemberitahuan : {{ $pemberitahuans->count() }}
                            {{ $pemberitahuans->links() }}
                        </div>
                    </nav>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
