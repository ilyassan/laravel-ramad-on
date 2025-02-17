<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expériences - Ramadan 2025</title>
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
                    <a href="#" class="text-purple-600 hover:text-purple-800 px-3 py-2 rounded-md text-sm font-medium">Expériences</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium">Recettes</a>
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
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-4">Expériences du <span class="text-purple-700">Ramadan 2025</span></h1>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-8">Découvrez et partagez des moments inspirants, des réflexions profondes et des histoires touchantes de notre communauté pendant ce mois sacré.</p>
                <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out shadow-lg">Ajouter votre expérience</button>
            </div>
        </div>
    </section>

    <!-- Experiences Section -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Experience Card 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="/api/placeholder/400/300" alt="Experience 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <h4 class="text-sm font-semibold text-gray-900">Ahmed Benali</h4>
                                <p class="text-xs text-gray-600">Il y a 2 jours</p>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Ma première nuit de Tarawih</h3>
                        <p class="text-gray-700 mb-4">Je partage avec vous mon expérience lors de ma première nuit de prière de Tarawih cette année. C'était une expérience spirituelle profonde qui m'a permis de me reconnecter avec ma foi et ma communauté...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-purple-600 flex items-center">
                                <i class="fas fa-heart mr-1"></i> 128
                            </span>
                            <span class="text-gray-600 flex items-center">
                                <i class="fas fa-comment mr-1"></i> 32
                            </span>
                            <a href="#" class="text-purple-700 hover:text-purple-800 font-medium text-sm">Lire la suite</a>
                        </div>
                    </div>
                </div>
                
                <!-- Experience Card 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="/api/placeholder/400/300" alt="Experience 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <h4 class="text-sm font-semibold text-gray-900">Fatima Zahra</h4>
                                <p class="text-xs text-gray-600">Il y a 3 jours</p>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Comment j'ai appris à gérer mon temps</h3>
                        <p class="text-gray-700 mb-4">Entre le travail, la famille et les obligations spirituelles, voici comment j'organise mes journées pendant le Ramadan. J'ai découvert des astuces qui m'ont permis de trouver un équilibre harmonieux...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-purple-600 flex items-center">
                                <i class="fas fa-heart mr-1"></i> 195
                            </span>
                            <span class="text-gray-600 flex items-center">
                                <i class="fas fa-comment mr-1"></i> 47
                            </span>
                            <a href="#" class="text-purple-700 hover:text-purple-800 font-medium text-sm">Lire la suite</a>
                        </div>
                    </div>
                </div>
                
                <!-- Experience Card 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="/api/placeholder/400/300" alt="Experience 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <h4 class="text-sm font-semibold text-gray-900">Karim Tazi</h4>
                                <p class="text-xs text-gray-600">Il y a 5 jours</p>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">La solidarité pendant le Ramadan</h3>
                        <p class="text-gray-700 mb-4">Mon expérience de bénévolat auprès des personnes démunies durant ce mois béni m'a ouvert les yeux sur l'importance de la communauté et du partage. Voici comment cette expérience a changé ma perspective...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-purple-600 flex items-center">
                                <i class="fas fa-heart mr-1"></i> 267
                            </span>
                            <span class="text-gray-600 flex items-center">
                                <i class="fas fa-comment mr-1"></i> 56
                            </span>
                            <a href="#" class="text-purple-700 hover:text-purple-800 font-medium text-sm">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- Experience Card 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="/api/placeholder/400/300" alt="Experience 4" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <h4 class="text-sm font-semibold text-gray-900">Amina Chaoui</h4>
                                <p class="text-xs text-gray-600">Il y a 1 semaine</p>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Mon premier Ramadan loin de ma famille</h3>
                        <p class="text-gray-700 mb-4">Étudiant à l'étranger, j'ai dû vivre mon premier Ramadan loin de ma famille. Cette expérience m'a appris l'importance de la communauté et m'a permis de créer des liens forts avec d'autres musulmans...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-purple-600 flex items-center">
                                <i class="fas fa-heart mr-1"></i> 183
                            </span>
                            <span class="text-gray-600 flex items-center">
                                <i class="fas fa-comment mr-1"></i> 41
                            </span>
                            <a href="#" class="text-purple-700 hover:text-purple-800 font-medium text-sm">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- Experience Card 5 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="/api/placeholder/400/300" alt="Experience 5" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <h4 class="text-sm font-semibold text-gray-900">Youssef El Amrani</h4>
                                <p class="text-xs text-gray-600">Il y a 1 semaine</p>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Ramadan et performance sportive</h3>
                        <p class="text-gray-700 mb-4">En tant qu'athlète professionnel, j'ai dû apprendre à concilier le jeûne avec mes entraînements intensifs. Voici comment j'ai réussi à maintenir ma performance tout en respectant mes obligations religieuses...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-purple-600 flex items-center">
                                <i class="fas fa-heart mr-1"></i> 210
                            </span>
                            <span class="text-gray-600 flex items-center">
                                <i class="fas fa-comment mr-1"></i> 38
                            </span>
                            <a href="#" class="text-purple-700 hover:text-purple-800 font-medium text-sm">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- Experience Card 6 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="/api/placeholder/400/300" alt="Experience 6" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <h4 class="text-sm font-semibold text-gray-900">Leila Bouazza</h4>
                                <p class="text-xs text-gray-600">Il y a 2 semaines</p>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Ramadan en tant que nouvelle convertie</h3>
                        <p class="text-gray-700 mb-4">En tant que nouvelle convertie, j'ai vécu mon premier Ramadan avec beaucoup d'appréhension et d'excitation. Cette expérience m'a permis de découvrir la beauté de l'Islam et la force de la communauté...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-purple-600 flex items-center">
                                <i class="fas fa-heart mr-1"></i> 156
                            </span>
                            <span class="text-gray-600 flex items-center">
                                <i class="fas fa-comment mr-1"></i> 29
                            </span>
                            <a href="#" class="text-purple-700 hover:text-purple-800 font-medium text-sm">Lire la suite</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out shadow-lg">Charger plus d'expériences</button>
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
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Expériences</a></li>
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
</body>
</html>