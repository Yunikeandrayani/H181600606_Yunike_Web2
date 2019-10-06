<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;
class KategoriPengumumanController extends Controller
{
    public function index(){
        //eloquent
                $listKategoriPengumuman=KategoriPengumuman::all();
        
        
                //blade
                return view('kategori_pengumuman.index', compact ('listKategoriPengumuman'));
}
public function show($id){

    //eluquent
    //$KategoriPengumuman=KategoriPengumuman::where('id,$id')->frist();//select*from kategori_pengumuman where id $id limiti 1
    $kategoriPengumuman=KategoriPengumuman::find($id);

    return view('kategori_Pengumuman.show',compact('kategoriPengumuman'));
}

public function create(){
    return view('kategori_pengumuman.create');
}

    public function store(Request $request){

        $input= $request->all();
        KategoriPengumuman::create($input);
        return redirect(route('kategori_pengumuman.index'));

    }

}