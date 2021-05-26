<?php

namespace App\Http\Controllers\Application\Frontend;

use App\Guru;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beranda()
    {
        $no = 0;
        $gurus = Guru::where('jabatan', '!=', 'guru')->paginate(4);

        foreach ($gurus as $guru) {
            $dateIn = date_create($guru->tanggal_lahir);
            $dateNow = date_create();
            $dateDiff = date_diff($dateIn, $dateNow);

            $years = $dateDiff->y;
            // dd($years);
            $guru->umur = $years;
        }

        return view('application.frontend.dashboard', [
            'gurus' => $gurus,
            'no' => $no,
        ]);
    }

    // This page Tentang Kami -------------------------------------------------------------------------------------------

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sambutanKepsek()
    {
        $gurus = Guru::paginate(3);
        return view('application.frontend.tentang-kami.sambutan-kepsek', [
            'gurus' => $gurus,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visiMisi()
    {
        $gurus = Guru::where('jabatan', 'guru')->paginate(8);
        return view('application.frontend.tentang-kami.visi-misi', [
            'gurus' => $gurus,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profileSekolah()
    {
        $gurus = Guru::paginate(3);

        return view('application.frontend.tentang-kami.profile-sekolah', [
            'gurus' => $gurus,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guruPengajar()
    {
        $gurus = Guru::where('jabatan', 'guru')->paginate(8);

        foreach ($gurus as $guru) {
            $dateIn = date_create($guru->tanggal_lahir);
            $dateNow = date_create();
            $dateDiff = date_diff($dateIn, $dateNow);

            $years = $dateDiff->y;
            // dd($years);
            $guru->umur = $years;
        }

        return view('application.frontend.tentang-kami.guru-pengejar', [
            'gurus' => $gurus,
        ]);
    }

    // End page Tentang Kami -------------------------------------------------------------------------------------------

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kegiatan()
    {
        return view('application.frontend.kegiatan-sekolah.kegiatan');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayGuru($id)
    {
        # code...
    }
}
