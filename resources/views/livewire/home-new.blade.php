<div>
    @include('livewire.partials.header')
    
    <!-- Main Content -->
    <main class="bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Hero Section -->
            <div class="bg-white rounded-lg shadow-sm p-8 mb-8">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $heading }}</h1>
                    <p class="text-xl text-gray-600 mb-8">Bienvenue sur notre blog. Découvrez nos derniers articles et actualités.</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition-colors duration-200">
                            Voir les articles
                        </a>
                        <a href="#" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-md hover:bg-gray-50 transition-colors duration-200">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Article 1 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-200">
                    <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Technologie</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Introduction à Laravel</h3>
                        <p class="text-gray-600 text-sm mb-4">Découvrez les bases du framework Laravel et comment créer votre première application web.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Il y a 2 jours</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lire plus →</a>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-200">
                    <div class="h-48 bg-gradient-to-r from-green-500 to-teal-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Design</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Tailwind CSS en pratique</h3>
                        <p class="text-gray-600 text-sm mb-4">Apprenez à utiliser Tailwind CSS pour créer des interfaces modernes et responsives.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Il y a 5 jours</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lire plus →</a>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-200">
                    <div class="h-48 bg-gradient-to-r from-orange-500 to-red-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded">Business</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Stratégies de développement</h3>
                        <p class="text-gray-600 text-sm mb-4">Les meilleures pratiques pour gérer vos projets de développement web.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Il y a 1 semaine</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lire plus →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter Section -->
            <div class="bg-blue-600 rounded-lg p-8 text-center">
                <h2 class="text-2xl font-bold text-white mb-4">Restez informé</h2>
                <p class="text-blue-100 mb-6">Recevez nos derniers articles directement dans votre boîte mail.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                    <input type="email" placeholder="Votre email" class="flex-1 px-4 py-2 rounded-md border-0 focus:ring-2 focus:ring-blue-300">
                    <button class="bg-white text-blue-600 px-6 py-2 rounded-md hover:bg-gray-100 transition-colors duration-200 font-medium">
                        S'abonner
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-semibold">tabler</span>
                    </div>
                    <p class="text-gray-300 mb-4">Un blog moderne créé avec Laravel et Tailwind CSS.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Navigation</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Accueil</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Articles</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Catégories</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">À propos</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Support</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Documentation</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">GitHub</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 Tabler Blog. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</div>
