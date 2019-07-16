<input type="hidden" name="patient_id" value="{{ $patient->id }}">
<input type="hidden" name="appointment_id" value="{{ $appointment_id }}">
<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="press_art" id="press_art" placeholder="Presion arterial">
    <span class="fa fa-heart form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-right" name="pulse" id="pulse" placeholder="Pulso">
    <span class="fa fa-tachometer form-control-feedback right" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="rit_res" id="rit_res" placeholder="Ritmo de respiración">
    <span class="fa fa-tachometer form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-right" name="temperatura" id="temperatura" placeholder="Temperatura">
    <span class="fa fa-tachometer form-control-feedback right" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="altura" id="altura" placeholder="Altura">
    <span class="fa fa-signal form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-right" name="peso" id="peso" placeholder="Peso">
    <span class="fa fa-star form-control-feedback right" aria-hidden="true"></span>
</div>
<div class="form-group">
	<label for="analisis" class="control-label col-md-3 col-sm-3 col-xs-12">
		Analisis
		<span class="required">*</span>
	</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
  		<textarea name="analisis" id="analisis" class="form-control" rows="3"></textarea>
	</div>
</div>
<div class="form-group">
	<label for="scout" class="control-label col-md-3 col-sm-3 col-xs-12">
		Scout
		<span class="required">*</span>
	</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
  		<textarea name="scout" id="scout" class="form-control" rows="3"></textarea>
	</div>
</div>
<div class="form-group">
	<label for="diagnostic" class="control-label col-md-3 col-sm-3 col-xs-12">
		Diagnostico
		<span class="required">*</span>
	</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
  		<textarea name="diagnostic" id="diagnostic" class="form-control" rows="3"></textarea>
	</div>
</div>
<div class="form-group">
	<label for="tratamiento" class="control-label col-md-3 col-sm-3 col-xs-12">
		Tratamiento
		<span class="required">*</span>
	</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
  		<textarea name="tratamiento" id="tratamiento" class="form-control" rows="3"></textarea>
	</div>
</div>
<div class="form-group">
	<label for="observations" class="control-label col-md-3 col-sm-3 col-xs-12">
		observations
		<span class="required">*</span>
	</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
  		<textarea name="observations" id="observations" class="form-control" rows="3"></textarea>
	</div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
      <button type="submit" class="btn btn-success pull-right">Enviar</button>
</div>