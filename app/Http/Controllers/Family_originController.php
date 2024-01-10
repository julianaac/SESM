<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Family_originController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $family_origins = \sesm\Family_origin::all();
        return view('family_origin.index', compact('family_origins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('family_origin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $family_origin = new \sesm\Family_origin;
        $family_origin->mother_name = $request->input('family_origin_mother_name');
        $family_origin->mother_age = $request->input('family_origin_mother_age');
        $family_origin->mother_address = $request->input('family_origin_mother_address');
        $family_origin->mother_phone = $request->input('family_origin_mother_phone');
        $family_origin->mother_cpf = $request->input('family_origin_mother_cpf');
        $family_origin->mother_rg = $request->input('family_origin_mother_rg');
        $family_origin->mother_occupation = $request->input('family_origin_mother_occupation');
        $family_origin->mother_situation = $request->input('family_origin_mother_situation');
        $family_origin->dad_name = $request->input('family_origin_dad_name');
        $family_origin->dad_age = $request->input('family_origin_dad_age');
        $family_origin->dad_address = $request->input('family_origin_dad_address');
        $family_origin->dad_phone = $request->input('family_origin_dad_phone');
        $family_origin->dad_cpf = $request->input('family_origin_dad_cpf');
        $family_origin->dad_rg = $request->input('family_origin_dad_rg');
        $family_origin->dad_occupation = $request->input('family_origin_dad_occupation');
        $family_origin->dad_situation = $request->input('family_origin_dad_situation');
        $family_origin->responsible_name = $request->input('family_origin_responsible_name');
        $family_origin->responsible_age = $request->input('family_origin_responsible_age');
        $family_origin->responsible_address = $request->input('family_origin_responsible_address');
        $family_origin->responsible_phone = $request->input('family_origin_responsible_phone');
        $family_origin->responsible_cpf = $request->input('family_origin_responsible_cpf');
        $family_origin->responsible_rg = $request->input('family_origin_responsible_rg');
        $family_origin->responsible_occupation = $request->input('family_origin_responsible_occupation');
        $family_origin->responsible_bond = $request->input('family_origin_responsible_bond');
        $family_origin->conditions = $request->input('family_origin_conditions');
        $family_origin->kid_id = '1'; //$request->input('family_origin_kid_id');
        $family_origin->save();
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
        // $family_origin = \sesm\Family_origin::findOrFail($id);
        
        $family_origin = \sesm\Family_origin::where('kid_id', '=', $id)->first();
        return view('family_origin.show', compact('family_origin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $family_origin = \sesm\Family_origin::findOrFail($id);
        return view('family_origin.edit', compact('family_origin'));
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
         $family_origin = \sesm\Family_origin::findOrFail($id);

        $family_origin->mother_name = $request->input('family_origin_mother_name');
        $family_origin->mother_age = $request->input('family_origin_mother_age');
        $family_origin->mother_address = $request->input('family_origin_mother_address');
        $family_origin->mother_phone = $request->input('family_origin_mother_phone');
        $family_origin->mother_cpf = $request->input('family_origin_mother_cpf');
        $family_origin->mother_rg = $request->input('family_origin_mother_rg');
        $family_origin->mother_occupation = $request->input('family_origin_mother_occupation');
        $family_origin->mother_situation = $request->input('family_origin_mother_situation');
        $family_origin->dad_name = $request->input('family_origin_dad_name');
        $family_origin->dad_age = $request->input('family_origin_dad_age');
        $family_origin->dad_address = $request->input('family_origin_dad_address');
        $family_origin->dad_phone = $request->input('family_origin_dad_phone');
        $family_origin->dad_cpf = $request->input('family_origin_dad_cpf');
        $family_origin->dad_rg = $request->input('family_origin_dad_rg');
        $family_origin->dad_occupation = $request->input('family_origin_dad_occupation');
        $family_origin->dad_situation = $request->input('family_origin_dad_situation');
        $family_origin->responsible_name = $request->input('family_origin_responsible_name');
        $family_origin->responsible_age = $request->input('family_origin_responsible_age');
        $family_origin->responsible_address = $request->input('family_origin_responsible_address');
        $family_origin->responsible_phone = $request->input('family_origin_responsible_phone');
        $family_origin->responsible_cpf = $request->input('family_origin_responsible_cpf');
        $family_origin->responsible_rg = $request->input('family_origin_responsible_rg');
        $family_origin->responsible_occupation = $request->input('family_origin_responsible_occupation');
        $family_origin->responsible_bond = $request->input('family_origin_responsible_bond');
        $family_origin->conditions = $request->input('family_origin_conditions');
        // $family_origin->kid_id = '1'; //$request->input('family_origin_kid_id');
        $family_origin->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $family_origin->kid_id);
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
