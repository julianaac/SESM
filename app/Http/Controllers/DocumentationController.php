<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentations = \sesm\Documentation::all();
        return view('documentation.index', compact('documentations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documentation = new \sesm\Documentation;
        $documentation->document_admission = $request->input('documentation_document_admission');
        $documentation->certificate_birth = $request->input('documentation_certificate_birth');
        $documentation->number_certificate = $request->input('documentation_number_certificate');
        $documentation->card_vaccination = $request->input('documentation_card_vaccination');
        $documentation->historic_school = $request->input('documentation_historic_school');
        $documentation->studies_reports = $request->input('documentation_studies_reports');
        $documentation->studies_which = $request->input('documentation_studies_which');
        $documentation->other_documents = $request->input('documentation_other_documents');
        $documentation->kid_id = '1'; //$request->input('documentation_kid_id');
        $documentation->save();
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
        // $documentation = \sesm\Documentation::findOrFail($id);
        
        $documentation = \sesm\Documentation::where('kid_id', '=', $id)->first();
        return view('documentation.show', compact('documentation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documentation = \sesm\Documentation::findOrFail($id);
        return view('documentation.edit', compact('documentation'));
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
         $documentation = \sesm\Documentation::findOrFail($id);

        $documentation->document_admission = $request->input('documentation_document_admission');
        $documentation->certificate_birth = $request->input('documentation_certificate_birth');
        $documentation->number_certificate = $request->input('documentation_number_certificate');
        $documentation->card_vaccination = $request->input('documentation_card_vaccination');
        $documentation->historic_school = $request->input('documentation_historic_school');
        $documentation->studies_reports = $request->input('documentation_studies_reports');
        $documentation->studies_which = $request->input('documentation_studies_which');
        $documentation->other_documents = $request->input('documentation_other_documents');
        // $documentation->kid_id = '1'; //$request->input('documentation_kid_id');
        $documentation->save();
        return redirect()->route('pia.show', $documentation->kid_id);
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
