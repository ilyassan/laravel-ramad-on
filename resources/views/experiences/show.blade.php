<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'expérience - Ramadan 2025</title>
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

    <!-- Experience Details Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-r from-purple-50 to-purple-100">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:h-full md:w-48" src="/api/placeholder/400/400" alt="Experience Image">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-purple-600 font-semibold">Expérience Ramadan</div>
                        <h1 class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">Ma première nuit de Tarawih</h1>
                        <div class="mt-2 flex items-center">
                            <img class="h-10 w-10 rounded-full mr-2" src="/api/placeholder/40/40" alt="Author">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Ahmed Benali</p>
                                <p class="text-sm text-gray-500">Publié le 15 avril 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-8 py-6">
                    <p class="mt-2 text-gray-500">
                        Je voudrais partager avec vous mon expérience lors de ma première nuit de prière de Tarawih cette année. C'était une expérience spirituelle profonde qui m'a permis de me reconnecter avec ma foi et ma communauté.
                    </p>
                    <p class="mt-4 text-gray-500">
                        Dès que je suis entré dans la mosquée, j'ai été frappé par l'atmosphère de paix et de recueillement. Les fidèles se rassemblaient lentement, chacun trouvant sa place sur le tapis de prière. L'imam a commencé la prière avec une voix mélodieuse qui résonnait dans toute la salle.
                    </p>
                    <p class="mt-4 text-gray-500">
                        Au fur et à mesure que la prière avançait, je me suis senti de plus en plus connecté à ma spiritualité. Les longues récitations du Coran m'ont permis de réfléchir profondément sur ma vie et mes actions. J'ai ressenti une paix intérieure que je n'avais pas expérimentée depuis longtemps.
                    </p>
                    <p class="mt-4 text-gray-500">
                        Cette expérience m'a rappelé l'importance de la communauté dans notre foi. Voir tant de personnes unies dans la prière m'a donné un sentiment d'appartenance et de solidarité. J'ai hâte de continuer à participer aux prières de Tarawih tout au long du Ramadan et de renforcer ma connexion spirituelle.
                    </p>
                </div>
                <div class="px-8 py-4 bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <button class="flex items-center text-gray-600 hover:text-purple-600">
                                <i class="far fa-heart mr-1"></i>
                                <span>128 J'aime</span>
                            </button>
                            <button class="flex items-center text-gray-600 hover:text-purple-600">
                                <i class="far fa-comment mr-1"></i>
                                <span>24 Commentaires</span>
                            </button>
                        </div>
                        <button class="text-purple-600 hover:text-purple-800">
                            <i class="fas fa-share-alt mr-1"></i>
                            Partager
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comments Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Commentaires</h2>
                
                <!-- New Comment Form -->
                <form id="commentForm" class="mb-8">
                    <div class="flex items-start space-x-4">
                        <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Your Avatar">
                        <div class="min-w-0 flex-1">
                            <textarea id="comment" name="comment" rows="3" class="shadow-sm block w-full focus:ring-purple-500 focus:border-purple-500 sm:text-sm border border-gray-300 rounded-md" placeholder="Ajoutez un commentaire..."></textarea>
                        </div>
                    </div>
                    <div class="mt-3 flex items-center justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            Publier le commentaire
                        </button>
                    </div>
                </form>

                <!-- Existing Comments -->
                <div class="space-y-6">
                    <!-- Comment 1 -->
                    <div class="flex space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Commenter 1">
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Fatima Zahra</h3>
                            <p class="mt-1 text-sm text-gray-500">Il y a 2 jours</p>
                            <p class="mt-2 text-sm text-gray-700">Merci pour ce témoignage inspirant ! J'ai vécu une expérience similaire et je suis d'accord que les prières de Tarawih sont vraiment spéciales pendant le Ramadan.</p>
                        </div>
                    </div>

                    <!-- Comment 2 -->
                    <div class="flex space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Commenter 2">
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Karim Tazi</h3>
                            <p class="mt-1 text-sm text-gray-500">Il y a 1 jour</p>
                            <p class="mt-2 text-sm text-gray-700">C'est formidable de voir comment la prière peut nous rapprocher de notre spiritualité. J'espère pouvoir assister aux Tarawih cette année aussi.</p>
                        </div>
                    </div>

                    <!-- More comments can be added here -->
                </div>

                <!-- Load More Comments Button -->
                <div class="mt-8 text-center">
                    <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-purple-700 bg-purple-100 hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Charger plus de commentaires
                    </button>
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
            const commentForm = document.getElementById('commentForm');
            
            commentForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const commentText = document.getElementById('comment').value;
                if (commentText.trim() !== '') {
                    // Here you would typically send the comment to your server
                    // For this example, we'll just log it to the console
                    console.log('New comment:', commentText);
                    alert('Commentaire ajouté avec succès!');
                    document.getElementById('comment').value = '';
                }
            });
        });
    </script>
</body>
</html>