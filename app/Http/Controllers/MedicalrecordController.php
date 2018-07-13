<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Medicalrecord;

class MedicalrecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medrecords=Medicalrecord::all();
        return view('medrecords.view',compact('medrecords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('medrecords.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
          'user'=>'required',
          'record'=>'required'
        ]);
        $medrecord=new Medicalrecord();
        $medrecord->patientid=request('user');
        $medrecord->record=request('record');
        $medrecord->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $medrecord= Medicalrecord::find($id);
        return view('medrecords.view',compact('medrecord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $medrecord=Medicalrecord::find($id);
        return view('medrecords.edit',compact('medrecord'));
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
        //
        $this->validate($request,[
          'record'=>'required'
        ]);
        $medrecord=Medicalrecord::find($id);
        $medrecord->record=request('record');
        $medrecord->save();

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
        $medrecord=Medicalrecord::find($id);
        $medrecord->delete();
    }
}
