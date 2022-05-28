<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portofolio;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;
class PortofolioController extends Controller
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
        $por = \App\Portofolio::all();
        return view('/portofolio/index',compact('por'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portofolio.create');
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
            'nama' => 'required|string',
            'foto' => 'mimes:jpeg,png|max:10240',
            'keterangan' => 'required|string',
            ]);
            $data = $request->only('nama', 'keterangan');
            if ($request->hasFile('foto')) {
            $data['foto'] = $this->savePhoto($request->file('foto'));
            }
        Portofolio::insert($data);
        return redirect('/Admin')->with('success', 'Berhasi Menyimpan Portofilo : ' . $request->get('nama')); 
    }
    protected function savePhoto(UploadedFile $foto)
    {
        $fileName = time() . '.' . $foto->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img'. DIRECTORY_SEPARATOR . 'portofolio';
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
        $por = \App\Portofolio::findOrFail($id);
    
        return view('portofolio.edit',['por' => $por]);
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
        $por = \App\Portofolio::findOrFail($id);
        $this->validate($request, [
            'nama' => 'required|string',
            'foto' => 'mimes:jpeg,png|max:10240',
            'keterangan' => 'required|string',
        ]);
    

        $data = $request->only(
            'nama',
            'foto',
            'keterangan'
        );
        if ($request->hasFile('foto')) {
            $data['foto'] = $this->savePhoto($request->file('foto'));
            if ($por->foto !== '') $this->deletePhoto($por->id);
        }
        $por->update($data);
        
        
        return redirect('/Admin');
    }
    protected function deletePhoto($id)
    {
        $gambar = \App\Portofolio::where('id',$id)->first();
	    File::delete('img/portofolio/'.$gambar->foto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $por = \App\Portofolio::findOrFail($id);
        if ($por->foto !== '') $this->deletePhoto($por->id);
        DB::table('portofolio')->where('id',$id)->delete();
        return redirect('/Admin');
    }
}