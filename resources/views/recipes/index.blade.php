<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes - Ramadan 2025</title>
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
                    <a href="#" class="text-purple-600 hover:text-purple-800 px-3 py-2 rounded-md text-sm font-medium">Recettes</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium">Statistiques</a>
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

    <!-- Hero Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-r from-purple-50 to-purple-100">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-4">Recettes du <span class="text-purple-700">Ramadan 2025</span></h1>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-8">Découvrez et partagez des recettes délicieuses pour l'iftar et le suhoor. De l'entrée au dessert, trouvez l'inspiration pour vos repas du Ramadan.</p>
                <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out shadow-lg">Ajouter une recette</button>
            </div>
        </div>
    </section>

    <!-- Recipes Section -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <!-- Category Filter -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Filtrer par catégorie</h2>
                <div class="flex flex-wrap gap-4" id="categoryFilter">
                    <button class="px-4 py-2 rounded-full bg-purple-600 text-white" data-category="all">Toutes</button>
                    <button class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-purple-100" data-category="entrees">Entrées</button>
                    <button class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-purple-100" data-category="plats">Plats</button>
                    <button class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-purple-100" data-category="desserts">Desserts</button>
                    <button class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-purple-100" data-category="boissons">Boissons</button>
                </div>
            </div>

            <!-- Recipes Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="recipesGrid">
                <!-- Recipe Card 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300" data-category="entrees">
                    <img src="/api/placeholder/400/300" alt="Harira" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-xs font-semibold text-purple-600 uppercase tracking-wide">Entrée</span>
                        <h3 class="mt-2 text-xl font-semibold text-gray-900">Harira Traditionnelle</h3>
                        <p class="mt-2 text-gray-600">Une soupe marocaine riche et savoureuse, parfaite pour rompre le jeûne.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 45 min</span>
                            <span class="mx-2 text-gray-300">|</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-user-friends mr-1"></i> 6 personnes</span>
                        </div>
                        <a href="#" class="mt-4 inline-block px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition duration-300">Voir la recette</a>
                    </div>
                </div>

                <!-- Recipe Card 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300" data-category="plats">
                    <img src="/api/placeholder/400/300" alt="Tajine" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-xs font-semibold text-purple-600 uppercase tracking-wide">Plat principal</span>
                        <h3 class="mt-2 text-xl font-semibold text-gray-900">Tajine d'Agneau aux Pruneaux</h3>
                        <p class="mt-2 text-gray-600">Un plat traditionnel marocain, mêlant le sucré et le salé.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 2h</span>
                            <span class="mx-2 text-gray-300">|</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-user-friends mr-1"></i> 4 personnes</span>
                        </div>
                        <a href="#" class="mt-4 inline-block px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition duration-300">Voir la recette</a>
                    </div>
                </div>

                <!-- Recipe Card 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300" data-category="desserts">
                    <img src="/api/placeholder/400/300" alt="Chebakia" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-xs font-semibold text-purple-600 uppercase tracking-wide">Dessert</span>
                        <h3 class="mt-2 text-xl font-semibold text-gray-900">Chebakia au Miel</h3>
                        <p class="mt-2 text-gray-600">Un délicieux gâteau marocain en forme de fleur, frit et enrobé de miel.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 1h30</span>
                            <span class="mx-2 text-gray-300">|</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-user-friends mr-1"></i> 30 pièces</span>
                        </div>
                        <a href="#" class="mt-4 inline-block px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition duration-300">Voir la recette</a>
                    </div>
                </div>

                <!-- Recipe Card 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300" data-category="boissons">
                    <img src="/api/placeholder/400/300" alt="Smoothie" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-xs font-semibold text-purple-600 uppercase tracking-wide">Boisson</span>
                        <h3 class="mt-2 text-xl font-semibold text-gray-900">Smoothie Énergisant aux Dattes</h3>
                        <p class="mt-2 text-gray-600">Une boisson rafraîchissante et nutritive pour le suhoor.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 10 min</span>
                            <span class="mx-2 text-gray-300">|</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-user-friends mr-1"></i> 2 personnes</span>
                        </div>
                        <a href="#" class="mt-4 inline-block px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition duration-300">Voir la recette</a>
                    </div>
                </div>

                <!-- Add more recipe cards here -->

            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out shadow-lg">
                    Charger plus de recettes
                </button>
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
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Recettes</a></li>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryFilter = document.getElementById('categoryFilter');
            const recipesGrid = document.getElementById('recipesGrid');
            const recipeCards = recipesGrid.querySelectorAll('[data-category]');

            categoryFilter.addEventListener('click', function(event) {
                if (event.target.tagName === 'BUTTON') {
                    const category = event.target.dataset.category;

                    // Update active button
                    categoryFilter.querySelectorAll('button').forEach(btn => {
                        btn.classList.remove('bg-purple-600', 'text-white');
                        btn.classList.add('bg-gray-200', 'text-gray-700');
                    });
                    event.target.classList.remove('bg-gray-200', 'text-gray-700');
                    event.target.classList.add('bg-purple-600', 'text-white');

                    // Filter recipes
                    recipeCards.forEach(card => {
                        if (category === 'all' || card.dataset.category === category) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>