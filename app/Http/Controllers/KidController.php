<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kids = \sesm\Kid::all();
        return view('kid.index', compact('kids'));
    }
    public function index2()
    {
        $kids = \sesm\Kid::all();
        return view('kid.index', compact('kids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kid = new \sesm\Kid;
        $documentation = new \sesm\Documentation;
        $ticket_host = new \sesm\Ticket_host;
        $data_health = new \sesm\Data_health;
        $pro_ins_host = new \sesm\Pro_ins_host;
        $edu_sit_previou = new \sesm\Edu_sit_previou;
        $edu_sit_current = new \sesm\Edu_sit_current;
        $information_family = new \sesm\Information_family;
        $network = new \sesm\Network;
        $family_extended = new \sesm\Family_extended;
        $family_origin = new \sesm\Family_origin;
        $evaluation = new \sesm\Evaluation;
        $information_brother = new \sesm\Information_brother;
        $kid->name = $request->input('kid_name');
        $kid->sex = $request->input('kid_sex');
        $kid->birthday = $request->input('kid_birthday');
        $kid->mother_name = $request->input('kid_mother');
        $kid->father_name = $request->input('kid_father');
        $kid->last_adress = $request->input('kid_adress');
        $kid->nacionality = $request->input('kid_nacionality');
        $kid->naturalness = $request->input('kid_naturalness');
        $kid->ethnicity = $request->input('kid_ethnicity');
        $kid->religion = $request->input('kid_religion');
        $kid->deficiency = $request->input('kid_deficiency');
        $kid->deficiency_desc = $request->input('kid_def_desc');
        $kid->special_necessity = $request->input('kid_necessity');
        $kid->save();
        $documentation->kid_id=$kid->id;
        $documentation->save();
        $ticket_host->kid_id=$kid->id;
        $ticket_host->save();
        $data_health->kid_id=$kid->id;
        $data_health->save();
        $pro_ins_host->kid_id=$kid->id;
        $pro_ins_host->save();
        $edu_sit_previou->kid_id=$kid->id;
        $edu_sit_previou->save();
        $edu_sit_current->kid_id=$kid->id;
        $edu_sit_current->save();
        $information_family->kid_id=$kid->id;
        $information_family->save();
        $family_extended->kid_id=$kid->id;
        $family_extended->save();
        $family_origin->kid_id=$kid->id;
        $family_origin->save();
        $network->kid_id=$kid->id;
        $network->save();
        $evaluation->kid_id=$kid->id;
        $evaluation->save();
        $information_brother->kid_id=$kid->id;
        $information_brother->save();
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
        $kid = \sesm\Kid::findOrFail($id);
        return view('kid.show', compact('kid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kid = \sesm\Kid::findOrFail($id);
        return view('kid.edit', compact('kid'));
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
        $kid = \sesm\Kid::findOrFail($id);

        $kid->name = $request->input('kid_name');
        $kid->sex = $request->input('kid_sex');
        $kid->birthday = $request->input('kid_birthday');
        $kid->mother_name = $request->input('kid_mother');
        $kid->father_name = $request->input('kid_father');
        $kid->last_adress = $request->input('kid_adress');
        $kid->nacionality = $request->input('kid_nacionality');
        $kid->naturalness = $request->input('kid_naturalness');
        $kid->ethnicity = $request->input('kid_ethnicity');
        $kid->religion = $request->input('kid_religion');
        $kid->deficiency = $request->input('kid_deficiency');
        $kid->deficiency_desc = $request->input('kid_def_desc');
        $kid->special_necessity = $request->input('kid_necessity');
        $kid->save();
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
