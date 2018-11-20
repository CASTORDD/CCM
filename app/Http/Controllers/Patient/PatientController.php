<?php

namespace App\Http\Controllers\Patient;

use App\Alergy;
use App\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\PatientStoreRequest;
use App\Http\Requests\PatientUpdateRequest;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::orderBy('id', 'ASC')->paginate(15);

        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $alergies = Alergy::orderBy('name', 'DESC')->get();
        return view('patient.create', compact('alergies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientStoreRequest $request)
    {
        $patient = Patient::create($request->all());

        // Alergies
        $patient->alergies()->attach($request->get('alergies'));

        return redirect()->route('paciente.edit', $patient->id)
                ->with('info', 'Paciente registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $appointments = Appointment::where('patient_id', $id)->get();
        $patient = Patient::find($id);
        

        return view('patient.show', compact('patient', 'appointments'));
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
        $alergies = Alergy::OrderBy('name', 'ASC')->get();

        return view('patient.edit', compact('patient', 'alergies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientUpdateRequest $request, $id)
    {
        $patient = Patient::find($id);

        $user->fill($request->all())->save();

        // Alergies
        $patient->alergies()->sync($request->get('alergies'));

        return redirect()->route('patient.edit', $patient->id)
                ->with('info', 'Paciente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id)->delete();

        return back()->whit('info', 'Paciente eliminado orrectamente');
    }
}
