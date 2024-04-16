<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function formularioCar(){
        return view('car');
       }
    
       public function carStore(Request $request){
        $car = new Car();
        $car ->namecar= $request->namecar;
        $car -> model= $request->model;
        $car -> save();
    
        return$car;
       }
}