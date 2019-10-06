<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;
class KategoriGaleriController extends Controller
{
    public function index(){
        //eloquent
                $listKategoriGaleri=KategoriGaleri::all();
        
        
                //blade
                return view('kategori_galeri.index', compact ('listKategoriGaleri'));
}

public function show($id){

    //eluquent
    //$KategoriGaleri=KategoriGaleri::where('id,$id')->frist();//select*from kategori_galeri where id $id limiti 1
    $kategoriGaleri=KategoriGaleri::find($id);
    return view('kategori_Galeri.show',compact('kategoriGaleri'));
}
public function create(){
    return view('kategori_galeri.create');
}

    public function store(Request $request){

        $input= $request->all();
        KategoriGaleri::create($input);
        return redirect(route('kategori_galeri.index'));

    }

}
