<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    public function index()
    {
        $datadiri = \App\DataDiri::all();
        return view('datadiri.index',['data_diri_pemohon' => $datadiri]);
    }

    
    public function create(Request $request)
    {
        //insert ke table user
        $user = new \App\User;
        $user->role = 'pemohon';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->save();
        /*insert ke table data diri*/
        $request->request->add(['user_id' => $user->id ]);
        $datadiri = \App\DataDiri::create($request->all());
        return redirect('/datadiri')->with('sukses','Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $datadiri = \App\DataDiri::find($id);
        return view('datadiri/edit',['datadiri' => $datadiri]);
    }

    public function update(Request $request,$id)
    {
        $datadiri = \App\DataDiri::find($id);
        $datadiri->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $datadiri->avatar = $request->file('avatar')->getClientOriginalName();
            $datadiri->save();
        }
        return redirect('/datadiri')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $datadiri = \App\DataDiri::find($id);
        $datadiri->delete();
        return redirect('/datadiri')->with('sukses','Data Berhasil Dihapus');
    }

    public function profile($id)
    {
        $datadiri = \App\DataDiri::find($id);
        return view('datadiri.profile',['datadiri' => $datadiri]);
    }
}
?>