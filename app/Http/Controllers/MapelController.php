<?php

namespace App\Http\Controllers;
use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        return view('datamaster.mapel');
    }
    public function create(Request $request)
    {
        Mapel::create($request->all());
        
        return redirect('/ortu');
    }
}
