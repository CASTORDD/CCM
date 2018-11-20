@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
    <div class="x_panel">
  		<div class="x_title">
            <h2>Paciente</h2>
            <div class="clearfix"></div>
      </div>
	  	<div class="x_content">
	    	{!! Form::model( $patient, ['route' => ['pacientes.update', $patient->id], 'method' =>'PUT', 'files' => true, 'class' => 'form-horizontal form-label-left']) !!}
          
          		@include('patient.partials.form')

        		{!! Form::close() !!}
	  	</div>
    </div>
	</div>
</div>
@endsection

@section('scripts')
<script src="{{ URL::asset('js/validator.js') }}"></script>
@endsection