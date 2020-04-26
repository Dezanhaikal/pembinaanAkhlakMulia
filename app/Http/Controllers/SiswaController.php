<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('datamaster.siswa');
    }
    public function create(Request $request)
    {
        Siswa::create($request->all());
        
        return redirect('/guru');
    }
}
