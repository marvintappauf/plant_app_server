<?php

namespace App\Http\Controllers;

use App\Plant;
use App\PlantAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $plants = Plant::all();

	    return response()->json($plants);
    }

    public function all() {
    
    $plants = DB::table('plants')
            ->leftJoin('plant_attribute', 'plant_attribute.plantId', '=', 'plants.id')
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
    public function statusUpdate(Request $request)
    {
        $plantAttribute = PlantAttribute::create($request->all());

        return response()->json([
            'message' => 'Plant updated!',
            'PlantAttributes' => $plantAttribute
        ]);
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

        $plant = Plant::create($request->all());

        return response()->json([
            'message' => 'Great success! New Plant created',
            'Plant' => $plant
        ]);
	}
    /**
     * Display the specified resource.
     *
     * @param  \App\Plant  $Plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $Plant)
    {
        return $Plant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plant  $Plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $Plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plant  $Plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $Plant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plant  $Plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $Plant)
    {
        //
    }
}
