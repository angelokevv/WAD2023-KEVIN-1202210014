<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create (){
        return view('showroom.create');
    }

    public function store(Request $request){
        $showroom = $request->all();
        Showroom::create([
            'name' => $showroom(['name']),
            'brand' => $showroom(['brand']),
            'warna' => $showroom(['warna']),
            'tipe' => $showroom(['tipe']),
            'harga' => $showroom(['harga']),
        ]);
        return redirect(route('showroom.index'));
    }

    public function index(){
        $showroom = Showroom::all();

        return view ('showroom.index', compact('showroom'));
    }
    //

}
