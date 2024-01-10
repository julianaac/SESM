<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $evaluations = \sesm\Evaluation::all();
        return view('evaluation.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evaluation = new \sesm\Evaluation;

        $evaluation->interest = $request->input('evaluation_interest');
        $evaluation->modifications = $request->input('evaluation_modifications');
        $evaluation->modifications_wich = $request->input('evaluation_modifications_wich');
        $evaluation->reinsertion = $request->input('evaluation_reinsertion');
        $evaluation->avaliation = $request->input('evaluation_avaliation');
        $evaluation->methodology = $request->input('evaluation_methodology');
        $edu_sit_current->kid_id = '1'; //$request->input('edu_sit_current_kid_id');
        $evaluation->save();
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
        $evaluation = \sesm\Evaluation::where('kid_id', '=', $id)->first();
        // $evaluation = \sesm\Evaluation::findOrFail($id);
        return view('evaluation.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluation = \sesm\Evaluation::findOrFail($id);
        return view('evaluation.edit', compact('evaluation'));
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
        $evaluation = \sesm\Evaluation::findOrFail($id);

        $evaluation->interest = $request->input('evaluation_interest');
        $evaluation->modifications = $request->input('evaluation_modifications');
        $evaluation->modifications_wich = $request->input('evaluation_modifications_wich');
        $evaluation->reinsertion = $request->input('evaluation_reinsertion');
        $evaluation->avaliation = $request->input('evaluation_avaliation');
        $evaluation->methodology = $request->input('evaluation_methodology');
        $evaluation->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $evaluation->kid_id);
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