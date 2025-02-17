<x-app-layout>
    <x-slot:title> Home </x-slot>
    
    <!-- Hero Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-r from-purple-50 to-purple-100">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-cente gap-10">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">Partagez la magie du <span class="text-purple-700">Ramadan 2025</span></h1>
                    <p class="mt-4 text-lg text-gray-700 max-w-lg">Rejoignez notre communauté pour partager vos expériences, recettes et conseils spirituels pendant ce mois sacré.</p>
                    <div class="mt-8 flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                        <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out shadow-lg">Commencer à partager</button>
                        <button class="bg-white text-purple-700 border border-purple-200 hover:bg-purple-50 px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out">Explorer le contenu</button>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://www.islamichelp.org.uk/storage/media-center/2019/02/Ramadan-Kareem.jpg" alt="Ramadan Celebration" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section id="statistiques" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">Notre communauté en chiffres</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-purple-600 mb-4">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-900">5,280</h3>
                    <p class="text-gray-700 mt-2">Membres actifs</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-purple-600 mb-4">
                        <i class="fas fa-book-open text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-900">1,543</h3>
                    <p class="text-gray-700 mt-2">Expériences partagées</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-purple-600 mb-4">
                        <i class="fas fa-utensils text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-900">872</h3>
                    <p class="text-gray-700 mt-2">Recettes publiées</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-purple-600 mb-4">
                        <i class="fas fa-comment text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-900">12,390</h3>
                    <p class="text-gray-700 mt-2">Commentaires</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiences Section -->
    <section id="experiences" class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Expériences partagées</h2>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto">Découvrez les témoignages inspirants de notre communauté pendant le Ramadan</p>
            </div>
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
                        <p class="text-gray-700 mb-4">Je partage avec vous mon expérience lors de ma première nuit de prière de Tarawih cette année...</p>
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
                        <p class="text-gray-700 mb-4">Entre le travail, la famille et les obligations spirituelles, voici comment j'organise mes journées...</p>
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
                        <p class="text-gray-700 mb-4">Mon expérience de bénévolat auprès des personnes démunies durant ce mois béni...</p>
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
            </div>
            <div class="text-center mt-10">
                <a href="#" class="inline-flex items-center text-purple-700 hover:text-purple-800 font-semibold">
                    Voir plus d'expériences
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Recipes Section -->
    <section id="recettes" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Recettes populaires</h2>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto">Explorez nos meilleures recettes pour l'Iftar et le Suhoor</p>
            </div>
            
            <!-- Recipe Categories Filter -->
            <div class="flex flex-wrap justify-center mb-10 space-x-2 space-y-2 md:space-y-0">
                <button class="bg-purple-600 text-white px-4 py-2 rounded-md text-sm font-medium">Toutes</button>
                <button class="bg-white text-purple-700 border border-purple-200 hover:bg-purple-50 px-4 py-2 rounded-md text-sm font-medium">Entrées</button>
                <button class="bg-white text-purple-700 border border-purple-200 hover:bg-purple-50 px-4 py-2 rounded-md text-sm font-medium">Plats principaux</button>
                <button class="bg-white text-purple-700 border border-purple-200 hover:bg-purple-50 px-4 py-2 rounded-md text-sm font-medium">Desserts</button>
                <button class="bg-white text-purple-700 border border-purple-200 hover:bg-purple-50 px-4 py-2 rounded-md text-sm font-medium">Boissons</button>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Recipe Card 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="/api/placeholder/400/250" alt="Recipe 1" class="w-full h-56 object-cover">
                        <span class="absolute top-4 right-4 bg-purple-600 text-white text-xs font-semibold px-2 py-1 rounded">Entrée</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Harira traditionnelle</h3>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-2">(128 avis)</span>
                        </div>
                        <p class="text-gray-700 mb-4">Une recette authentique de harira, la soupe traditionnelle pour rompre le jeûne...</p>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="far fa-clock mr-2"></i> 45 minutes
                            <span class="mx-3">|</span>
                            <i class="fas fa-utensils mr-2"></i> 6 personnes
                        </div>
                        <a href="#" class="block w-full bg-purple-100 hover:bg-purple-200 text-purple-700 text-center py-2 rounded-md font-medium transition duration-150 ease-in-out">Voir la recette</a>
                    </div>
                </div>
                
                <!-- Recipe Card 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="/api/placeholder/400/250" alt="Recipe 2" class="w-full h-56 object-cover">
                        <span class="absolute top-4 right-4 bg-purple-600 text-white text-xs font-semibold px-2 py-1 rounded">Plat principal</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Tajine d'agneau aux pruneaux</h3>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-2">(195 avis)</span>
                        </div>
                        <p class="text-gray-700 mb-4">Un tajine savoureux qui mêle le sucré et le salé, parfait pour un Iftar spécial...</p>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="far fa-clock mr-2"></i> 1h30
                            <span class="mx-3">|</span>
                            <i class="fas fa-utensils mr-2"></i> 8 personnes
                        </div>
                        <a href="#" class="block w-full bg-purple-100 hover:bg-purple-200 text-purple-700 text-center py-2 rounded-md font-medium transition duration-150 ease-in-out">Voir la recette</a>
                    </div>
                </div>
                
                <!-- Recipe Card 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="/api/placeholder/400/250" alt="Recipe 3" class="w-full h-56 object-cover">
                        <span class="absolute top-4 right-4 bg-purple-600 text-white text-xs font-semibold px-2 py-1 rounded">Dessert</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Chebakia au miel</h3>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-2">(87 avis)</span>
                        </div>
                        <p class="text-gray-700 mb-4">La recette authentique de ce gâteau traditionnel adoré pendant le Ramadan...</p>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="far fa-clock mr-2"></i> 2h
                            <span class="mx-3">|</span>
                            <i class="fas fa-utensils mr-2"></i> 30 pièces
                        </div>
                        <a href="#" class="block w-full bg-purple-100 hover:bg-purple-200 text-purple-700 text-center py-2 rounded-md font-medium transition duration-150 ease-in-out">Voir la recette</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="#" class="inline-flex items-center text-purple-700 hover:text-purple-800 font-semibold">
                    Découvrir plus de recettes
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>