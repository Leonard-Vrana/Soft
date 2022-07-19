<?php

namespace App\Http\Controllers;
use App\Models\Part;
use App\Models\Car;
use App\Http\Requests\CreatePart;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function show($id){
        $car = Car::FindOrFail($id);
        return view('parts')
               ->with("parts", Part::all()->where('car_id', $id))
               ->with("car", Car::find($id));
    }

    public function create(CreatePart $r){
        $part = new Part;
        $part->car_id = $r->car_id;
        $part->name = $r->name;
        $part->serial_number = $r->serial_number;
        $part->save();
        flash('Pridanie dielu bolo úspešné')->success();
        return redirect()->route('detail.show', $r->car_id);
    }

    public function edit(CreatePart $r){
        $part = Part::FindOrFail($r->id);
        $part->car_id = $r->car_id;
        $part->name = $r->name;
        $part->serial_number = $r->serial_number;
        $part->save();
        flash('Upravenie dielu prebehlo úspešne')->success();
        return redirect()->route('detail.show', $r->car_id);
    }

    public function delete(Request $r){
        $pass = Part::findOrFail($r->id);
		$pass->delete();
		flash('Odstránenie diela prebehlo úspešne')->success();
		return redirect()->route('detail.show', $r->car_id);
    }

}
