<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Data_healthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_healths = \sesm\Data_health::all();
        return view('data_health.index', compact('data_healths'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_health.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_health = new \sesm\Data_health;
        $data_health->weight = $request->input('data_health_weight');
        $data_health->height = $request->input('data_health_height');
        $data_health->use_medication = $request->input('data_health_use_medication');
        $data_health->kid_id = '1'; //$request->input('data_health_kid_id');
        $data_health->save();
        return redirect()->route('inicial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data_health = \sesm\Data_health::findOrFail($id);
        
        $data_health = \sesm\Data_health::where('kid_id', '=', $id)->first();
        return view('data_health.show', compact('data_health'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_health = \sesm\Data_health::findOrFail($id);
        return view('data_health.edit', compact('data_health'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data_health = \sesm\Data_health::findOrFail($id);

        $data_health->weight = $request->input('data_health_weight');
        $data_health->height = $request->input('data_health_height');
        $data_health->use_medication = $request->input('data_health_use_medication');
        // $data_health->kid_id = '1'; //$request->input('data_health_kid_id');
        $data_health->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $data_health->kid_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
