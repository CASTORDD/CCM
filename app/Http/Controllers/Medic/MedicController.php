<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class MedicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medics = User::where('activity', 'MEDIC')->orderBy('name', 'ASC')->get();

        return view('medic.index', compact('medics'));
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
}
