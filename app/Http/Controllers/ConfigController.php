<?php

namespace App\Http\Controllers;
use App\Config;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $config = Config::all();

	    return response()->json($config);
    }

    public function all() {
    
        $config = Config::all();
		return response()->json($config);

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

        $config = Config::create($request->all());

        return response()->json([
            'message' => 'Great success! New Config created',
            'Config' => $Config
        ]);
	}
    /**
     * Display the specified resource.
     *
     * @param  \App\Config  $Config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $Config)
    {
        return $Config;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Config  $Config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $Config)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Config  $Config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $Config)
    {
        $config = Config::find($Config);
        $config->fill($request->all());

        $config->save();

        return response()->json([
            'message' => 'config updated',
            'Config' => $config
        ]);
    }

    public function get($id) {
    
        $config = Config::find($id);		
        return response()->json($config);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Config  $Config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $Config)
    {
        //
    }
}
