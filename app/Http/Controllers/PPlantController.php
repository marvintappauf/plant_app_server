<?php

namespace App\Http\Controllers;

use App\pPlant;
use App\plant_attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PPlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $plants = PPlant::all();

	    return response()->json($plants);
    }

    public function all() {
    
    $plants = DB::table('p_plants')
            ->leftJoin('plant_attribute', 'plant_attribute.plantId', '=', 'p_plants.id')
            ->get(); 
		return response()->json($plants);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'type' => 'required',
        ]);

        $plant = pPlant::create($request->all());
        $plantAttribute = plant_attribute::create($request->all());

        return response()->json([
            'message' => 'Great success! New Plant created',
            'Plant' => $plant,
            'PlantAttributes' => $plantAttribute
        ]);
	}
    /**
     * Display the specified resource.
     *
     * @param  \App\pPlant  $pPlant
     * @return \Illuminate\Http\Response
     */
    public function show(pPlant $pPlant)
    {
        return $pPlant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pPlant  $pPlant
     * @return \Illuminate\Http\Response
     */
    public function edit(pPlant $pPlant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pPlant  $pPlant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pPlant $pPlant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pPlant  $pPlant
     * @return \Illuminate\Http\Response
     */
    public function destroy(pPlant $pPlant)
    {
        //
    }
}
