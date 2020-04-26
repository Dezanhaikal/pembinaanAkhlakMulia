<?php

namespace App\Http\Controllers;
use App\djadwal;
use App\Jkegiatan;
use App\Mapel;
use App\Siswa;
use Illuminate\Http\Request;

class DjadwalController extends Controller
{
    public function index()
    {
        $data_siswa = Siswa::all();
        $data_kegiatan = Jkegiatan::all();
        $data_mapel = Mapel::all();
        $data_jadwal = Jkegiatan::all();
        return view('datamaster.djadwal',[
            'data_jadwal' => $data_jadwal,
            'data_mapel' => $data_mapel,
            'data_kegiatan' => $data_kegiatan,
            'data_siswa' => $data_siswa,
        ]);
    }
    public function create(Request $request)
    {
        djadwal::create($request->all());
        
        return redirect('/login');
    }
}
