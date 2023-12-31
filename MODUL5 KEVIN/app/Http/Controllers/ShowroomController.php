<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function index(){
        $showroom = Showroom::all();
        return view ('showroom.index', compact('showroom'));
    }

    public function create (){
        return view('showroom.create');
    }

    public function store(Request $request){
    
        $showroom = Showroom::create([
            'nama_mobil' => $request['name'],
            'brand_mobil' => $request['brand'],
            'warna_mobil' => $request['warna'],
            'tipe_mobil' => $request['tipe'],
            'harga_mobil' => $request['harga'],
            
        ]);
        return redirect(route('showroom.index'));
    }

    //

}
