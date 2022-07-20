<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;


class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $nomor = 1;
    $tugas = Tugas::all();
    return view('page.tugas.index', compact('tugas','nomor'));
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('page.tugas.form');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $tugas = new Tugas;

    $tugas->tugas = $request->tugas;

    $tugas->save();

    return redirect('/tugas');
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
    $tugas = Tugas::find($id);

    return view('page.tugas.edit',compact('tugas'));
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
    $tugas = Tugas::find($id);

    $tugas->tugas = $request->tugas;

    $tugas->save();

    return redirect('/tugas');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $tugas  = Tugas::find($id);
    $tugas->delete();
    return redirect('/tugas');
}
}
