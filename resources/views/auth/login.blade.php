<x-app-layout>
    <x-slot:title> Home </x-slot>
    
    @if ($errors->any())
        <x-slot:error>{{ $errors->first() }}</x-slot> 
    @endif

    <!-- Login Form Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-r from-purple-50 to-purple-100">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" autofocus class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">
                                Login
                            </button>
                        </div>
                    </form>
                    <p class="text-center text-gray-600 text-sm">
                        Don't have an account ? <a href="{{ route('register') }}" class="text-purple-600 hover:text-purple-800">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>