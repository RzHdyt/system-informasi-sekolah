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
                                        <img src="{{ asset('images/profile-sekolah/img-1.PNG') }}"
                                            class="d-block w-100" alt="..." style="height: 22rem">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/profile-sekolah/profile-sekolah2.jpg') }}"
                                            class="d-block w-100" alt="..." style="height: 22rem">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/profile-sekolah/profile-sekolah3.jpg') }}"
                                            class="d-block w-100" alt="..." style="height: 22rem">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/profile-sekolah/profile-sekolah4.png') }}"
                                            class="d-block w-100" alt="..." style="height: 22rem">
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

                        <h3 class="mt-3 text-center">SMP Nurul Halim Widasari</h3>
                        <p class="text-center">
                            Since : 1993
                        </p>
                        <hr>
                    </div>

                    <div class="col-sm-8 col-lg-8  mt-3 mb-3 ">
                        <h1>{{ 'Profile SMP Nurul Halim Widasari' }}</h1>
                        <hr>
                        <h4 class="mt-2 text-center"> IDENTITAS SEKOLAH </h4>
                        </p>
                        <p>
                            <h6 class="text-justify">
                                Nama Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: SMP NURUL HALIM WIDASARI</p>
                            <p> Nama Kelpala Sekolah&nbsp;&nbsp;: HUMAEDI, S.Ag </p>
                            <p> NPSN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 20216093 </p>
                            <p> Jenjang Pendidikan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: SMP</p>
                            <p> Status Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Swasta</p>
                            <p> Alamat Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Jl. Raya Ujung Jaya No. 212 Rt/Rw 04/03 Kelurahan. Ujungjaya,  </p>
                            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kec. Widasari, Kab. Indramayu, Prov, Jawa Barat, Indonesia
                            <p> Kode Pos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 45271</p>
                            <p> SK Pendiri Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 402/102/KEP/E/97</p>
                            <p> Tanggal SK Pendirian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 15-06-1994 </p>
                            <p> Status Kepemilikan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Yayasan </p>
                            <p> SK Izin Operasional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 402/102/KEP/E/94 </p>
                            <p> Nomor Telepon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: (0234) 351669 </p>
                            <p> Nomor Fax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 351669 </p>
                            <p> Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: smpnurulhalim@gmail.com </p>
                            </h6>
                        </p>

                        <div class="col-sm-15 col-lg-15  mt-2 mb-2 ">
                            <br>
                            <hr>
                            <p>
                                 <h4 class="text-center"> EKSTRAKULIKULER & PENGEMBANGAN DIRI </h4>
                             </p>
                             {{-- <h6 class="text-justify"> --}}
                                <ul class="text-lg-left">
                                    <li>PRAMUKA</li>
                                    <li>PASKIBRA</li>
                                    <li>PATROLI KEAMANAN SEKOLAH (PKS)</li>
                                    <li>PMR</li>
                                    <li>MARCHING BAND</li>
                                    <li>BOLA VOLI</li>
                                    <li>KEWIRAUSAHAAN</li>
                                    <li>KALIGRAFI</li>
                                    <li>KEPUTIAN </li>
                                    <li>HADROH</li>
                                    <li>BELAJAR TILAWAH (BT)</li>
                                    <li>AKTIVIS DAKWAH SEKOLAH (ADS)</li>
                                    <li>SANGGAR TARI</li>
                                    <li>IPS CLUB</li>
                                    <li>MATH CLUB</li>
                                    <li>JAPANIS CLUB</li>
                                    <li>ENGLISH CLUB</li>
                                    <li>TAHFIZ QUR'AN</li>
                                </ul>
                             {{-- </h6> --}}
                        </div>


                        <div class="col-sm-15 col-lg-15  mt-2 mb-2 ">
                            <br>
                            <hr>
                            <p>
                                 <h4 class="text-center"> SEJARAH YAYASAN & SMP NURUL HALIM WIDASARI </h4>
                             </p>
                        <p class="text-justify">Smp Nurul Halim Widasari merupakan lembaga pendidikan
                            yang dinaungi oleh Yayasan Nurul Halim. Sekilas riwayat berdirinya yayasan dengan memunculkan nama
                            "Nurul Halim" berdasarkan kronologi sebagai berikut.</p>
                        <p class="text-justify">Ketika itu di desa Ujungaris Kecamatan Widasari ada seorang pemuda bernama Wasam Sunanto
                            anak dari Bapak H. Darja yang memiliki gelar nama Haji Abdul Halim saat menunaikan ibadah haji. Pemuda tersebut,
                            Wasam Sunanto, memiliki komitmen untuk tidak berhenti belajar/ putus sekolah
                            meski terlahir dari kalangan keluarga petani. Dalam kondisi demikian,
                            tidak menyurutkan niat dari pemuda tersebut untuk terus belajar demi masa depan.
                            Dengan berbagai ikhtiar disertai do'a, niatan untuk terus belajar terwujud saat pemuda tersebut bisa melanjutkan
                            menempuh pendidikan jenjang perkuliahan di IAIN Yogyakarta.
                            Sebelum pemuda tersebut menimba ilmu di Pesantren Santi Asromo dibawah pimpinan K.H Abdul Halim.
                            Setelah pemuda itu selesai menempuh Pendidikan tinggi, singkat cerita beliau mengabdikan diri sebagai anggota
                            Tentara Nasional Indonesia Angkatan Udara di bagian Bintal (Bimbingan Mental)
                            dan mendapatkan rumah dinas di Komplek Perumahan Angkatan Udara Halim Perdanakusuma.
                        </p>
                        <p class="text-justify">Beranjak dari sekilas riwat tersebut terlahir nama Yayasan Nurul Halim yang diambil dari nama
                            gelar haji dari ayah pendiri yayasan yakni Haji Abdul Halim, kemudian dari nama pimpinan pesantrennya yakni K.H Abdul Halim,
                            dan dari nama Halim Perdanakusuma tempat tinggalnya selama mengabdi di TNI-AU.
                        </p>
                        <p class="text-justify">Yayasan Nurul Halim awal berdiri dirintis dan dipimpin Bapak Drs. H. Wasam Sunanto pada tahun 1991;
                            kemudian kepemimpinan dilanjutkan oleh Bapak Edi Ruslan pada periode ke-2 ditahun 1994;
                            dan dilanjutkan dipimpin oleh Bapak H.Wasim pada periode ke-3 ditahun 1997.
                            Periode berikutnya yakni periode ke-4 yayasan dipimpin oleh Bapak Drs. H. Wahidin, MM pada tahun 1998 dan dilanjut dengan kepemimpinan
                            Ibu Prof. Dr. Hj. Musyrifah Sunanto dari tahun 2002 sampai dengan tahun 2012.
                            Periode selanjutnya dari mulai tahun 2012 hingga saat ini Yayasan Nurul Halim dipimpin Ibu Dr. Hj. Lilis Imamah Ichdayanti, M.Si.
                        </p>
                        <p class="text-justify"> SMP Nurul Halim Widasari didirikan oleh Yayasan Nurul Halim pada tahun 1993 di atas tanak seluas 3000 m² yang terletak di
                            Ujungjaya No. 212 Desa Ujungjaya Rt 04/03 blok Bruntak Kec. Widasari, Kab. Indramayu.
                            Pengangkatan Kepala sekolah pertama berdasarkan atas amanat yayasan yaitu Bapak Drs. H. Ihya Ulumuddin, M.Ag dengan masa jabatan periode 1993-2001.
                            Untuk periode berikutnya yang menjabat sebagai Kepala SMP Nurul Halim Widasari yakni Bapak Sapi'i, M.Ag dengan masa jabatan periode 2001-2007.
                            Periode selanjutnya lembaga pendidikan SMP Nurul Halim Widasari dipimpin oleh Ibu Dedeh Nur Hamidah, M.Ag. selama periode 2007-2012.
                            Dan dari tahun 2012 hingga saat ini yang menjabat sebagai Kepala SMP Nurul Halim Widasari yaitu Bapak Humaedi, S.Ag.
                        </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end content --}}
    </div>
</div>
@endsection
