<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use DB;



class CrudController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  { 
    $data['title'] = 'Test';

    return view('crud.home', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  public function add(Request $request) {
    $data = array(
      'nama'   => $request->input('nama'),
      'alamat' => $request->input('alamat'),
      'kelas'  => $request->input('kelas'),
      'no_hp'  => $request->input('no_hp'),
      'email'  => $request->input('email')
    );

    DB::table('crud_siswa')->insert($data);
    return Redirect::to('/crud/read')->with('message', 'Berhasil menambah data !..');
  }

  public function read() {
    $siswa = DB::table('crud_siswa')->get();
    return view('crud.read', $siswa);
  }





  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
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
      //
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
      //
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
