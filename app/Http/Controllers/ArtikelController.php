<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
        //eloquent
                $Artikel=Artikel::all();
        
        
                //blade
                return view('artikel.index', compact ('Artikel'));
            }
            public function show($id){

                //eluquent
                //$Artikel=Artikel::where('id,$id')->frist();//select*from artikel where id $id limiti 1
                $Artikel=Artikel::find($id);
    
                return view('artikel.show',compact('Artikel'));
            }

            public function create(){
                $KategoriArtkel=KategoriArtikel::pluck('nama','id',);

                return view('artikel.create', compact('Artikel'));
            }
            
                public function store(Request $request){
            
                    $input= $request->all();
                    Artikel::create($input);
                    return redirect(route('artikel.index'));
            
                }
        
}

