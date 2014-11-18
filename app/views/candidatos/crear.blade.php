@extends('layout.main')
@section('content')
<h3>Creacion de candidatos</h3>

{{ Form::open(array('route' => 'candidato.store')) }}
{{ Form::text('nombre') }}
{{ Form::text('apellido') }}
{{ Form::submit() }}
{{ Form::close() }}


@stop