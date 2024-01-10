<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Edu_sit_previouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edu_sit_previous = \sesm\Edu_sit_previou::all();
        return view('edu_sit_previou.index', compact('edu_sit_previous'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('edu_sit_previou.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $edu_sit_previou = new \sesm\Edu_sit_previou;

        $edu_sit_previou->age_school = $request->input('edu_sit_previou_age_school');
        $edu_sit_previou->frequent_school = $request->input('edu_sit_previou_frequent_school');
        $edu_sit_previou->justification = $request->input('edu_sit_previou_justification');
        $edu_sit_previou->life_school = $request->input('edu_sit_previou_life_school');
        $edu_sit_previou->school = $request->input('edu_sit_previou_school');
        $edu_sit_previou->grade = $request->input('edu_sit_previou_grade');
        $edu_sit_previou->shift = $request->input('edu_sit_previou_shift');
        $edu_sit_previou->kid_id = '1'; //$request->input('edu_sit_previou_kid_id');
        $edu_sit_previou->save();
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
        $edu_sit_previou = \sesm\Edu_sit_previou::where('kid_id', '=', $id)->first();
        // $edu_sit_previou = \sesm\Edu_sit_previou::findOrFail($id);
        return view('edu_sit_previou.show', compact('edu_sit_previou'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edu_sit_previou = \sesm\Edu_sit_previou::findOrFail($id);
        return view('edu_sit_previou.edit', compact('edu_sit_previou'));
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
        $edu_sit_previou = \sesm\Edu_sit_previou::findOrFail($id);

        $edu_sit_previou->age_school = $request->input('edu_sit_previou_age_school');
        $edu_sit_previou->frequent_school = $request->input('edu_sit_previou_frequent_school');
        $edu_sit_previou->justification = $request->input('edu_sit_previou_justification');
        $edu_sit_previou->life_school = $request->input('edu_sit_previou_life_school');
        $edu_sit_previou->school = $request->input('edu_sit_previou_school');
        $edu_sit_previou->grade = $request->input('edu_sit_previou_grade');
        $edu_sit_previou->shift = $request->input('edu_sit_previou_shift');
        // $edu_sit_previou->kid_id = '1'; //$request->input('edu_sit_previou_kid_id');
        $edu_sit_previou->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $edu_sit_previou->kid_id);
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
