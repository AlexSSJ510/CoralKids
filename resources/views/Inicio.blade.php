<x-layout>
<section class="relative flex items-center justify-center text-white h-[500px]">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/CoralKids_Img001.jpg');">
        <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-white opacity-80"></div>
    </div>

    <div class="relative z-10 max-w-4xl text-center md:text-left px-6 md:px-12">
        <h2 class="text-[#00197d] text-lg font-semibold">CONSULTORIO PEDIÁTRICO</h2>
        <h1 class="text-4xl font-bold text-[#31a36d]">CORAL KIDS</h1>
        <p class="text-[#00197d] mt-4 text-lg">
            Programa tu consulta en las especialidades pediátricas
        </p>
        <div class="mt-6">
            <a href="{{ route('reservar') }}" class="bg-blue-600 hover:bg-blue-700 text-white text-lg font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-200">
                RESERVAR
            </a>
        </div>
        <p class="mt-6 text-[#2124a1] text-lg">o llámanos al</p>
        <p class="text-[#00197d] font-bold text-xl">999 000 111</p>
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
                    <h3 class="mt-4 text-lg font-semibold text-blue-800">Atención integral pediátrica</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="bg-blue-100 rounded-full p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-4-9-4-9 4 9 4zm0-10l9-4-9-4-9 4 9 4z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-blue-800">Estimulación temprana</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="bg-blue-100 rounded-full p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16s1.5-2 4-2 4 2 4 2 1.5-2 4-2 4 2 4 2m-9-8a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-blue-800">Prevención y educación</h3>
                </div>
            </div>
            <p class="mt-6 text-sm text-gray-700 max-w-lg mx-auto">
                El bienesetar de su niño es lo más importante. Todos los servicios son según prescripción médica.
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
                    Accede a nuestra página web y busca la sección identificada como "Reserva tu cita". Este será tu punto de partida.
                    </p>
                </div>
                <div class="bg-blue-200 rounded-lg p-6 shadow-lg">
                    <div class="w-12 h-12 mx-auto bg-white text-blue-600 rounded-full flex items-center justify-center text-lg font-bold">
                        2
                    </div>
                    <p class="mt-4 text-sm text-blue-900">
                        Completa el formulario de reserva con la información requerida, fecha y motivos, asegurándote de incluir todos los datos necesarios para confirmar tu cita.
                    </p>
                </div>
                <div class="bg-blue-200 rounded-lg p-6 shadow-lg">
                    <div class="w-12 h-12 mx-auto bg-white text-blue-600 rounded-full flex items-center justify-center text-lg font-bold">
                        3
                    </div>
                    <p class="mt-4 text-sm text-blue-900">
                        ¡Y listo! Una vez finalizado el proceso, te enviaremos una confirmación detallada a tu correo electrónico o número de contacto proporcionado.
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

    <section id="especialidades" class="bg-blue-50 py-12">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-900 mb-8">Nuestras Especialidades</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
                <!-- Especialidad: Lactancia Materna -->
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/lactancia.png" alt="Lactancia Materna" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Lactancia Materna</h3>
                    </div>
                </div>
                <!-- Especialidad: Evaluación Pediátrica Especializada -->
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/evaluacion_pediatrica.png" alt="Evaluación Pediátrica Especializada" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Evaluación Pediátrica Especializada</h3>
                    </div>
                </div>
                <!-- Especialidad: Tamizaje de Anemia -->
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/tamizaje_anemia.png" alt="Tamizaje de Anemia" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Tamizaje de Anemia</h3>
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