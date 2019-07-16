@extends('layouts.app')

@section('content')
	
@foreach($medics as $medic)
<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
	<div class="x_panel fixed_height_320">
    <div class="profile_img">
      <div id="crop-avatar">
        <!-- Current avatar -->
        <img class="img-responsive avatar-view" src="{{ URL::asset('images/'.$medic->image)}}" alt="Avatar" title="Change the avatar">
      </div>
    </div>
    <h3>{{ $medic->name }} {{ $medic->surname }}</h3>

    <ul class="list-unstyled user_data">
      <li>
        <i class="fa fa-phone"></i> {{ $medic->telephone }}
      </li>
      <li class="m-top-xs">
        <i class="fa fa-envelope"></i> {{ $medic->email }}
      </li>
    </ul>
	</div>
</div>
@endforeach
  
@endsection