<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FormController extends Controller
{
    //
    public function input() 
    {
        return view('input');
    }
    public function proses(Request $request){
        // Alert::success('Registrasi Berhasil!', 'Terima kasih sudah mendaftar PKM TC!');
        $this->validate($request,[
            'dokter' => ['required', 'min:6', 'max:20'],
            'nama' => ['required', 'min:6', 'max:20'],
            'sex' => ['required'],
            'nik' => ['required','min:10','numeric'],
            'suhu' => ['required', 'numeric'],
            'penanggungjawab' => ['required', 'min:5'],
            'keluhan' => ['required', 'min:5'],
            'resep' => ['required', 'image', 'max:2048', 'mimes:jpg,jpeg,png'],
            
       ]);
        $foto_link = $this->saveFoto( $request, 1 );
        $request->Resep = $foto_link;
        return view('output',['data' => $request]);
    }

    public function saveFoto(Request $request, $id)
    {
        $foto = $request->resep; 
        $foto_name = ''; 
        if ($foto !== NULL) {
            $foto_name = 'foto'. $id . "." . $foto->extension();
            $foto_name = str_replace(' ', '-', strtolower($foto_name)); 
            $foto->storeAs(null, $foto_name, ['disk' => 'public']); 
        }
      
        return asset('storage') . '/' . $foto_name; 

    }
}