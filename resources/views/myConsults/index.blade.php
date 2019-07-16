@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/them/daterangepicker.css') }}">
@endsection

@section('content')
<div class="col-md-4 pull-right">
	<fieldset>
    <div class="control-group">
      <div class="controls">
        	<form action="/mis-consultas/{{ auth()->user()->id }}" method="GET">
        <div class="col-md-9 xdisplay_inputx form-group">
	          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	          <input type="text" class="form-control has-feedback-left" name="date" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
	          <span id="inputSuccess2Status4" class="sr-only">(success)</span>
        </div>
        <span class="input-group-btn">	          	
          <button type="submit" class="btn btn-success">
						<i class="fa fa-search"></i>
					</button>
        </span>
          </form>
      </div>
    </div>
  </fieldset>
</div>
<div class="col-md-4">
	<h2>Consultas para el día <strong>{{ $date }}</strong></h2>
	<ul class="consults">
		@if($appointments->count() < 1)
			<div class="alert alert-info" role="alert"> 
				No no se encontraron consultas para la fecha elegida. <strong>{{ $date }}</strong>
			</div>
		@else
			@foreach($appointments as $appointment)
			<li>
				<a class="x_panel" href="/paciente/{{ $appointment->patient_id }}/consulta?appointment_id={{ $appointment->id }}">
					<span>{{ $appointment->date }}</span>
					<h4>{{ $appointment->patient->name }}</h4>
					<p>{{ $appointment->reason }}</p>
				</a>
			</li>
			@endforeach
		@endif
	</ul>
</div>
@endsection

@section('scripts')
	<script src="{{ URL::asset('js/moment.min.js') }}"></script>
	<script src="{{ URL::asset('js/daterangepicker.js') }}"></script>
@endsection