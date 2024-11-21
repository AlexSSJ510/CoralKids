<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="img\LogoCK.jpg" alt="Logo" class="h-14 w-auto">
                    </a>
                </div>

                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-500 font-medium">Home</a>
                    <a href="##beneficios" class="text-gray-700 hover:text-blue-500 font-medium">Beneficios</a>
                    <a href="#atencion" class="text-gray-700 hover:text-blue-500 font-medium">Atencion</a>
                    <a href="#reservar" class="text-gray-700 hover:text-blue-500 font-medium">Reservar</a>
                    <a href="#especialidades" class="text-gray-700 hover:text-blue-500 font-medium">Especialidades</a>
                    <a href="{{ route('historial') }}" class="text-gray-700 hover:text-blue-500 font-medium">Historial</a>
                    <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-500 font-medium">Registrarse</a>
                </div>

                                <!-- Menú de usuario -->
                <div class="relative flex items-center space-x-4">
                    <!-- Botón para mostrar el dropdown -->
                    <button id="userMenuButton" class="flex items-center space-x-2 px-4 py-2 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none">
                        <!-- Nombre del usuario -->
                        <span>USER</span>
                        <!-- Icono del dropdown -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Menú desplegable -->
                    <div id="userDropdownMenu" class="hidden absolute mt-2 w-48 bg-gray-800 text-white rounded-md shadow-lg z-20">
                        <!-- Enlace al perfil -->
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm hover:bg-gray-700">
                            Profile
                        </a>
                        <!-- Divider -->
                        <div class="border-t border-gray-700"></div>
                        <!-- Botón para cerrar sesión -->
                        <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2">
                            @csrf
                            <button type="submit" class="w-full text-left text-sm hover:bg-gray-700">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Script JavaScript para el manejo del menú desplegable -->
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const userMenuButton = document.getElementById('userMenuButton');
                        const userDropdownMenu = document.getElementById('userDropdownMenu');

                        // Función para alternar la visibilidad del menú
                        userMenuButton.addEventListener('click', function () {
                            userDropdownMenu.classList.toggle('hidden');
                        });

                        // Cierra el menú si se hace clic fuera de él
                        document.addEventListener('click', function (event) {
                            const isClickInside = userMenuButton.contains(event.target) || userDropdownMenu.contains(event.target);
                            if (!isClickInside) {
                                userDropdownMenu.classList.add('hidden');
                            }
                        });
                    });
                </script>
    </nav>
</body>
</html>
