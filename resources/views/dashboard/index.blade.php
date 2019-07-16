@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard</h2>
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-user"></i></div>
              <div class="count">{{ $patients }}</div>
              <h3>Pacientes</h3>
              <p><a href="/pacientes">Ver pacientes</a></p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-calendar"></i></div>
              <div class="count">{{ $appointments }}</div>
              <h3>Citas</h3>
              <p><a href="/citas">Ver citas</a></p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-user-md"></i></div>
              <div class="count">{{ $doctors }}</div>
              <h3>Medicos</h3>
              <p><a href="/medicos">Ver medicos</a></p>
            </div>
        </div>
    </div>
</div>
@endsection