<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Edu_sit_currentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edu_sit_currents = \sesm\Edu_sit_current::all();
        return view('edu_sit_current.index', compact('edu_sit_currents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('edu_sit_current.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $edu_sit_current = new \sesm\Edu_sit_current;

        $edu_sit_current->age_difficulty_learning = $request->input('edu_sit_current_age_difficulty_learning');
        $edu_sit_current->routine_assignment = $request->input('edu_sit_current_routine_assignment');
        $edu_sit_current->matter_interest = $request->input('edu_sit_current_matter_interest');
        $edu_sit_current->matter_difficulty = $request->input('edu_sit_current_matter_difficulty');
        $edu_sit_current->difficulty_learning = $request->input('edu_sit_current_difficulty_learning');
        $edu_sit_current->difficulty_learning_description = $request->input('edu_sit_current_difficulty_learning_description');
        $edu_sit_current->interest_school = $request->input('edu_sit_current_interest_school');
        $edu_sit_current->room_activities = $request->input('edu_sit_current_room_activities');
        $edu_sit_current->development_expected = $request->input('edu_sit_current_development_expected');
        $edu_sit_current->development_expected_description = $request->input('edu_sit_current_development_expected_description');
        $edu_sit_current->interventions_initials = $request->input('edu_sit_current_interventions_initials');
        $edu_sit_current->kid_id = '1'; //$request->input('edu_sit_current_kid_id');
        $edu_sit_current->save();
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
        $edu_sit_current = \sesm\Edu_sit_current::where('kid_id', '=', $id)->first();
        // $edu_sit_current = \sesm\Edu_sit_current::findOrFail($id);
        return view('edu_sit_current.show', compact('edu_sit_current'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edu_sit_current = \sesm\Edu_sit_current::findOrFail($id);
        return view('edu_sit_current.edit', compact('edu_sit_current'));
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
        $edu_sit_current = \sesm\Edu_sit_current::findOrFail($id);

        $edu_sit_current->age_school = $request->input('edu_sit_current_age_school');
        $edu_sit_current->routine_assignment = $request->input('edu_sit_current_routine_assignment');
        $edu_sit_current->matter_interest = $request->input('edu_sit_current_matter_interest');
        $edu_sit_current->matter_difficulty = $request->input('edu_sit_current_matter_difficulty');
        $edu_sit_current->difficulty_learning = $request->input('edu_sit_current_difficulty_learning');
        $edu_sit_current->difficulty_learning_description = $request->input('edu_sit_current_difficulty_learning_description');
        $edu_sit_current->interest_school = $request->input('edu_sit_current_interest_school');
        $edu_sit_current->room_activities = $request->input('edu_sit_current_room_activities');
        $edu_sit_current->development_expected = $request->input('edu_sit_current_development_expected');
        $edu_sit_current->development_expected_description = $request->input('edu_sit_current_development_expected_description');
        $edu_sit_current->interventions_initials = $request->input('edu_sit_current_interventions_initials');
        // $edu_sit_current->kid_id = '1'; //$request->input('edu_sit_current_kid_id');
        $edu_sit_current->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $edu_sit_current->kid_id);
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
