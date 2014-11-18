@extends('layout.main')
@section('content')
<h3>Lista de candidatos</h3>

{{ link_to_route('candidato.create', 'Crear', array(), array('class' => 'btn btn-primary')) }}
<br/>
<br/>
<br/>
<table class="table table-striped">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Editar</th>
        <th>Mostrar</th>
        <th>Eliminar</th>
    </tr>
@foreach ($candidatos as $candidato)
<tr>
        <td> {{ $candidato->nombre }}</td>
        <td> {{ $candidato->apellido }}</td>
        <td> {{ link_to_route('candidato.edit', 'Editar', array($candidato->id), array('class' => 'btn btn-warning')) }}</td>
        <td> {{ link_to_route('candidato.show', 'Mostrar', array($candidato->id), array('class' => 'btn btn-warning')) }}</td>

        <td> {{ Form::open(array('method'=> 'DELETE', 'route' =>
            array('candidato.destroy', $candidato->id))) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </td>

</tr>


@endforeach
</table>

@stop