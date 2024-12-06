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
            <p class="text-[#00197d] font-bold text-xl">994 113 201</p>
        </div>
    </section>
</x-layout>   

    <div id="beneficios" class="bg-blue-50 py-10">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-blue-900">NUESTROS BENEFICIOS</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center text-center">
                    <div class="bg-blue-100 rounded-full p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a4 4 0 014-4h7M5 13a2 2 0 100 4h1m10-7h2m-2 4h2m-2 4h2M4 19h16m-3-8H9" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-blue-800">Atención Personalizada</h3>
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
                El bienestar de su niño es lo más importante. Todos los servicios son según prescripción médica.
            </p>
        </div>
    </div>

    <div id="reservar" class="bg-gradient-to-b from-blue-50 to-blue-100 py-16">
        <div class="max-w-5xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-blue-900 tracking-tight uppercase mb-12">
                Reserva tu Cita
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
         
                <div class="bg-white rounded-xl p-8 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    <div class="w-16 h-16 mx-auto bg-blue-600 text-white rounded-full flex items-center justify-center text-xl font-bold shadow-md">
                        1
                    </div>
                    <p class="mt-6 text-base text-gray-700 leading-relaxed">
                        Accede a nuestra página web y busca la sección identificada como "Reserva tu cita". Este será tu punto de partida.
                    </p>
                </div>
                <div class="bg-white rounded-xl p-8 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    <div class="w-16 h-16 mx-auto bg-blue-600 text-white rounded-full flex items-center justify-center text-xl font-bold shadow-md">
                        2
                    </div>
                    <p class="mt-6 text-base text-gray-700 leading-relaxed">
                        Completa el formulario de reserva con la información requerida, fecha y motivos, asegurándote de incluir todos los datos necesarios para confirmar tu cita.
                    </p>
                </div>
                <div class="bg-white rounded-xl p-8 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    <div class="w-16 h-16 mx-auto bg-blue-600 text-white rounded-full flex items-center justify-center text-xl font-bold shadow-md">
                        3
                    </div>
                    <p class="mt-6 text-base text-gray-700 leading-relaxed">
                        ¡Y listo! Una vez finalizado el proceso, te enviaremos una confirmación detallada a tu correo electrónico o número de contacto proporcionado.
                    </p>
                </div>
            </div>
            <div class="mt-12">
                <a href="{{ route('reservar') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold text-lg py-3 px-10 rounded-full shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    Reservar Cita
                </a>
            </div>
        </div>
    </div>

    <div id="atencion" class="bg-gradient-to-b from-gray-50 to-gray-100 py-16">
        <div class="max-w-6xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-12 tracking-tight">
                Cómo Realizamos la Atención
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg transform hover:scale-105 transition duration-300 ease-in-out p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">
                        Atención Presencial
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Brindamos una atención personalizada en nuestras instalaciones, asegurando el mejor cuidado.
                    </p>
                </div>
                <div class="bg-white rounded-xl shadow-lg transform hover:scale-105 transition duration-300 ease-in-out p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">
                        Soporte Telefónico
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Contamos con una línea telefónica exclusiva para resolver tus consultas y brindarte orientación inmediata.
                    </p>
                </div>
                <div class="bg-white rounded-xl shadow-lg transform hover:scale-105 transition duration-300 ease-in-out p-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">
                        Atención de Lunes a Domingo
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Estamos disponibles los 7 días de la semana, con cita previa.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section id="especialidades" class="bg-blue-50 py-12">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-900 mb-8">Nuestras Especialidades</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/Pediatria_CK.png" alt="Pediatría" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Evaluación Pediátrica Especializada e Integral</h3>
                    </div>
                </div>
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/Prob_Desarollo_CK.png" alt="Problemas de Desarrollo" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Atención a Problemas de Desarrollo</h3>
                    </div>
                </div>
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/CRED_CK.png" alt="CRED Especializado" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Consultas CRED Especializado</h3>
                    </div>
                </div>
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/Estimulacion_CK.jpg" alt="Estimulacion Temprana" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Estimulación Temprana</h3>
                    </div>
                </div>
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/Lactancia_CK.png" alt="Lactancia Maaterna" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Asesoría en Lactancia Materna</h3>
                    </div>
                </div>
                <div class="specialty-item bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="img/Anemia_CK.jpg" alt="Tamizaje de Anemia" class="w-full h-48 object-cover">
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