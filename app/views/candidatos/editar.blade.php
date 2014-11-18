@extends('layout.main')
@section('content')
<h3>Edicion de candidatos</h3>

{{ Form::model($candidato, array('method' => 'PATCH','route' =>array('candidato.update', $candidato->id))) }}
{{ Form::text('nombre',$candidato->nombre) }}
{{ Form::text('apellido',$candidato->apellido) }}
{{ Form::submit() }}
{{ Form::close() }}


@stop