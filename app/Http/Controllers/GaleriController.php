<?php

namespace App\Http\Controllers;
use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        //eloquent
                $Galeri=Galeri::all();
        
        
                //blade
                return view('galeri.index', compact ('Galeri'));
            }

            public function show($id){

                //eluquent
                //$Galeri=Galeri::where('id,$id')->frist();//select*from galeri where id $id limiti 1
                $Galeri=Galeri::find($id);
    
                return view('galeri.show',compact('Galeri'));
            }
            public function create(){
                return view('galeri.create');
            }
            
                public function store(Request $request){
            
                    $input= $request->all();
                    Galeri::create($input);
                    return redirect(route('galeri.index'));
            
                }
}

