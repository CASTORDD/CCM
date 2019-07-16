<?php

namespace App\Http\Controllers\Appointment;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\Patient;
use App\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medics = User::where('activity', 'MEDIC')->orderBy('surname', 'ASC')->get();
        $appointments = Appointment::orderBy('id', 'DESC')->get();

        return view('appointment.index', compact('medics', 'appointments'));
    }

    public function get_appointments(){

        $appointments = Appointment::orderBy('date', 'DESC')->get();

        return response()->json($appointments);
    }

    public function get_appointments_medic($id){

        $appointments = Appointment::where('doctor', $id)->orderBy('date', 'DESC')->get();

        return response()->json($appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $input['date'] = $input['date'] . " " . $input['hour'];

        Appointment::create($input);

        return  redirect('citas');
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

    public function autocomplete(Request $request)
    {
        if($request->get('query')){
            
            $query = $request->get('query');
            
            $data = Patient::where('identification', 'LIKE', "%{$query}%")
                    ->select('id', 'name', 'surname')->get();
            
            return response()->json($data);
        }
    }
}