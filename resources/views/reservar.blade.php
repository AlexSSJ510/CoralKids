<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <link rel="stylesheet" href="/css/formReserva.css">
</head>
<body>

<header>
    <h1>Realiza tu Reserva</h1>
</header>

<div class="container">
    <section class="form-section">
        <div class="form-box">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <label for="nombre">Nombre y Apellidos:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ingresa Nombre y Apellidos Completo"><br><br>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Ingresa su correo electrónico"><br><br>
        
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required placeholder="Ingresa su número de teléfono"><br><br>
        
                <label for="fecha">Fecha para Reservar Cita:</label>
                <input type="date" id="fecha" name="fecha" required><br><br>
        
                <label for="especialidad">Especialidad Médica:</label>
                <select id="especialidad" name="especialidad" required>
                    <option value="" disabled selected>Selecciona una especialidad</option>
                    <option value="CRED">Crecimiento y desarrollo (CRED)</option>
                    <option value="Estimulacion">Estimulación Temprana</option>
                    <option value="Lactancia"> Asesoría en Lactancia Materna</option>
                    <option value="Pediatria">Pediatría</option>
                </select><br><br>
        
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required placeholder="Ingresa mensaje si requiere especificar algo"></textarea><br><br>
        
                <button type="submit" value="Enviar"> Enviar</button>
                <button type="button" onclick="window.location.href='{{ url('/') }}'">Cancelar Reserva</button>

            </form>
        </div>
    </section>
</div>

<footer>
    © 2024 Consultorio Pediátrico Coral Kids - Todos los derechos reservados.
</footer>

</body>
</html>
