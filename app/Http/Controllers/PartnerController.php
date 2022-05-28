<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portofolio;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $part = \App\Partner::all();
        return view('/portofolio/index',compact('part'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.create');
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
            'foto' => 'mimes:jpeg,png|max:10240',
            'keterangan' => 'required|string',
            ]);
            $data = $request->only('logo', 'keterangan');
            if ($request->hasFile('logo')) {
            $data['logo'] = $this->savePhoto($request->file('logo'));
            }
            \App\Partner::insert($data);
        return redirect('/Admin')->with('success', 'Berhasi Menyimpan Partner : ' . $request->get('keterangan')); 
    }
    protected function savePhoto(UploadedFile $foto)
    {
        $fileName = time() . '.' . $foto->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img'. DIRECTORY_SEPARATOR . 'partner';
        $foto->move($destinationPath, $fileName);
        return $fileName;
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
        $part = \App\Partner::findOrFail($id);
    
        return view('partner.edit',['part' => $part]);
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
        $part = \App\Partner::findOrFail($id);
        $this->validate($request, [
            'logo' => 'mimes:jpeg,png|max:10240',
            'keterangan' => 'required|string',
        ]);
    

        $data = $request->only(
            'logo',
            'keterangan'
        );
        if ($request->hasFile('logo')) {
            $data['logo'] = $this->savePhoto($request->file('logo'));
            if ($part->logo !== '') $this->deletePhoto($part->id);
        }
        $part->update($data);
        
        
        return redirect('/Admin');
    }
    protected function deletePhoto($id)
    {
        $gambar = \App\Partner::where('id',$id)->first();
	    File::delete('img/partner/'.$gambar->logo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $part = \App\Partner::findOrFail($id);
        if ($part->foto !== '') $this->deletePhoto($part->id);
        DB::table('partner')->where('id',$id)->delete();
        return redirect('/Admin');
    }
}