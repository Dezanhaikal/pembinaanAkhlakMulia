<?php

namespace App\Http\Controllers;
use App\Pembuktian;
use Illuminate\Http\Request;
use UploadImg;

class PembuktianController extends Controller
{

    protected $path = 'bukti/';

    public function index()
    {
        return view('datamaster.pembuktian');
    }
    public function create(Request $request)
    {
        Pembuktian::create($request->all());
        $img = $request->file('bukti1');
        if(!is_null($img)){
            $upload = new UploadImg($img);
            $upload->setPath($this->path);
            $input['bukti1'] = $upload->getFilename();
        }
         if(!is_null($img)) $upload->upload(true, false);

        $image = $request->file('bukti2');
        if(!is_null($image)){
            $upload = new UploadImg($image);
            $upload->setPath($this->path);
            $input['bukti2'] = $upload->getFilename();
        }
         if(!is_null($image)) $upload->upload(true, false);
        return redirect('/djadwal');
    }
}
