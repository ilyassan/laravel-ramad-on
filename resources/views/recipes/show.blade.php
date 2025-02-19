<x-app-layout>
    <x-slot:title> Home </x-slot>

    @if ($errors->any())
        <x-slot:error>{{ $errors->first() }}</x-slot> 
    @endif
    
    <!-- Hero Section with Experience Details -->
    <section class="min-h-[50vh] pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-br from-purple-50 via-purple-100 to-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <!-- Main Content Card -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <!-- Header with Title and Author -->
                    <div class="p-6 md:p-8 border-b border-gray-100">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <div class="inline-block px-3 py-1 rounded-full text-sm font-medium text-purple-600 bg-purple-50">
                                    {{ $recipe->category->getName() }}
                                </div>
                                <h1 class="mt-3 text-3xl md:text-4xl font-bold text-gray-900">
                                    {{ $recipe->getTitle() }}
                                </h1>
                            </div>
                            <div class="mt-4 md:mt-0 flex items-center space-x-4">
                                <img class="h-12 w-12 rounded-full border-2 border-purple-100" 
                                     src="https://placehold.co/40x40" 
                                     alt="Author">
                                <div>
                                    <p class="text-base font-semibold text-gray-900">{{ $recipe->user->getName() }}</p>
                                    <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($recipe->created_at)->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <div class="relative h-[400px] w-full">
                        <img class="w-full h-full object-cover" 
                             src="{{ $recipe->getImage() }}" 
                             alt="Experience Image">
                    </div>

                    <!-- Content -->
                    <div class="p-6 md:p-8">
                        <div class="prose prose-purple max-w-none">
                            <p class="text-gray-700 text-lg leading-relaxed">
                                {{ $recipe->getDescription() }}
                            </p>
                        </div>
                    </div>

                    <!-- Engagement Section -->
                    <div class="px-6 md:px-8 py-4 bg-gray-50 border-t border-gray-100">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-6">
                                <button class="flex items-center space-x-2 text-gray-600 hover:text-purple-600 transition-colors">
                                    <i class="far fa-comment text-lg"></i>
                                    <span class="font-medium">{{ count($recipe->comments) }} Commentaires</span>
                                </button>
                            </div>
                            <button class="flex items-center space-x-2 text-purple-600 hover:text-purple-800 transition-colors">
                                <i class="fas fa-share-alt text-lg"></i>
                                <span class="font-medium">Partager</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="mt-12 bg-white rounded-2xl shadow-lg p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Commentaires</h2>
                    
                    <!-- New Comment Form -->
                    <form action="{{ route('comments.store') }}" method="POST" class="mb-8">
                        @method("POST")
                        @csrf
                        <input type="hidden" name="recipe_id" value="{{ $recipe->getPrimaryKey() }}">
                        <div class="flex items-start space-x-4">
                            <img class="h-12 w-12 rounded-full border-2 border-purple-100" 
                                 src="https://placehold.co/40x40" 
                                 alt="Your Avatar">
                            <div class="flex-1">
                                <textarea id="comment" 
                                          name="content" 
                                          rows="3" 
                                          class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-shadow" 
                                          placeholder="Ajoutez un commentaire..."></textarea>
                                <div class="mt-3 text-right">
                                    <button type="submit" 
                                            class="px-6 py-2.5 bg-purple-600 text-white font-medium rounded-xl hover:bg-purple-700 focus:ring-4 focus:ring-purple-200 transition-all">
                                        Publier le commentaire
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Existing Comments -->
                    <div class="space-y-8">
                        @foreach ($recipe->comments as $comment)
                            <div class="flex space-x-4">
                                <img class="h-12 w-12 rounded-full border-2 border-purple-100" 
                                    src="https://placehold.co/40x40" 
                                    alt="Commenter 1">
                                <div class="flex-1">
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <h3 class="font-semibold text-gray-900">{{ $comment->user->getName() }}</h3>
                                        <p class="text-sm text-gray-500 mt-1">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                                        <p class="mt-3 text-gray-700">{{ $comment->content }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>