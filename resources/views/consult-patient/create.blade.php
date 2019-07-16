@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-4">
			<div class="x_panel">
				<div class="x_title">
      		<h3>Perfil del paciente</h3>
        	<div class="clearfix"></div>
      	</div>
      	<div class="x_content">
    			<div class="col-md-12 profile_left">
  		      <div class="profile_img">
  		        <div id="crop-avatar">
  		          <!-- Current avatar -->
  		          <img class="img-responsive avatar-view" src="{{ asset('images/picture.jpg')}}" alt="Avatar" title="Change the avatar">
  		        </div>
  		      </div>
  		      <h3>{{ $patient->name }} {{ $patient->surname }}</h3>
  		      <ul class="list-unstyled user_data">
  		        <li>
  		          @if( $patient->gender === 'femenino')
  		            <i class="fa fa-female"></i>
  		          @else 
  		            <i class="fa fa-male"></i>
  		          @endif
  		          {{ $patient->gender }}
  		        </li>
  		        <li>
  		          <i class="fa fa-calendar"></i>
  		          {{ $patient->birthday }}
  		        </li>
  		        <li>
  		          <i class="fa fa-tint"></i>
  		          {{ $patient->blood }}
  		        </li>
  		        <li>
  		          <i class="fa fa-briefcase"></i> 
  		          {{ $patient->ocupation }}
  		        </li>
  		      </ul>      		      
  		      <ul class="list-unstyled msg_list">
  		        <li>
  		          <a>
  		            <span><i class="fa fa-user"></i> {{ $patient->relative }}</span>
  		            <br>
  		            <span><i class="fa fa-phone"></i> {{ $patient->relative_phone }}</span>
  		            <span class="message">
  		              {{ $patient->relative_email }}
  		            </span>
  		          </a>
  		        </li>
  		      </ul>
      		  <br>
      		  <ul class="messages">
      		    <li>
      		      <div>
      		        <h4 class="heading"><b>Antecedentes Personales</b></h4>
      		        <p>
      		          {{ $patient->ant_personal }}
      		        </p>
      		      </div>
      		      <br>
      		    </li>
      		    <li>
      		      <div>
      		        <h4 class="heading"><b>Antecedentes Familiares</b></h4>
      		        <p>
      		          {{ $patient->ant_family }}
      		        </p>
      		      </div>
      		      <br>
      		    </li>
      		    <li>
      		      <div>
      		        <h4 class="heading"><b>Vacunas</b></h4>
      		        <p>
      		          {{ $patient->vacunas }}
      		        </p>
      		      </div>
      		      <br>
      		    </li>
      		    <li>
      		      <div>
      		        <h4 class="heading"><b>Tratamientos</b></h4>
      		        <p>
      		          {{ $patient->tratamiento }}
      		        </p>
      		      </div>
      		      <br>
      		    </li>
      		    <li>
      		      <div>
      		        <h4 class="heading"><b>Cirugias</b></h4>
      		        <p>
      		          {{ $patient->cirugias }}
      		        </p>
      		      </div>
      		      <br>
      		    </li>
      		    <li>
      		      <div>
      		        <h4 class="heading"><b>Enfermedades cronicas</b></h4>
      		        <p>
      		          {{ $patient->enf_cronics }}
      		        </p>
      		      </div>
      		      <br>
      		    </li>
      		  </ul>
  		    </div>
      	</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="x_panel">
				<div class="x_title">
      		<h3>Consulta del paciente</h3>
        	<div class="clearfix"></div>
      	</div>
      	<div class="x_content">
      		{!! Form::open(['route' => 'consultas-pacientes.store', 'class' => 'form-horizontal form-label-left']) !!}
						
						@include('consult-patient.partials.form')

      		{!! Form::close() !!}
      	</div>
      </div>
    </div>
	</div>
@endsection