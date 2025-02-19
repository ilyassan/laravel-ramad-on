<x-app-layout>
    <x-slot:title> Create Recipe </x-slot>

    <!-- Hero Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-r from-purple-50 to-purple-100">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-4">Recipes of <span class="text-purple-700">Ramadan 2025</span></h1>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-8">Discover and share delicious recipes for the Iftar and Suhoor. De l'entrée au dessert, Find your inspiration for your recipes in Ramadan.</p>
                <a href="{{ route('recipes.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out shadow-lg">Add your recipe</a>
            </div>
        </div>
    </section>

    <!-- Recipes Section -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <!-- Category Filter -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Filter by Category</h2>
                <div class="flex flex-wrap gap-4" id="categoryFilter">
                    @php
                        function isActive($category_id){
                            return request()->get("category_id") == $category_id ? "bg-purple-600 text-white" : "bg-gray-200 text-gray-700 hover:bg-purple-100";

                        }
                    @endphp
                    <a href="{{ route('recipes.index') }}" class="px-4 py-2 rounded-full {{isActive('')}}" data-category="all">Toutes</a>
                    {{-- Generate them dynamically here and let the clicked one active --}}
                    @foreach ($categories as $category)
                        <a
                            href="{{ route('recipes.index', ['category_id' => $category->getPrimaryKey()]) }}"
                            class="px-4 py-2 rounded-full {{isActive($category->getPrimaryKey() )}}">
                            {{ $category->getName() }}
                        </a>
                    @endforeach

                </div>
            </div>

            <!-- Recipes Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="recipesGrid">
                @foreach ($recipes as $recipe)
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300" data-category="entrees">
                        <img src="{{ $recipe->getImage() }}" alt="Harira" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <span class="text-xs font-semibold text-purple-600 uppercase tracking-wide">{{ $recipe->category->getName() }}</span>
                            <h3 class="mt-2 text-xl font-semibold text-gray-900">{{ $recipe->getTitle() }}</h3>
                            <p class="mt-2 text-gray-600">{{ Str::limit($recipe->getDescription(), 97) }}</p>
                            <a href="{{ route('recipes.show', $recipe->getPrimaryKey() ) }}" class="mt-4 inline-block px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition duration-300">Voir la recette</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>