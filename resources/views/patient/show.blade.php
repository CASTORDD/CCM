@extends('layouts.app')

@section('content')
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
      	<div class="x_panel">
      		<div class="x_title">
        		<h3>Registro del paciente</h3>
            <div class="clearfix"></div>
        	</div>
        	<div class="x_content">
          	<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
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
                    <i class="fa fa-credit-card"></i>
                    {{ $patient->identification }}
                  </li>
                  <li>
                    <i class="fa fa-envelope-o"></i>
                    {{ $patient->email }}
                  </li>
                  <li>
                    <i class="fa fa-phone"></i>
                    {{ $patient->telephone }} | {{ $patient->telephone2 }}
                  </li>
                  <li>
                    <i class="fa fa-map-marker user-profile-icon"></i>
                    {{ $patient->address }}
                  </li>
                  <li>
                    <i class="fa fa-briefcase"></i> 
                    {{ $patient->ocupation }}
                  </li>
                </ul>

                <a class="btn btn-success">
                  <i class="fa fa-edit m-right-xs"></i>Edit Profile
                </a>
                
                <ul class="list-unstyled msg_list">
                  <li>
                    <a>
                      <span class="image">
                        <i class="fa fa-envelope-o"></i>
                      </span>
                      <span>
                        <span>{{ $patient->relative }}</span>
                        <span class="time">{{ $patient->relative_phone }}</span>
                      </span>
                      <span class="message">
                        {{ $patient->relative_email }}
                      </span>
                    </a>
                  </li>
                </ul>

                <br>

            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Historial Clinico</a>
                  </li>
                  <li role="presentation" class="">
                    <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Citas</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                    <!-- start recent activity -->
                    <ul class="messages">
                      <li>
                        <div class="message_wrapper">
                          <h4 class="heading">Antecedentes Personales</h4>
                          <p>
                            {{ $patient->ant_personal }}
                          </p>
                        </div>
                        <br>
                      </li>
                      <li>
                        <div class="message_wrapper">
                          <h4 class="heading">Antecedentes Familiares</h4>
                          <p>
                            {{ $patient->ant_family }}
                          </p>
                        </div>
                        <br>
                      </li>
                      <li>
                        <div class="message_wrapper">
                          <h4 class="heading">Vacunas</h4>
                          <p>
                            {{ $patient->vacunas }}
                          </p>
                        </div>
                        <br>
                      </li>
                      <li>
                        <div class="message_wrapper">
                          <h4 class="heading">Tratamientos</h4>
                          <p>
                            {{ $patient->tratamiento }}
                          </p>
                        </div>
                        <br>
                      </li>
                      <li>
                        <div class="message_wrapper">
                          <h4 class="heading">Cirugias</h4>
                          <p>
                            {{ $patient->cirugias }}
                          </p>
                        </div>
                        <br>
                      </li>
                      <li>
                        <div class="message_wrapper">
                          <h4 class="heading">Enfermedades cronicas</h4>
                          <p>
                            {{ $patient->enf_cronics }}
                          </p>
                        </div>
                        <br>
                      </li>
                    </ul>
                    <!-- end recent activity -->

                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                    <!-- start user projects -->
                    <table class="data table table-hover no-margin">
                      <thead>
                        <tr>
                          <th>Fecha</th>
                          <th>Medico</th>
                          <th>Motivo</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($appointments as $appointment)
                        <tr>
                          <td>{{ $appointment->date }}</td>
                          <td>{{ $appointment->doctor }}</td>
                          <td>{{ $appointment->reason }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- end user projects -->

                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                      photo booth letterpress, commodo enim craft beer mlkshk </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection