<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>CONSULTORIO PEDIATRICO "CORAL KIDS"</h1>
                    <p>Programa tu consulta.</p>
                    <a href="{{ route('reservar') }}" class="button">Reservar</a>
                    <p>O llámanos al <strong>994 113 202</strong></p>
                </div>             
                <div class="image-content">
                    <img src="doctor-virtual.jpg" alt="Consulta Virtual">
                </div>
            </div>
        </div>
    </div>

    <section class="beneficios-section" id="beneficios">
        <h1>NUESTROS BENEFICIOS</h1>
        <div class="beneficios-container">
            <div class="beneficio">
                <img src="img\Productos.png" alt="Productos">
                <p>Productos para recien nacidos</p>
            </div>
            <div class="beneficio">
                <img src="img\examendiagnos.png" alt="Exámenes Diagnóstico">
                <p>Exámenes de diagnóstico para niños</p>
            </div>
            <div class="beneficio">
                <img src="img\atencioncliente.png" alt="Atención al Cliente">
                <p>Atención al cliente</p>
            </div>
        </div>
        <div class="info-text">
            <p>Informacion sobre los productos</p>
        </div>
    </section>

</x-app-layout>
