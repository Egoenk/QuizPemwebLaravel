<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Laporan;

class ControllerLaporan extends Controller
{
    public function index(){
        $laporan = Laporan::all();
        return view('view', ['laporan' => $laporan]);
    }

    public function deskripsi($id){
        $laporan = Laporan::findOrFail($id);;
        return view('detail', ['laporan' => $laporan]);
    }

    public function addData(Request $request){

        $laporan = new Laporan; 
        $laporan->judul = $request->input('judul');
        $laporan->deskripsi = $request->input('deskripsi');
        $laporan->id_status = $request->input('status');
        $laporan->save();
        
        return redirect('/')->with('status', 'Data Berhasil Dimasukan!');
    }

    public function editLaporan(Request $request , $id){

        $laporan = Laporan::findOrFail($id);

        $laporan->judul = $request->input('judul');
        $laporan->deskripsi = $request->input('deskripsi');
        $laporan->id_status = $request->input('status');
        $laporan->save();
    
        return redirect('/')->with('status', 'Data Berhasil Dimasukan!');
    }

    public function deleteData($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();

        return redirect()->route('/');
    }
}
