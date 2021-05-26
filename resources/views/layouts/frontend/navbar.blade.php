<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Sekolah Bulan Bintang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-bold text-white " href="{{ route('beranda') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-bold text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-warning" href="{{ route('sambutan-kepala-sekolah') }}">Sambutan
                            Kepala Sekolah</a>
                        <a class="dropdown-item text-warning" href="{{ route('visi-misi') }}">Visi dan Misi</a>
                        <a class="dropdown-item text-warning" href="{{ route('profile-sekolah') }}">Profile Sekolah</a>
                        <a class="dropdown-item text-warning" href="{{ route('guru-pengajar') }}">Guru Pengajar</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-bold text-white " href="{{ route('kegiatan') }}">Berita & Kegiatan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>