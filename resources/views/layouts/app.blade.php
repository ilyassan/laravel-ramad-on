<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>Ramadan 2025 - {{ $title }}</title>

        <!-- Fonts -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Navbar -->
            <nav class="bg-white shadow-md fixed w-full z-10">
                <div class="container mx-auto px-4 md:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <a href="#" class="flex-shrink-0 flex items-center">
                                <span class="ml-2 text-xl font-semibold text-purple-800">Ramadan 2025</span>
                            </a>
                        </div>
                        <div class="hidden md:flex md:items-center md:space-x-6">
                            <a href="#experiences" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium">Expériences</a>
                            <a href="#recettes" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium">Recettes</a>
                            <a href="#statistiques" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium">Statistiques</a>
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Connexion</button>
                            <button class="bg-purple-100 text-purple-700 hover:bg-purple-200 px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Inscription</button>
                        </div>
                        <div class="flex md:hidden items-center">
                            <button type="button" class="text-gray-700 hover:text-purple-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                {{$slot}}
            </main>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white pt-12 pb-6">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-10">
                    <div>
                        <h4 class="text-lg font-semibold mb-4">À propos</h4>
                        <p class="text-gray-400">Notre plateforme rassemble la communauté pour partager des expériences inspirantes et des recettes pendant le Ramadan 2025.</p>
                        <div class="flex mt-4 space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Liens rapides</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Accueil</a></li>
                            <li><a href="#experiences" class="text-gray-400 hover:text-white transition-colors duration-200">Expériences</a></li>
                            <li><a href="#recettes" class="text-gray-400 hover:text-white transition-colors duration-200">Recettes</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Se connecter</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">S'inscrire</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Catégories</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Témoignages spirituels</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Recettes Iftar</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Recettes Suhoor</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Conseils de jeûne</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Activités familiales</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Contact</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li class="flex items-start">
                                <i class="fas fa-envelope mt-1 mr-3"></i>
                                <span>contact@ramadan2025.com</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-phone-alt mt-1 mr-3"></i>
                                <span>+212 5XX XX XX XX</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h5 class="text-sm font-semibold mb-2">Restez informé</h5>
                            <form class="flex">
                                <input type="email" placeholder="Votre email" class="px-3 py-2 bg-gray-800 text-gray-200 rounded-l-md focus:outline-none focus:ring-1 focus:ring-purple-500 w-full" required>
                                <button type="submit" class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-r-md transition duration-150 ease-in-out">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-6 mt-6">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-400 text-sm">© 2025 Ramadan Platform. Tous droits réservés.</p>
                        <div class="flex space-x-4 mt-4 md:mt-0">
                            <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-200">Politique de confidentialité</a>
                            <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-200">Conditions d'utilisation</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Include SweetAlert2 only once -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if (isset($error))
            <script>
                let message = "{{ $error }}";
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: message
                });
            </script>
        @endif

        @if (isset($success))
            <script>
                let message = "{{ $success }}";
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: message
                });
            </script>
        @endif

        @if (isset($warning))
            <script>
                let message = "{{ $warning }}";
                Swal.fire({
                    icon: "warning",
                    title: "Warning",
                    text: message
                });
            </script>
        @endif


        
    </body>
</html>