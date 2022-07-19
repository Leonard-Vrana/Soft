<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateCar;
use App\Models\Car;
use App\Models\Part;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function createCar(CreateCar $r){
        if(Car::where('name', $r->name)->count() == 0){
            $car = new Car();
            $car->name = $r->name;
            $car->registration_number = $r->registration_number;
            $car->is_registered = $r->is_register;
            $car->save();
            flash('Pridanie auta prebehlo úspešne')->success();
            return redirect()->route('homepage');
        } else {
            return back()->withErrors([
                'error-car' => 'Názov auta už existuje',
            ]);
        }
    }
    public function editCar(CreateCar $r){
        $car = Car::FindOrFail($r->id);
        $car->name = $r->name;
        $car->registration_number = $r->registration_number;
        $car->is_registered = $r->is_register;
        $car->save();
        flash('Upravenie auta prebehlo úspešne')->success();
        return redirect()->route('homepage');
    }

    public function deleteCar(Request $r){
        $part = Part::where('car_id', $r->id)->delete();
        $car = Car::findOrFail($r->id);
        $car->delete();
		flash('Odstránenie auta prebehlo úspešne')->success();
		return redirect()->route('homepage');
    }

}
