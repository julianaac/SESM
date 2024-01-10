<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Dat_healthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dat_healths = \sesm\Dat_health::all();
        return view('dat_health.index', compact('dat_healths'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dat_health.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dat_health = new \sesm\Dat_health;
        $documentation = new \sesm\Documentation;

        $dat_health->use_medication = $request->input('dat_health_use_medication');
        $dat_health->weight = $request->input('dat_health_weight');
        $dat_health->height = $request->input('dat_health_height');
        $dat_health->kid_id = '1'; //$request->input('documentation_kid_id');
        $dat_health->save();
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
        $dat_health = \sesm\Dat_health::findOrFail($id);
        return view('dat_health.show', compact('dat_health'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dat_health = \sesm\Dat_health::findOrFail($id);
        return view('dat_health.edit', compact('dat_health'));
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
        $dat_health = \sesm\Dat_health::findOrFail($id);

        $dat_health->use_medication = $request->input('dat_health_use_medication');
        $dat_health->weight = $request->input('dat_health_weight');
        $dat_health->height = $request->input('dat_health_height');
        $dat_health->kid_id = '1'; //$request->input('dat_health_kid_id');
        $dat_health->save();
        return redirect()->route('inicial');
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
