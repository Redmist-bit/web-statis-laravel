<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AskController extends Controller
{
    public function create() {
        return view('ask.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_dibuat" => $request["datein"],
            "tanggal_diperbaharui" => $request["dateout"]
        ]);
        return redirect('/pertanyaan')->with('success','Pertanyaan anda telah tersimpan');
    }

    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        // dd($pertanyaan);
        return view('ask.index', compact('pertanyaan'));
    }
    public function show($id){
        $ask = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($ask);
        return view('ask.show', compact('ask'));
    }
    public function edit($id){
        $ask = DB::table('pertanyaan')->where('id', $id)->first();

        return view('ask.edit', compact('ask'));
    }
    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')
                    ->where('id',$id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi'],
                        'tanggal_dibuat' => $request['datein'],
                        'tanggal_diperbaharui' => $request['dateout']
                    ]);
        return redirect('/pertanyaan')->with('success','Berhasil update data');
    }

    public function destroy($id){
        $query = DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect('/pertanyaan')->with('success','Berhasil hapus data');
    }
}
