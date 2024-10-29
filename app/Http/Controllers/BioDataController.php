<?php

namespace App\Http\Controllers;
use App\Models\BioData;
use Illuminate\Http\Request;

class BioDataController extends Controller
{
    public function index()
    {
        $datas = BioData::$BioData;
        return view('biodata.Biodata', compact('datas'));
    }
}
