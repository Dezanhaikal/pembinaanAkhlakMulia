<?php

namespace App\Http\Controllers;
use App\Jkegiatan;
use Illuminate\Http\Request;

class JkegiatanController extends Controller
{
    public function index()
    {
        return view('datamaster.jkegiatan');
    }
    public function create(Request $request)
    {
        Jkegiatan::create($request->all());
        
        return redirect('/ortu');
    }
}
