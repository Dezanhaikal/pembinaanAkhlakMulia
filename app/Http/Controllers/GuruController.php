<?php

namespace App\Http\Controllers;
use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view('datamaster.guru');
    }
    public function create(Request $request)
    {
        Guru::create($request->all());
        
        return redirect('/mapel');
    }
}
