<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Ramadan 2025 - {{ $title }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Navbar -->
            <nav class="bg-white shadow-md fixed w-full z-10">
                <div class="container mx-auto px-4 md:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                                <span class="ml-2 text-xl font-semibold text-purple-800">Ramadan 2025</span>
                            </a>
                        </div>
                        <div class="hidden md:flex md:items-center md:space-x-6">
                            <a href="{{ route('home') }}"
                               class="{{ Request::routeIs('home') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} px-3 py-2 rounded-md text-sm font-medium">
                                Home
                            </a>
                            <a href="{{ route('experiences.index') }}"
                               class="{{ Request::routeIs('experiences.index') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} px-3 py-2 rounded-md text-sm font-medium">
                                Experiences
                            </a>
                            <a href="{{ route('recipes.index') }}"
                               class="{{ Request::routeIs('recipes.index') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} px-3 py-2 rounded-md text-sm font-medium">
                                Recipes
                            </a>
                            
                            @auth
                                <form action="{{ route('logout') }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                                        Logout
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}"
                                   class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                                    Login
                                </a>
                                <a href="{{ route('register') }}"
                                   class="bg-purple-100 text-purple-700 hover:bg-purple-200 px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                                    Register
                                </a>
                            @endauth
                        </div>
                        <div class="flex md:hidden items-center">
                            <button type="button" class="text-gray-700 hover:text-purple-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white pt-12 pb-6">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-10">
                    <div>
                        <h4 class="text-lg font-semibold mb-4">About Us</h4>
                        <p class="text-gray-400">Our platform brings the community together to share inspiring experiences and recipes during Ramadan 2025.</p>
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
                        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Home</a></li>
                            <li><a href="#experiences" class="text-gray-400 hover:text-white transition-colors duration-200">Experiences</a></li>
                            <li><a href="#recipes" class="text-gray-400 hover:text-white transition-colors duration-200">Recipes</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Login</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Register</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Categories</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Spiritual Testimonials</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Iftar Recipes</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Suhoor Recipes</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Fasting Tips</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Family Activities</a></li>
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
                            <h5 class="text-sm font-semibold mb-2">Stay Updated</h5>
                            <form class="flex">
                                <input type="email" placeholder="Your email" class="px-3 py-2 bg-gray-800 text-gray-200 rounded-l-md focus:outline-none focus:ring-1 focus:ring-purple-500 w-full" required>
                                <button type="submit" class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-r-md transition duration-150 ease-in-out">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-6 mt-6">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-400 text-sm">© 2025 Ramadan Platform. All rights reserved.</p>
                        <div class="flex space-x-4 mt-4 md:mt-0">
                            <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-200">Privacy Policy</a>
                            <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-200">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
