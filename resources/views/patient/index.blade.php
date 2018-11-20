@extends('layouts.app')

@section('content')
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Pacientes</h2>
          <a class="btn btn-primary pull-right" href="{{ route('pacientes.create') }}">Registrar</a>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Identificación</th>
                <th colspan="3"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($patients as $patient)
              <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->surname }}</td>
                <td>{{ $patient->identification }}</td>
                <td width="10px">
                  <a class="btn btn-xs btn-info" href="{{ route('pacientes.show', $patient->id) }}">Perfil</a>
                </td>
                <td width="10px">
                  <a class="btn btn-xs btn-primary" href="{{ route('pacientes.edit', $patient->id) }}">Editar</a>
                </td>
                <td width="10px">
                  <a class="btn btn-xs btn-success"  href="">Consulta</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $patients->render() }}
        </div>
                </div>
              </div>
@endsection