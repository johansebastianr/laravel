<?php

namespace App\Http\Controllers;
use App\Models\Bike;

use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function formularioBike(){
        return view('bike');
       }
    
       public function bikeStore(Request $request){
        $bike = new Bike();
        $bike ->namebike= $request->namebike;
        $bike -> descr= $request->descr;
        $bike -> save();
    
        return$bike;
       }
}