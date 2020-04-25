<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index(){
        $data_ujian = \App\Ujian::all();
        return view('ujian.index', ['data_ujian'=> $data_ujian]);
    }
    public function create(Request $Request){
        \App\Ujian::create($Request->all());
        return redirect('/ujian')->with('sukses','Data berhasil di input');
    }
    public function edit($id){
        $ujian =\App\Ujian::find($id);
        return view('ujian/edit', ['ujian' => $ujian]);
    }
    public function update(Request $Request, $id){
        $ujian =\App\Ujian::find($id);
        $ujian->update($Request->all());
        return redirect('/ujian')->with('sukses','Data berhasil di update');
    }
    public function delete($id)
    {
       $ujian = \App\Ujian::find($id);
       $ujian->delete($ujian);
       return redirect('/ujian')->with('sukses','Data berhasil di hapus');
    }
}
