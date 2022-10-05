<?php

namespace App\Http\Controllers;

use App\Models\TabelDatai;
use Illuminate\Http\Request;

class TabelDataiController extends Controller
{
    public function index(){
      $tabeldatai = TabelDatai::all();
      return view('tabeldatai.index', compact(['tabeldatai']));
    }
}
