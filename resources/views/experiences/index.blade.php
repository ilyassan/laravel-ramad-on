<x-app-layout>
    <x-slot:title> Home </x-slot>

    <!-- Hero Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-r from-purple-50 to-purple-100">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-4">
                    Experiences of <span class="text-purple-700">Ramadan 2025</span>
                </h1>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-8">
                    Discover and share inspiring moments, deep reflections, and touching stories from our community during this sacred month.
                </p>
                <a href="{{ route('experiences.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg text-lg font-semibold transition duration-150 ease-in-out shadow-lg">
                    Add Your Experience
                </a>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-8 bg-white border-b">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <!-- Search Bar -->
                <form class="relative flex-1 max-w-md">
                    <input type="text" name="keyword" value="{{ request()->get('keyword') }}" placeholder="Rechercher des expériences..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </form>
            </div>
        </div>
    </section>

    <!-- Experiences Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($experiences as $experience)
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <img src="{{ $experience->getImage() }}" alt="Experience 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <img src="https://placehold.co/40x40" alt="User" class="w-10 h-10 rounded-full">
                                <div class="ml-3">
                                    <h4 class="text-sm font-semibold text-gray-900">{{ $experience->user->getName() }}</h4>
                                    <p class="text-xs text-gray-600">{{ \Carbon\Carbon::parse($experience->created_at)->diffForHumans() }}</p>
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

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $experiences->links() }}
            </div>
            
        </div>
    </section>
</x-app-layout>