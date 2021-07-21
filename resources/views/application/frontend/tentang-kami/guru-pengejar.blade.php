@extends('layouts.frontend.halaman-depan')

@section('title')
<title>Guru Pengajar & Staf </title>
@endsection
@section('style')
<style>
    /* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-sm-12 col-lg-12">

        <div class="card col-sm-12 col-lg-12 mt-3 mb-2">
            <div class="card-body col-sm-12 col-lg-12">
                <h2 class="text-center"> Guru Pengajar & Staf Sekolah</h2>
                <hr>
                <div class="row">
                    @foreach ($gurus as $guru)
                    @if ($guru['jabatan'] == 'Guru' or $guru['jabatan'] ==  'Staf-TU' or $guru['jabatan'] == 'Kep-TU'
                    or $guru['jabatan'] == 'Guru-BK' or $guru['jabatan'] == 'Satpam'or $guru['jabatan'] =='Penjaga-Sekolah'or $guru['jabatan'] =='Staf-Perpus')
                    <div class="col-sm-3 col-lg-3  mt-3 mb-3">
                        <div class="card col-auto col-sm-auto">
                            <!-- Trigger the Modal -->
                        <img id="myImg" src="{{ asset('images/profile-guru' . $guru->photoGuru['file_photo'] ) }}"
                        class="card-img-top mt-2" alt="..." style="height: 300px; max-width: 200%; object-fit: contain; ">

                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                        <!-- The Close Button -->
                        <span class="close">&times;</span>

                        <!-- Modal Content (The Image) -->
                        <img class="modal-content" id="img01">

                        <!-- Modal Caption (Image Text) -->
                        <div id="caption"></div>
                        </div>
                            {{-- <img src="{{ asset('images/profile-guru' . $guru->photoGuru['file_photo'] ) }}"
                                class="card-img-top mt-2" alt="..."
                                style="height: 150px; max-width: 100%; object-fit: contain; "> --}}
                            <div class="card-body col-auto col-sm-auto">
                                <hr>
                                <p class="text-bold text-lg-center">
                                    <span class="text-bold text-lg-center">
                                        <b> {{ $guru->nama }} </b><br>
                                        @if ($guru->jabatan == 'ketua-Yayasan')
                                        Ketua Yayasan
                                        @elseif ($guru->jabatan == 'Wa-Yayasan')
                                        Wakil Ketua Yayasan
                                        @elseif ($guru->jabatan == 'Kepsek')
                                        Kepala Sekolah
                                        @elseif ($guru->jabatan == 'Wa-Kepsek')
                                        Wakasek Kesiswaan
                                        @elseif ($guru->jabatan == 'Wakep-Kurikulum')
                                        Wakasek KuriKulum
                                        @elseif ($guru->jabatan == 'Guru')
                                        Guru
                                        @elseif ($guru->jabatan == 'Guru-BK')
                                        Guru BK
                                        @elseif ($guru->jabatan == 'Kep-TU')
                                        Kepala Staf TU
                                        @elseif ($guru->jabatan == 'Staf-TU')
                                        Staf TU
                                        @elseif ($guru->jabatan == 'Staf-Perpus')
                                        Staf Perpustakaan
                                        @elseif ($guru->jabatan == 'Staf-lab')
                                        Staf Lab. Komputer
                                        @elseif ($guru->jabatan == 'Satpam')
                                        Satpam
                                        @elseif ($guru->jabatan == 'Penjaga-Sekolah')
                                        Penjaga Sekolah
                                        @endif

                                        {{ $guru->mapel }} <br> Dari
                                        {{ $guru->tahun_menjabat}}<br>
                                        {{ $guru->agama }} <br>
                                        {{ $guru->umur }} Tahun
                                    </span>
                                </p>

                                <p class ="text-bold text-center mt-lg-5 mb-2"> No. Induk Yayasan <br>
                                    {{ $guru->nomer_induk }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>

                {{-- <nav aria-label="Page navigation example" class="pr-4 pl-4">
                    <div class="d-flex justify-content-between">
                        Total Guru Pengajar : {{ $gurus->count() }}
                        {{ $gurus->links() }}
                    </div>
                </nav> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
                // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }
    </script>
@endsection
