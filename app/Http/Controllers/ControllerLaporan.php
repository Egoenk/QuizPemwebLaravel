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

    public function indexSelesai(){
        $laporan = Laporan::query()
            ->where('id_status', 2)
            ->get();
        if($laporan == NULL) {
            return redirect('/')->with('status','Tugas Kosong');
            }
        return view('view', ['laporan' => $laporan]);
    }

    public function indexBelum(){
        $laporan = Laporan::query()
            ->where('id_status', 1)
            ->get();
        if($laporan == NULL) {
            return redirect('/')->with('status','Tugas Kosong');
        }
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

    public function formEdit($id){
        $laporan = Laporan::findOrFail($id);;
        return view('editLaporan' ,['laporan' => $laporan]);
    }
    public function editLaporan(Request $request , $id){

        $laporan = Laporan::findOrFail($id);
        
        $laporan->judul = $request->input('judul');
        $laporan->deskripsi = $request->input('deskripsi');
        $laporan->id_status = $request->input('status');
        $laporan->save();
    
        return redirect('/')->with('status', 'Data Berhasil Diupdate!');
    }

    public function deleteData(int $id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();
        return redirect('/')->with('status','Data Berhasil Dihapus');
    }

    public function updateStatus(Request $request ,int $id)
    {   
        $laporan = Laporan::find($id);
        if($laporan->id != $id) {
            return redirect('/info/{{ $laporan->id }}');
        }
        if($request->input('status') == '1') {
            $laporan->id_status = 1;
        } else if($request->input('status') == '2') {
            $laporan->id_status = 2;
        }
        $laporan->save();
        return redirect('/');
    }
}
