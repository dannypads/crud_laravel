@extends('layout.main')
@section('content')
<h3>Mostrar  candidato</h3>

<table class="table table-striped">
    <tr>
        <th>Nombre</th>
        <td>{{ $candidato->nombre }}</td>
    </tr>
    <tr>
        <th>Apellido</th>
        <td>{{ $candidato->apellido }}</td>
    </tr>
</table>


@stop