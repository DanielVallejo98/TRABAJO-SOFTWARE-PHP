<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {   
        $patients = Patient::all(); 
        return view('patients.index')->with('patients',$patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patients = new Patient();

        $patients->documento = $request->get('documento');
        $patients->nombre = $request->get('nombre');
        $patients->apellido = $request->get('apellido');
        $patients->genero = $request->get('genero');
        $patients->edad = $request->get('edad');
        $patients->eps = $request->get('eps');
        $patients->LDL = $request->get('LDL');
        $patients->HDL = $request->get('HDL');
        $patients->trigliceridos = $request->get('trigliceridos');
        $patients->coltotal = $request->get('coltotal');

        $patients->save();

        return redirect('/patients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        return view('patients.patient')->with('patient',$patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id); 
        return view('patients.edit')->with('patient',$patient);
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
        $patient = Patient::find($id);

        $patient->documento = $request->get('documento');
        $patient->nombre = $request->get('nombre');
        $patient->apellido = $request->get('apellido');
        $patient->genero = $request->get('genero');
        $patient->edad = $request->get('edad');
        $patient->eps = $request->get('eps');
        $patient->LDL = $request->get('LDL');
        $patient->HDL = $request->get('HDL');
        $patient->trigliceridos = $request->get('trigliceridos');
        $patient->coltotal = $request->get('coltotal');

        $patient->save();

        return redirect('/patients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('/patients');

    }
    /**
     * Remove the specified resource from storage.
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     */
    public function cedula(Request $request)
    {
        $cedula=$request->get('documento');
        $patient = Patient::where('documento','=',$cedula)->get();
        if($patient->count()!=0){
            return view('patients.patient')->with('patient',$patient[0]);
            //return $patient;
        }else{
            return redirect('/');
        }
 
        
    }

}
