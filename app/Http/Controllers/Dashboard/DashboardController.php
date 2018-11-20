<?php

namespace App\Http\Controllers\Dashboard;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\Patient;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $patients = Patient::count();
        $appointments = Appointment::count();
        $doctors = User::where('activity', 'MEDIC')->count();

        return view('dashboard.index', compact('patients', 'appointments', 'doctors'));
    }
}
