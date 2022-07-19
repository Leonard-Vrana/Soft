<?php

namespace App\Http\Controllers;
use App\Models\Car;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage(){
        return view('homepage')
               ->with('cars', Car::all());
    }
}
