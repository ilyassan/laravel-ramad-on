<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Ramadan 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.html" class="flex-shrink-0 flex items-center">
                        <span class="ml-2 text-xl font-semibold text-purple-800">Ramadan 2025</span>
                    </a>
                </div>
                <div class="hidden md:flex md:items-center md:space-x-6">
                    <a href="experiences.html" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium">Expériences</a>
                    <a href="recipes.html" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium">Recettes</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium">Statistiques</a>
                    <a href="login.html" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Connexion</a>
                    <a href="signup.html" class="bg-purple-100 text-purple-700 hover:bg-purple-200 px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Inscription</a>
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

    <!-- Signup Form Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-r from-purple-50 to-purple-100">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">Créer un compte</h2>
                    <form id="signupForm">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom complet</label>
                            <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Adresse e-mail</label>
                            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
                            <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        </div>
                        <div class="mb-6">
                            <label for="confirmPassword" class="block text-gray-700 text-sm font-bold mb-2">Confirmer le mot de passe</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">
                                S'inscrire
                            </button>
                        </div>
                    </form>
                    <p class="text-center text-gray-600 text-sm">
                        Vous avez déjà un compte ? <a href="login.html" class="text-purple-600 hover:text-purple-800">Connectez-vous</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="index.html" class="text-gray-400 hover:text-white transition-colors duration-200">Accueil</a></li>
                        <li><a href="experiences.html" class="text-gray-400 hover:text-white transition-colors duration-200">Expériences</a></li>
                        <li><a href="recipes.html" class="text-gray-400 hover:text-white transition-colors duration-200">Recettes</a></li>
                        <li><a href="login.html" class="text-gray-400 hover:text-white transition-colors duration-200">Se connecter</a></li>
                        <li><a href="signup.html" class="text-gray-400 hover:text-white transition-colors duration-200">S'inscrire</a></li>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const signupForm = document.getElementById('signupForm');
            
            signupForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;

                if (password !== confirmPassword) {
                    alert('Les mots de passe ne correspondent pas.');
                    return;
                }

                // Here you would typically send the signup data to your server
                // For this example, we'll just log it to the console
                console.log('Signup data:', { name, email, password });
                alert('Inscription réussie !');
                signupForm.reset();
            });
        });
    </script>
</body>
</html>