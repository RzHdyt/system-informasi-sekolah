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
                            <div class="col-lg-23 p-5 text-center">
                                <div class="card-title-block">
                                    <h3 class="title"></h3>
                                    <div class="row">
                                    <div class="col-sm-2 col-lg-12 text-lg-center">
                                        <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
                                            <h1 class="mt-3 mb-0">SELAMAT DATANG DI WEBSITE SEKOLAH
                                                <P> SMP NURUL HALIM WIDASARI</h1>
                                            <hr>
                                            <h4 class="text-center">
                                                Website ini merupakan website untuk mengelola konte informasi
                                                yang nantinya akan ditampilkan pada halaman website sekolah
                                                <a href="{{ route('beranda') }}"> SMP Nurul Halim Widasari</a>. Disamping kiri terdapat menu Data Guru & Staf dan Pemberitahuan.
                                            </h4>
                                            <div class="row">
                                                <div class="col-sm-6 col-lg-6 text-lg-justify">
                                                    <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
                                                        <h4 class="mt-0 mb-0 text-bold">Data Guru & Staf</h4>
                                                        <hr>
                                                            <a class="text-justify"> Data Guru & Staf berfungsi untuk menambahkan data Guru Pengajar,
                                                                Staf dan Petugas-Petugas yang ada di SMP Nurul Halim Widasari. Pada halaman Data Guru & Staf terdapat
                                                                3 fitur diantaranya:
                                                                <br>
                                                                <div class="text-justify">
                                                                    <a class="text-bold" >1. Tambah Data</a> Berfungsi untuk menambahkan data-data sepeti data jajaran petinggi sekolah data guru pengajar, data staf dan petugas-petugas lainnya.
                                                                    <br>
                                                                    <a class="text-bold">2. Edite & Update Data</a> Berfungsi untuk meng edit dan memperbaharui data. caranya adalah
                                                                        Klik Nomor Induk Yayasan yg tertera pada tabel, lalu edit bagian mana yang ingin dirubah isinya. setelah itu klik Update Data, maka data telah berhasil diperbaharui.
                                                                    <br>
                                                                    <a class="text-bold">3. Hapus Data</a> Berfungsi untuk menghapus data yang ada pada tabel, dengan cara Klik Nomor Induk Yayasan yg tertera pada tabel, lalu akan tampil sebuah halaman lalu setelah itu klik tombol Hapus Data. maka data sudah terhapus dari tabel.
                                                                    <br>
                                                                </div>
                                                            </a>
                                                        </div>
                                                </div>

                                                <div class="col-sm-6 col-lg-6 text-lg-justify">
                                                    <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
                                                        <h4 class="mt-0 mb-0 text-bold">Pemberitahuan</h4>
                                                        <hr>
                                                            <a class="text-justify">Pemberitahuan berfungsi untuk menambahkan konten seputar kegiatan-kegiatan dan prestasi yang ada di SMP Nurul Halim Widasari. Pada halaman Pemberitahuan terdapat
                                                                4 fitur diantaranya:
                                                              <br>
                                                              <div class="text-justify">
                                                                    <a class="text-bold">1. Tambah (+)</a> Berfungsi untuk menambahkan konten pemberitahuan sepeti prestasi-prestasi sekolah, dan kegiatan-kegiatan sekolah lainnya.
                                                                    <br>
                                                                    <a class="text-bold">2. Edite & Update</a> Berfungsi untuk mengedit dan memperbaharui pemberitahuan. caranya adalah Klik Judul Pemberitahuan yg tertera pada tabel, lalu edit bagian mana yang ingin dirubah isinya. setelah itu klik Update Data, maka pemberitahuan telah berhasil diperbaharui.
                                                                    <br>
                                                                    <a class="text-bold">3. Hapus Data</a> Berfungsi untuk menghapus data yang ada pada tabel, dengan cara Klik Nomor Induk Yayasan yg tertera pada tabel, lalu akan tampil sebuah halaman lalu setelah itu klik tombol Hapus Data. maka data sudah terhapus dari tabel.
                                                                    <br>
                                                                    <a class="text-bold">4. Approve (+)</a> Berfungsi untuk menampilkan konten pada halaman website.
                                                              </div>
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <p class="text-justify" style='margin: 0; padding: 5%'>
                                    <br>

                                    <br>
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
