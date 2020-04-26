<?php

namespace App\Http\Controllers;
use App\Ortu;
use Illuminate\Http\Request;

class OrtuController extends Controller
{
    public function index()
    {
        return view('datamaster.ortu');
    }
    public function create(Request $request)
    {
        Ortu::create($request->all());
        
        return redirect('/pembuktian');
    }
}
