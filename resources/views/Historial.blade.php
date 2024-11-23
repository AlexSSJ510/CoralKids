<!DOCTYPE html>
<html lang="es">
<head>
    @foreach ($pacientes as $paciente )
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial Clínico de {{ $paciente->nombre }}</title>
    <link rel="stylesheet" href="{{ asset('css/hist.css') }}">
</head>
<body>
    <div class="header">
        <a href="{{ route('home') }}" class="btn-salir">Salir</a>
    </div>
    <h1>Historial Clínico de {{ $paciente->nombre }} {{ $paciente->apellido }}</h1>

    @forelse ($historiales as $historial)
    <table>
        <tr class="section-title">
            <td colspan="4">IDENTIFICACIÓN:</td>
        </tr>
        <tr>
            <td>Fecha y hora:</td>
            <td>{{ $historial->fecha }}</td>
            <td>DNI:</td>
            <td>{{ $paciente->id }}</td>
        </tr>
        <tr>
            <td>Nombre del paciente:</td>
            <td>{{ $paciente->nombre }}</td>
            <td>Apellido del paciente:</td>
            <td>{{ $paciente->apellido }}</td>
        </tr>
        <tr>
            <td>Género:</td>
            <td>{{ $paciente->genero }}</td>
            <td>Tipo de sangre:</td>
            <td>{{ $paciente->tipo_sangre }}</td>
        </tr>
        <tr>
            <td>Fecha de Nacimiento:</td>
            <td>{{ $paciente->fecha_nacimiento }}</td>
            <td>Edad:</td>
            <td>{{ $paciente->edad }}</td>
        </tr>
        <tr>
            <td>Residencia:</td>
            <td>{{ $paciente->direccion }}</td>
            <td>Numero de Telefono actual:</td>
            <td>{{ $paciente->telefono }}</td>
        </tr>

        <tr class="section-title">
            <td colspan="4">HISTORIAL MÉDICO #{{ $loop->iteration }}</td>
        </tr>
        <tr>
            <td>Fecha y hora:</td>
            <td>{{ $historial->fecha }}</td>
            <td>Diagnóstico:</td>
            <td>{{ $historial->diagnostico }}</td>
        </tr>
        <tr>
            <td>Tratamiento:</td>
            <td colspan="3">{{ $historial->tratamiento }}</td>
        </tr>
        <tr>
            <td>Observaciones:</td>
            <td colspan="3">{{ $historial->observaciones }}</td>
        </tr>
        
        <tr class="section-title">
            <td colspan="4">MOTIVO DE CONSULTA:</td>
        </tr>
        <tr>
            <td colspan="4">{{ $paciente->motivo_consulta }}</td>
        </tr>

        <tr class="section-title">
            <td colspan="4">ENFERMEDAD ACTUAL:</td>
        </tr>
        <tr>
            <td colspan="4">{{ $paciente->enfermedad_actual }}</td>
        </tr>
    </table>
    @endforeach
 
    @empty
        <p>No se encontraron historiales médicos para este paciente.</p>
    @endforelse


</body>
</html>
