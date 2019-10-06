<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
class BeritaController extends Controller
{
    public function index(){
        //eloquent
                $Berita=Berita::all();
        
        
                //blade
                return view('berita.index', compact ('Berita'));
            }
            public function show($id){

                //eluquent
                //$Artikel=Berita::where('id,$id')->frist();//select*from berita where id $id limiti 1
                $Berita=Berita::find($id);
    
                return view('berita.show',compact('Berita'));
            }
            public function create(){
                return view('berita.create');
            }
            
                public function store(Request $request){
            
                    $input= $request->all();
                    Berita::create($input);
                    return redirect(route('berita.index'));
            
                }


}
