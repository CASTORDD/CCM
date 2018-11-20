	{{ Form::hidden('user_id', auth()->user()->id )}}
	<span class="section">Inforamcion Personal</span>
	<div class="item form-group">
		{{ Form::label('name', 'Nombre *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'class' => 'form-control col-md-7 col-xs-12', 'data-validate-length-range' => '6', 'data-validate-words' => '1', 'required'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('surname', 'Apellido *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('surname', null, ['class' => 'form-control', 'id' => 'surname'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('gender', 'Genero *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::select('gender', ['seleccione una opción', 'femenino', 'masculino'], null, ['class' => 'form-control', 'id' => 'gender'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('birthday', 'Nacimiento *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::date('birthday', null, ['class' => 'form-control', 'id' => 'birthday'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('blood', 'Tipo sanguineo *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::select('blood', ['Seleccione una opción','A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'], null, ['class' => 'form-control', 'id' => 'blood'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('identification', 'Identification *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('identification', null, ['class' => 'form-control', 'id' => 'identification'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('email', 'Email *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('telephone', 'Telefono 1 *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('telephone', null, ['class' => 'form-control', 'id' => 'telephone'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('telephone2', 'Telefono 2 *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('telephone2', null, ['class' => 'form-control', 'id' => 'telephone2'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('address', 'Dirección *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('ocupation', 'Ocupación *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('ocupation', null, ['class' => 'form-control', 'id' => 'ocupation'] )}}			
		</div>
	</div>
	<br>
	<span class="section">Inforamción de Responsable</span>
	<div class="item form-group">
		{{ Form::label('relative', 'Nombre *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('relative', null, ['class' => 'form-control', 'id' => 'relative'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('relative_phone', 'Telefono *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('relative_phone', null, ['class' => 'form-control', 'id' => 'relative_phone'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('relative_email', 'Email *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::text('relative_email', null, ['class' => 'form-control', 'id' => 'relative_email'] )}}			
		</div>
	</div>
	<br>
	<span class="section">Alergias</span>
	<div class="item form-group">
		<div class="col-md-12">
			@foreach($alergies as $alergy)
				<div class="col-md-3">
					{{ Form::checkbox('alergies[]', $alergy->id, null, ['id' => $alergy->id ])}}
					<label for="{{ $alergy->id }}">
						{{ $alergy->name}}
					</label>
				</div>
			@endforeach
		</div>		
	</div>
	<br>
	<span class="section">Historial Médico</span>
	<div class="item form-group">
		{{ Form::label('ant_personal', 'Ant. Personales *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::textarea('ant_personal', null, ['class' => 'form-control  col-md-7 col-xs-12', 'id' => 'ant_personal', 'rows' => '3'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('ant_family', 'Ant. Familiares *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::textarea('ant_family', null, ['class' => 'form-control  col-md-7 col-xs-12', 'id' => 'ant_family', 'rows' => '3'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('vacunas', 'Vacunas *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::textarea('vacunas', null, ['class' => 'form-control  col-md-7 col-xs-12', 'id' => 'vacunas', 'rows' => '3'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('tratamiento', 'Tratamiento *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::textarea('tratamiento', null, ['class' => 'form-control  col-md-7 col-xs-12', 'id' => 'tratamiento', 'rows' => '3'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('cirugias', 'Cirugias *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::textarea('cirugias', null, ['class' => 'form-control  col-md-7 col-xs-12', 'id' => 'cirugias', 'rows' => '3'] )}}			
		</div>
	</div>
	<div class="item form-group">
		{{ Form::label('enf_cronics', 'Enf. cronicas *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
		<div class="col-md-6 col-sm-6 col-xs-12">
			{{ Form::textarea('enf_cronics', null, ['class' => 'form-control  col-md-7 col-xs-12', 'id' => 'enf_cronics', 'rows' => '3'] )}}			
		</div>
	</div>
	<div class="ln_solid"></div>
	<div class="item form-group">
		{{ Form::submit('Registrar', ['class' => 'btn btn-success pull-right'])}}
	</div>