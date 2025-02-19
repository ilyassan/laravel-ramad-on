<x-app-layout>
    <x-slot:title> Home </x-slot>
    
    <!-- Hero Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-r from-purple-50 to-purple-100">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">Share the magic of <span class="text-purple-700">Ramadan 2025</span></h1>
                    <p class="mt-4 text-lg text-gray-700 max-w-lg">Join our community to share your experiences, recipes, and spiritual advice during this sacred month.</p>
                    <div class="mt-8 flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                        <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out shadow-lg">Start Sharing</button>
                        <button class="bg-white text-purple-700 border border-purple-200 hover:bg-purple-50 px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out">Explore Content</button>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://www.islamichelp.org.uk/storage/media-center/2019/02/Ramadan-Kareem.jpg" alt="Ramadan Celebration" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section id="statistics" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">Our Community in Numbers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-purple-600 mb-4">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-900">{{ $usersCount }}</h3>
                    <p class="text-gray-700 mt-2">Active Members</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-purple-600 mb-4">
                        <i class="fas fa-book-open text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-900">{{ $experiencesCount }}</h3>
                    <p class="text-gray-700 mt-2">Shared Experiences</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-purple-600 mb-4">
                        <i class="fas fa-utensils text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-900">{{ $recipesCount }}</h3>
                    <p class="text-gray-700 mt-2">Published Recipes</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-purple-600 mb-4">
                        <i class="fas fa-comment text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-900">{{ $commentsCount }}</h3>
                    <p class="text-gray-700 mt-2">Comments</p>
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
                @foreach ($latestExperiences as $experience)
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://placehold.co/400x300" alt="Experience 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <img src="https://placehold.co/40x40" alt="User" class="w-10 h-10 rounded-full">
                                <div class="ml-3">
                                    <h4 class="text-sm font-semibold text-gray-900">{{ $experience->user->getName() }}</h4>
                                    <p class="text-xs text-gray-600">
                                        {{ \Carbon\Carbon::parse($experience->created_at)->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $experience->getTitle() }}</h3>
                            <p class="text-gray-700 mb-4">{{ Str::limit($experience->getDescription(), 97) }}...</p>
                            <div class="flex items-center justify-between">
                                <a href="{{ route('experiences.show', $experience->getPrimaryKey()) }}" class="text-purple-700 hover:text-purple-800 font-medium text-sm">Lire la suite</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-10">
                <a href="{{ route('experiences.index') }}" class="inline-flex items-center text-purple-700 hover:text-purple-800 font-semibold">
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
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($latestRecipes as $recipe)
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <div class="relative">
                            <img src="https://placehold.co/400x300" alt="Recipe 1" class="w-full h-56 object-cover">
                            <span class="absolute top-4 right-4 bg-purple-600 text-white text-xs font-semibold px-2 py-1 rounded">Entrée</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $recipe->getTitle() }}</h3>
                            <p class="text-gray-700 mb-4">{{ Str::limit($recipe->getDescription(), 97) }}...</p>
                            <a href="{{ route('recipes.show', $recipe->getPrimaryKey()) }}" class="block w-full bg-purple-100 hover:bg-purple-200 text-purple-700 text-center py-2 rounded-md font-medium transition duration-150 ease-in-out">Voir la recette</a>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="text-center mt-10">
                <a href="{{ route('recipes.index') }}" class="inline-flex items-center text-purple-700 hover:text-purple-800 font-semibold">
                    Découvrir plus de recettes
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>