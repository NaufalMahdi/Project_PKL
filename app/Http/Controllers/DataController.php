<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
class DataController extends Controller
{
    public function index(){
      $data = DB::table('data')
            ->join('tabeldatai', 'data.kdData', '=', 'tabeldatai.kdData')
            ->join('kategori', 'kategori.idKategori', '=', 'data.idKategori')
            ->join('tabeldataii', 'tabeldatai.kdDataI', '=', 'tabeldataii.kdDataI')
            ->select('data.*', 'kategori.*', 'tabeldatai.*', 'tabeldataii.*')
            ->get();
      return view('data.index',[
        "data"=>$data,
        "judul"=>$data[0]-> judul,
        // "deskripsi"=>$data[0]-> deskripsi,
        "kategori"=>$data[0]-> namaKategori,  
        "tanggal"=>$data[0]->tanggal
      ]);
    }
}
