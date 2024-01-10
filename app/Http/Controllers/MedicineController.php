<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = \sesm\Medicine::all();
        return view('medicine.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicine = new \sesm\Medicine;
        $medicine->doctor = $request->input('medicine_doctor');
        $medicine->name = $request->input('medicine_name');
        $medicine->dosage = $request->input('medicine_dosage');
        $medicine->administration = $request->input('medicine_administration');
        $medicine->period = $request->input('medicine_period');
        $medicine->data_health_id = $request->input('medicine_data_health_id');
        $medicine->save();
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
        // $medicine = \sesm\Medicine::findOrFail($id);
        
        $medicine = \sesm\Medicine::where('data_health_id', '=', $id)->first();
        return view('medicine.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = \sesm\Medicine::findOrFail($id);
        return view('medicine.edit', compact('medicine'));
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
         $medicine = \sesm\Medicine::findOrFail($id);

        $medicine->doctor = $request->input('medicine_doctor');
        $medicine->name = $request->input('medicine_name');
        $medicine->dosage = $request->input('medicine_dosage');
        $medicine->administration = $request->input('medicine_administration');
        $medicine->period = $request->input('medicine_period');
        // $medicine->data_health_id = '1'; //$request->input('medicine_data_health_id');
        $medicine->save();
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
        
    }
}
