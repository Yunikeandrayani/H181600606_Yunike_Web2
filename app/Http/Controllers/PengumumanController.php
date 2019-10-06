<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
class PengumumanController extends Controller
{
    public function index(){
        //eloquent
                $Pengumuman=Pengumuman::all();
        
        
                //blade
                return view('Pengumuman.index', compact ('Pengumuman'));
            }
            public function show($id){

                //eluquent
                
                $Pengumuman=Pengumuman::find($id);
    
                return view('pengumuman.show',compact('Pengumuman'));
            }

            public function create(){
                return view('pengumuman.create');
            }
            
                public function store(Request $request){
            
                    $input= $request->all();
                    Pengumuman::create($input);
                    return redirect(route('pengumuman.index'));
            
                }
}
