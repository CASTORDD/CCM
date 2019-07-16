@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/them/fullcalendar.min.css') }}">
@endsection

@section('content')
	<div class="row">
	  <div class="col-md-9">
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Citas</h2>
	        <div class="clearfix"></div>
	      </div>
	      <div class="x_content">

	        <div id='calendar2'></div>

	      </div>
	    </div>
	  </div>
	  <div class="col-md-3">
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Medicos</h2>
	        <div class="clearfix"></div>
	      </div>
	      <div class="x_content">
			<ul class="medics">
				@foreach($medics as $medic)
				<li class="{{ request()->is('citas/medic/'.$medic->id) ? 'active' : '' }}">
					<a href="/citas/medic/{{ $medic->id }}">
						<img src="{{ URL::asset('images/'.$medic->image)}}">
						<span>{{ $medic->surname}}</span>
					</a>
				</li>
				@endforeach
			</ul>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- calendar modal -->
	<div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        <h4 class="modal-title" id="myModalLabel">Registrar Consulta</h4>
	      </div>
	      <div class="modal-body">
	        <div id="testmodal" style="padding: 5px 20px;">
	      		<div class="form-group">
			    	<input type="text" name="patient_ident" id="patient_ident" class="form-control input-lg" placeholder="Ingrese el numero de documento" />
			    	<ul id="patientList">
			    	</ul>
			   	</div>
	          <form id="antoform" action="/cita/create" method="post" class="form-horizontal calender" role="form">
	          	{{ csrf_field() }}
	          	<input type="text" hidden name="user_id" value="{{ auth()->user()->id }}">
	            <div class="form-group">
	              <label class="col-sm-3 control-label">Nombre</label>
	              <div class="col-sm-9">
	                <input type="text" class="form-control" id="title" name="title">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="col-sm-3 control-label">ID</label>
	              <div class="col-sm-9">
	                <input type="text" class="form-control" id="patient_id" name="patient_id">
	              </div>
	            </div>
	            <div class="form-group hidden">
	              <label class="col-sm-3 control-label">Medico</label>
	              <div class="col-sm-9">
	                <input type="text" class="form-control" readonly id="doctor" name="doctor">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="col-sm-3 control-label">Fecha</label>
	              <div class="col-sm-9">
	                <input type="text" readonly class="form-control" id="date" name="date">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="col-sm-3 control-label">Hora</label>
	              <div class="col-sm-9">
	                <input type="time" class="form-control" id="hour" name="hour">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="col-sm-3 control-label">Motivo</label>
	              <div class="col-sm-9">
	              	<select class="form-control" id="reason" name="reason">
	              		<option value="0">Eslija una opción</option>
	              		<option value="1">Chequeo</option>
	              		<option value="2">Control</option>
	              		<option value="3">Malestar</option>
	              		<option value="4">Colegio</option>
	              		<option value="5">Trabajo</option>
	              	</select>
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="col-sm-3 control-label">Plan</label>
	              <div class="col-sm-9">
	                <select class="form-control" id="plan" name="plan">
	              		<option value="0">Eslija una opción</option>
	              		<option value="1">Amil</option>
	              		<option value="2">Bradesco</option>
	              		<option value="3">Unimed</option>
	              	</select>
	              </div>
	            </div>
	            <hr>
	            <div class="form-group">
	        		<button type="submit" class="btn btn-primary pull-right">Registrar</button>
	        	</div>
	            
	          </form>
	        </div>
	      </div>
	      <div class="modal-footer">
	      </div>
	    </div>
	  </div>
	</div>

	<div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
	<!-- /calendar modal -->
@endsection

@section('scripts')
	<script src="{{ URL::asset('js/moment.min.js') }}"></script>
	<script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<script type="text/javascript">
	    $(document).ready(function(){

 			$('#patient_ident').keyup(function(){ 
       			var query = $(this).val();
        		
	        	if(query != '' && query.length >= 3){
	         		var _token = $('input[name="_token"]').val();
	         		$.ajax({
			        	url:"{{ route('autocomplete') }}",
			          	method:"POST",
			          	data:{query:query, _token:_token},
	          			success:function(data){
	           				$('#patientList').fadeIn();  
	                    	
	                    	var html = "",
	                    		info = data;
	                    	
                    		$.each(info, function (index, item) {
							    //console.log(item);
							    html += "<li>";
							    $.each(item, function (index1, item1) {
							    	console.log(item1);

							        html += "<span>" + item1 + " </span>";

							    });
							    html += "</li>";
							});

							$("#patientList").append(html);
	                    	
	                    	//console.log(data);
	          			}
	         		});
	        	}
	    	});

		    $(document).on('click', 'li', function(){  
		        $('#patient_ident').val($(this).text()).fadeOut();
		        $('#patientList').fadeOut();

		        var textInputSplit = document.getElementById('patient_ident').value.split(" ");
		        console.log(textInputSplit);

		        $('#patient_id').val(textInputSplit[0]);
		        $('#title').val(textInputSplit[1] + " " + textInputSplit[2]);
		    });  

		});
</script>
@endsection