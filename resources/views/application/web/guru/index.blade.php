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
                    <li class="breadcrumb-item active">Data Guru & Staf</li>
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
                        <h3 class="card-title">Data Guru & Staf SMP Nurul Halim Widasari</h3>
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
                        <a href="{{ route('admin.guru.create') }}" class="button btn btn-outline-dark">Tambah Data (+)</a>
                        <table id="" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Photo</th>
                                    <th>Nomer Induk Yayasan</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tangal Lahir</th>
                                    <th>Agama</th>
                                    <th>Jabatan & Mata Pelajaran</th>
                                    <th>Tahun Menjabat</th>
                                    <th>Jenis Kelamin</th>
                                </tr>
                            </thead>
                            @if ($gurus)
                            @foreach ($gurus as $guru)
                            <tbody>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        @if ($guru->photoGuru['file_photo'] == true)
                                        <img src="{{ asset('images/profile-guru' . $guru->photoGuru['file_photo'] ) }}"
                                            alt="" style=" width:50px; height:50px; border-radius:100%;">
                                        @else
                                        <img src="http://placehold.it/400x400" alt=""
                                            style=" width:50px; height:50px; border-radius:100%;">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.guru.edit', [$guru->id]) }}"> {{ $guru->nomer_induk }}
                                        </a>
                                    </td>
                                    <td>{{ $guru->nama }}</td>
                                    <td>{{ $guru->tempat_lahir }}</td>
                                    <td>{{ $guru->tanggal_lahir }}</td>
                                    <td>{{ $guru->agama }}</td>
                                    <td>{{ $guru->jabatan }} {{ $guru->mapel }}</td>
                                    <td>{{ $guru->tahun_menjabat}}
                                    <td>{{ $guru->gender == 'L' ? 'Laki - Laki' : 'Perumpuan' }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                            @endif
                        </table>
                    </div>
                    <nav aria-label="Page navigation example" class="pr-4 pl-4">
                        <div class="d-flex justify-content-between">
                            Total Data : {{ $gurus->count() }}
                            {{ $gurus->links() }}
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
