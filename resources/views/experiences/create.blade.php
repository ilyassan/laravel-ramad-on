<x-app-layout>
    <x-slot:title> Home </x-slot>
    
    @if ($errors->any())
        <x-slot:error>{{ $errors->first() }}</x-slot> 
    @endif

    <!-- Add Experience Form Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-r from-purple-50 to-purple-100">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 text-center mb-8">Add a new experience</h1>
            <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                <form method="POST" action="{{ route('experiences.store') }}" enctype="multipart/form-data" class="p-6 md:p-8">
                    @method('POST')
                    @csrf
                    <div class="mb-6">
                        <div id="imagePreviewContainer" class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center cursor-pointer overflow-hidden">
                            <div id="imagePlaceholder" class="text-gray-500">
                                <i class="fas fa-image text-4xl mb-2"></i>
                                <p>Click to upload the image</p>
                            </div>
                            <img id="imagePreview" src="#" alt="Image preview" class="w-full h-full object-cover hidden">
                        </div>
                        <input type="file" name="image" id="imageInput" class="hidden" accept="image/*">
                    </div>
                    <div class="mb-6">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Experience title</label>
                        <input type="text" id="title" name="title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                        <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg transition duration-150 ease-in-out">
                            Publish
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imagePreviewContainer = document.getElementById('imagePreviewContainer');
            const imagePlaceholder = document.getElementById('imagePlaceholder');
            const imagePreview = document.getElementById('imagePreview');
            const imageInput = document.getElementById('imageInput');

            imagePreviewContainer.addEventListener('click', function() {
                imageInput.click();
            });

            imageInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        imagePreview.classList.remove('hidden');
                        imagePlaceholder.classList.add('hidden');
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>

</x-app-layout>
