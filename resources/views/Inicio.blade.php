<x-layout>
<section class="flex flex-col md:flex-row items-center justify-between bg-gray-50 p-6 md:p-12">
    <div class="w-full md:w-1/2 flex justify-center md:justify-start">
        <img src="img\Coral-Kids_img01.jpg" alt="Consultorio Virtual" class="w-3/4 md:w-full rounded-lg shadow-lg">
    </div>

    <div class="w-full md:w-1/2 mt-8 md:mt-0 text-center md:text-left">
        <h2 class="text-blue-600 text-lg font-semibold"> CONSULTORIO PEDIATRICO</h2>
        <h1 class="text-4xl font-bold text-cyan-800"> CORAL KIDS</h1>
        
        <p class="text-blue-600 mt-4"> Programa tu consulta en las especialidades pediatricas</p>
        
        <div class="mt-6">
            <a href="{{ route('reservar') }}" class="bg-blue-600 hover:bg-blue-700 text-white text-lg font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-200">
                RESERVAR
            </a>
        </div>
        
        <p class="mt-6 text-gray-600">o llámanos al</p>
        <p class="text-blue-600 font-bold text-xl">999 000 111</p>
    </div>
</section>

</x-layout>   
    <div class="bg-blue-50 py-10">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-blue-900">NUESTROS BENEFICIOS</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center text-center">
                    <div class="bg-blue-100 rounded-full p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a4 4 0 014-4h7M5 13a2 2 0 100 4h1m10-7h2m-2 4h2m-2 4h2M4 19h16m-3-8H9" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-blue-800">Productos para recien nacidos</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="bg-blue-100 rounded-full p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-4-9-4-9 4 9 4zm0-10l9-4-9-4-9 4 9 4z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-blue-800">Exámenes de apoyo al diagnóstico por imágenes</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="bg-blue-100 rounded-full p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16s1.5-2 4-2 4 2 4 2 1.5-2 4-2 4 2 4 2m-9-8a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-blue-800">Atención de laboratorio</h3>
                </div>
            </div>
            <p class="mt-6 text-sm text-gray-700 max-w-lg mx-auto">
                El envío de medicamentos es según cobertura y los exámenes por imágenes y atención de laboratorio son en sede. Todos los servicios son según prescripción médica.
            </p>
        </div>
    </div>

    <div class="bg-blue-50 py-10">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-blue-900">RESERVA TU CITA</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-blue-200 rounded-lg p-6 shadow-lg">
                    <div class="w-12 h-12 mx-auto bg-white text-blue-600 rounded-full flex items-center justify-center text-lg font-bold">
                        1
                    </div>
                    <p class="mt-4 text-sm text-blue-900">
                        Ingresa a la web y haz clic en "Reserva tu cita".
                    </p>
                </div>
                <div class="bg-blue-200 rounded-lg p-6 shadow-lg">
                    <div class="w-12 h-12 mx-auto bg-white text-blue-600 rounded-full flex items-center justify-center text-lg font-bold">
                        2
                    </div>
                    <p class="mt-4 text-sm text-blue-900">
                        Programa la fecha de tu consulta y en línea.
                    </p>
                </div>
                <div class="bg-blue-200 rounded-lg p-6 shadow-lg">
                    <div class="w-12 h-12 mx-auto bg-white text-blue-600 rounded-full flex items-center justify-center text-lg font-bold">
                        3
                    </div>
                    <p class="mt-4 text-sm text-blue-900">
                        ¡Y listo! Recibiras una confirmación de tu consulta.
                    </p>
                </div>
            </div>
            <div class="mt-8">
                <a href="{{ route('reservar') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg shadow-lg">
                    Reservar Cita
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-12">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Cómo Realizamos la Atención</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Atención Presencial -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Atención Presencial</h3>
                    <p class="mt-4 text-gray-600">
                        Brindamos una atención personalizada en nuestras instalaciones, asegurando el mejor cuidado.
                    </p>
                </div>
                <!-- Soporte Telefónico -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Soporte Telefónico</h3>
                    <p class="mt-4 text-gray-600">
                        Contamos con una línea telefónica exclusiva para resolver tus consultas y brindarte orientación inmediata.
                    </p>
                </div>
                <!-- Atención 24/7 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Atención 24/7</h3>
                    <p class="mt-4 text-gray-600">
                        Estamos disponibles las 24 horas del día, los 7 días de la semana, para urgencias y consultas rápidas.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section id="#especialidades" class="bg-blue-50 py-12">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-900 mb-8">Nuestras Especialidades</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Especialidad: Crecimiento y Desarrollo Especializado -->
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/crecimientoydes.png" alt="Crecimiento y Desarrollo Especializado" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Crecimiento y Desarrollo Especializado</h3>
                    </div>
                </div>
                <!-- Especialidad: Pediatría -->
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/800x200" alt="Pediatría" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Pediatría</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        © 2024 Consultorio Pediátrico Coral Kids - Todos los derechos reservados.
    </footer>

    </body>
    </html>
