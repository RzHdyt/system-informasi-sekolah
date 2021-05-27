<?php

namespace App\Http\Controllers\Application\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pemberitahuan;
use App\Photo;

class PemberitahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $pemberitahuans = Pemberitahuan::get();
        return view('application.web.pemberitahuan.index', [
            'no' => $no,
            'pemberitahuans' => $pemberitahuans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application.web.pemberitahuan.create');
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
            'judul',
            'isi',
            'author',

            'photo_id'
        ]);


        $pemberitahuans = new Pemberitahuan;

        if ($file = $request->file('photo_id')) {


            $name = time() . '-announcement-' . $file->getClientOriginalName();

            $distanationPath = 'images/pemberitahuan';

            $file->move($distanationPath, $name);

            $photo = Photo::create(['file_photo' => "/" . $name]);

            $photo = $photo->id;
        }

        $pemberitahuans->judul = $request->judul;
        $pemberitahuans->isi = $request->isi;
        $pemberitahuans->author = $request->author;

        $pemberitahuans->photo_id = $photo;

        DB::transaction(function () use ($pemberitahuans) {
            $pemberitahuans->save();
        }, 5);

        return redirect()
            ->route('admin.pemberitahuan.index')
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemberitahuans = Pemberitahuan::where('id', $id)->first();
        return view('application.web.pemberitahuan.update', [
            'pemberitahuans' => $pemberitahuans
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
            'judul',
            'isi',
            'author',

            'photo_id'
        ]);


        $pemberitahuans = Pemberitahuan::where('id', $id)->first();

        if ($file = $request->file('photo_id')) {


            $name = time() . '-announcement-' . $file->getClientOriginalName();

            $distanationPath = 'images/pemberitahuan';

            $file->move($distanationPath, $name);

            $photo = Photo::create(['file_photo' => "/" . $name]);

            $photo = $photo->id;

            $pemberitahuans->photo_id = $photo;
        }

        $pemberitahuans->judul = $request->judul;
        $pemberitahuans->isi = $request->isi;
        $pemberitahuans->author = $request->author;


        DB::transaction(function () use ($pemberitahuans) {
            $pemberitahuans->save();
        }, 5);

        return redirect()
            ->route('admin.pemberitahuan.index')
            ->with(
                'success_message',
                'Data successfully updated!'
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
        // $pemberitahuans = Pemberitahuan::where('id', $id)->first();
        $pemberitahuans = Pemberitahuan::findOrFail($id);
        unlink(public_path('/images/pemberitahuan/') . $pemberitahuans->photoPemberitahuan->file_photo);

        DB::transaction(function () use ($pemberitahuans) {
            $pemberitahuans->delete();
        }, 5);

        return redirect()
            ->route('admin.pemberitahuan.index')
            ->with(
                'success_message',
                'Data successfully deleted!'
            );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approveStatus(Request $request, $id)
    {
        $pemberitahuans = Pemberitahuan::where('id', $id)->first();

        $pemberitahuans->status = $request->status;
        DB::transaction(function () use ($pemberitahuans) {
            $pemberitahuans->save();
        }, 5);

        return redirect()
            ->route('admin.pemberitahuan.index')
            ->with(
                'success_message',
                'Data successfully update!'
            );
    }
}
