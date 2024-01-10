<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Family_extendedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $family_extendeds = \sesm\Family_extended::all();
        return view('family_extended.index', compact('family_extendeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('family_extended.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $family_extended = new \sesm\Family_extended;
        $family_extended->interested_hosting = $request->input('family_extended_interested_hosting');
        $family_extended->who_interested = $request->input('family_extended_who_interested');
        $family_extended->conditions_care = $request->input('family_extended_conditions_care');
        $family_extended->opinion_kid = $request->input('family_extended_opinion_kid');
        $family_extended->kid_id = '1'; //$request->input('family_extended_kid_id');
        $family_extended->save();
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
        // $family_extended = \sesm\Family_extended::findOrFail($id);
        
        $family_extended = \sesm\Family_extended::where('kid_id', '=', $id)->first();
        return view('family_extended.show', compact('family_extended'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $family_extended = \sesm\Family_extended::findOrFail($id);
        return view('family_extended.edit', compact('family_extended'));
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
         $family_extended = \sesm\Family_extended::findOrFail($id);

        $family_extended->interested_hosting = $request->input('family_extended_interested_hosting');
        $family_extended->who_interested = $request->input('family_extended_who_interested');
        $family_extended->conditions_care = $request->input('family_extended_conditions_care');
        $family_extended->opinion_kid = $request->input('family_extended_opinion_kid');
        // $family_extended->kid_id = '1'; //$request->input('family_extended_kid_id');
        $family_extended->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $family_extended->kid_id);
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
