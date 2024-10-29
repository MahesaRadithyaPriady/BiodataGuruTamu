<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rute;
class RuteController extends Controller
{
    public function menampilkanData(){
        return view('RuteViews');
    }


    public function menampilkanDataModels(){
        $ruteData = Rute::$namaSekolah;
        return view('RuteModels', compact('ruteData'));    
        
    }



}
