<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class ProfileController extends Controller
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
        $pro = \App\Profile::all();
        return view('/profile/index',compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
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
            'scansk' => 'mimes:jpeg,png|max:10240',
            'nolegal' => 'required|string',
            'about' => 'required|string',
            'logo' => 'mimes:jpeg,png|max:10240',
            'alamat' => 'required|string',
            'email' => 'required|string',
            'telpon' => 'required|integer',
        ]);
            $data = $request->only('scansk',
            'nolegal',
            'about',
            'logo',
            'alamat',
            'email',
            'telpon');
            if ($request->hasFile('logo')) {
            $data['logo'] = $this->savePhoto($request->file('logo'));
            }
            if ($request->hasFile('scansk')) {
                $data['scansk'] = $this->savePoto($request->file('scansk'));
                }
            \App\Profile::insert($data);
            return redirect('/Admin');
    }
    protected function savePhoto(UploadedFile $logo) {
        $fileName = time() . '.' . $logo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img'. DIRECTORY_SEPARATOR . 'Logo';
        $logo->move($destinationPath, $fileName);
        return $fileName; }
        protected function savePoto(UploadedFile $scansk) {
            $fileName = time() . '.' . $scansk->guessClientExtension();
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img'. DIRECTORY_SEPARATOR . 'SK';
            $scansk->move($destinationPath, $fileName);
            return $fileName; }

    

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
        $pro = \App\Profile::findOrFail($id);
        return view('profile.edit',compact('pro'));
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
        $pro = \App\Profile::findOrFail($id);
        $this->validate($request, [
            'scansk' => 'mimes:jpeg,png|max:10240',
            'nolegal' => 'required|string',
            'about' => 'required|string',
            'logo' => 'mimes:jpeg,png|max:10240',
            'alamat' => 'required|string',
            'email' => 'required|string',
            'telpon' => 'required|integer',
        ]);
            $data = $request->only('scansk',
            'nolegal',
            'about',
            'logo',
            'alamat',
            'email',
            'telpon');
            if ($request->hasFile('logo')) {
            $data['logo'] = $this->savePhoto($request->file('logo'));
            if ($pro->logo !== '') $this->deletePhoto($pro->id);
        }
        if ($request->hasFile('scansk')) {
            $data['scansk'] = $this->savePoto($request->file('scansk'));
            if ($pro->scansk !== '') $this->deletePoto($pro->id);
        }
        $pro->update($data);
        return redirect('/Admin');
    }
    protected function deletePhoto($id)
    {
        $gambar = \App\Profile::where('id',$id)->first();
	    File::delete('img/Logo/'.$gambar->logo);
    }
    protected function deletePoto($id)
    {
        $gambar = \App\Profile::where('id',$id)->first();
	    File::delete('img/SK/'.$gambar->scansk);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
