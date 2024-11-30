<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial Clínico de {{ $paciente->nombre ?? 'Paciente' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Historial Clínico de {{ $paciente->nombre }} {{ $paciente->apellido }}</h1>
                <a href="{{ route('home') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold text-lg py-3 px-10 rounded-full shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    Salir
                </a>
        </div>

    @forelse ($historiales as $historial)
        <div class="bg-white shadow rounded-lg p-6 mb-6">
            <h2 class="text-lg font-semibold mb-4 text-gray-700">Identificación</h2>
            <table class="table-auto w-full text-sm text-left border-collapse border border-gray-200">
                <tbody>
                    <tr>
                        <td class="font-medium border border-gray-200 px-4 py-2">Fecha y hora:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $historial->fecha }}</td>
                        <td class="font-medium border border-gray-200 px-4 py-2">DNI:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $paciente->id }}</td>
                    </tr>
                    <tr>
                        <td class="font-medium border border-gray-200 px-4 py-2">Nombre:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $paciente->nombre }}</td>
                        <td class="font-medium border border-gray-200 px-4 py-2">Apellido:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $paciente->apellido }}</td>
                    </tr>
                    <tr>
                        <td class="font-medium border border-gray-200 px-4 py-2">Género:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $paciente->genero }}</td>
                        <td class="font-medium border border-gray-200 px-4 py-2">Tipo de sangre:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $paciente->tipo_sangre }}</td>
                    </tr>
                    <tr>
                        <td class="font-medium border border-gray-200 px-4 py-2">Fecha de Nacimiento:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $paciente->fecha_nacimiento }}</td>
                        <td class="font-medium border border-gray-200 px-4 py-2">Edad:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $paciente->edad }}</td>
                    </tr>
                    <tr>
                        <td class="font-medium border border-gray-200 px-4 py-2">Residencia:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $paciente->direccion }}</td>
                        <td class="font-medium border border-gray-200 px-4 py-2">Teléfono:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $paciente->telefono }}</td>
                    </tr>
                </tbody>
            </table>

            <h2 class="text-lg font-semibold mt-6 mb-4 text-gray-700">Historial Médico #{{ $loop->iteration }}</h2>
            <table class="table-auto w-full text-sm text-left border-collapse border border-gray-200">
                <tbody>
                    <tr>
                        <td class="font-medium border border-gray-200 px-4 py-2">Diagnóstico:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $historial->diagnostico }}</td>
                    </tr>
                    <tr>
                        <td class="font-medium border border-gray-200 px-4 py-2">Tratamiento:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $historial->tratamiento }}</td>
                    </tr>
                    <tr>
                        <td class="font-medium border border-gray-200 px-4 py-2">Observaciones:</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $historial->observaciones }}</td>
                    </tr>
                </tbody>
            </table>

            <h2 class="text-lg font-semibold mt-6 mb-4 text-gray-700">Motivo de Consulta</h2>
            <p class="text-sm bg-gray-100 p-4 rounded-md">{{ $historial->motivo_consulta }}</p>

            <h2 class="text-lg font-semibold mt-6 mb-4 text-gray-700">Enfermedad Actual</h2>
            <p class="text-sm bg-gray-100 p-4 rounded-md">{{ $historial->enfermedad_actual }}</p>
        </div>
    @empty
    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
        <p class="font-bold">Sin Historiales</p>
        <p>No se encontraron historiales médicos para este paciente.</p>
    </div>
    @endforelse
</body>
</html>
