<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;

class TruckController extends Controller
{
    public function dashboard()
    {
        $trucks = Truck::all();
        return view('dashboard', compact('trucks'));
    }

    public function addTruck(Request $request)
    {
        Truck::create([
            'truck_name' => $request->truck_name,
            'driver_name' => $request->driver_name,
            'truck_number' => $request->truck_number,
            'route' => $request->route,
        ]);

        return redirect('/dashboard');
    }


    public function deleteTruck($id)
    {
        // Pehle truck ko find karen
        $truck = Truck::find($id);

        if($truck){
            $truck->delete();
            return redirect()->back()->with('success', 'Truck deleted successfully!');
        }

        return redirect()->back()->with('error', 'Truck not found!');
    }
}