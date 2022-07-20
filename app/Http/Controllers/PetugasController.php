<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;
use App\Models\Petugas;



class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pe = Petugas::all();
        return view('page.petugas.index',compact('pe','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tugas = Tugas::all();
        return view('page.petugas.form',compact('tugas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $pe = new Petugas;

        $pe->nik = $request->nik;
        $pe->nama = $request->nama;
       
        $pe->tugas_id = $request->tugas;
    
        $pe->hp = $request->hp;
     

        $pe->save();

        return redirect('/petugas');
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
        $pe = Petugas::find($id);
        $tugas = Tugas::all();
        return view('page.petugas.edit',compact('pe','tugas'));
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
        $pe = Petugas::find($id);

        
        $pe->nik = $request->nik;
        $pe->nama = $request->nama;
       
        $pe->tugas_id = $request->tugas;
    
        $pe->hp = $request->hp;
     

        $pe->save();

        return redirect('/petugas');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pe  = Petugas::find($id);
        $pe->delete();
        return redirect('/petugas');
    }
}
