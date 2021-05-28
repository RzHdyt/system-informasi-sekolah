<?php

namespace App\Http\Controllers\Application\Web;

use App\Guru;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;

        $gurus = Guru::get();

        return view('application.web.guru.index', [
            'no' => $no,
            'gurus' => $gurus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application.web.guru.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nomer_induk',
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'gender',
            'agama',
            'mapel',
            'jabatan',

            'photo_id'
        ]);


        $guru = new Guru;

        if ($file = $request->file('photo_id')) {


            $name = time() . '-guru-' . $file->getClientOriginalName();

            $distanationPath = 'images/profile-guru';

            $file->move($distanationPath, $name);

            $photo = Photo::create(['file_photo' => "/" . $name]);

            $photo = $photo->id;
            $guru->photo_id = $photo;
        }

        $guru->nomer_induk = $request->nomer_induk;
        $guru->nama = $request->nama;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->gender = $request->gender;
        $guru->mapel = $request->mapel;
        $guru->jabatan = $request->jabatan;
        $guru->agama = $request->agama;


        DB::transaction(function () use ($guru) {
            $guru->save();
        }, 5);

        return redirect()
            ->route('admin.guru.index')
            ->with(
                'success_message',
                'Data successfully created!'
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gurus  = Guru::where('id', $id)->first();
        return view('application.web.guru.update', [
            'gurus' => $gurus
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nomer_induk',
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'gender',
            'agama',
            'mapel',
            'jabatan',

            'photo_id'
        ]);


        $guru = Guru::where('id', $id)->first();

        if ($file = $request->file('photo_id')) {


            $name = time() . '-guru-' . $file->getClientOriginalName();

            $distanationPath = 'images/profile-guru';

            $file->move($distanationPath, $name);

            $photo = Photo::create(['file_photo' => "/" . $name]);

            $guru->photo_id = $photo;
            $photo = $photo->id;
        }

        $guru->nomer_induk = $request->nomer_induk;
        $guru->nama = $request->nama;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->gender = $request->gender;
        $guru->mapel = $request->mapel;
        $guru->jabatan = $request->jabatan;
        $guru->agama = $request->agama;


        DB::transaction(function () use ($guru) {
            $guru->save();
        }, 5);

        return redirect()
            ->route('admin.guru.index')
            ->with(
                'success_message',
                'Data successfully update!'
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gurus = Guru::where('id', $id)->first();

        unlink(public_path('/images/profile-guru/') . $gurus->photoGuru->file_photo);

        DB::transaction(function () use ($gurus) {
            $gurus->delete();
        }, 5);

        return redirect()
            ->route('admin.guru.index')
            ->with(
                'success_message',
                'Data successfully deleted!'
            );
    }
}
