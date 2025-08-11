<div>
    @livewire('partials.header')
    
    <!-- Article Detail Page -->
    <main class="bg-gray-50 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            
            <!-- Breadcrumb -->
            <nav class="mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="flex items-center text-gray-500 hover:text-blue-600 transition-colors">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Accueil
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-500 truncate max-w-md">{{ $article->title }}</span>
                    </li>
                </ol>
            </nav>

            <!-- Article Container -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden">
                
                <!-- Article Header -->
                <div class="p-8 pb-6">
                    <!-- Category Badge -->
                    <div class="mb-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            {{ $article->category->name }}
                        </span>
                    </div>
                    
                    <!-- Title -->
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                        {{ $article->title }}
                    </h1>
                    
                    <!-- Author & Meta Info -->
                    <div class="flex items-center justify-between border-b border-gray-200 pb-6">
                        <div class="flex items-center space-x-4">
                            <!-- Author Avatar -->
                            @if ($article->user->avatar)
                                <img src="{{ $article->user->avatar->url }}" alt="{{ $article->user->name }}" 
                                     class="w-12 h-12 rounded-full object-cover">
                            @else
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold text-lg">
                                        {{ strtoupper(substr($article->user->name, 0, 2)) }}
                                    </span>
                                </div>
                            @endif
                            
                            <!-- Author Info -->
                            <div>
                                <p class="text-lg font-semibold text-gray-900">{{ $article->user->name }}</p>
                                <div class="flex items-center text-sm text-gray-500 space-x-4">
                                    <time datetime="{{ $article->created_at->format('Y-m-d') }}">
                                        {{ $article->created_at->format('d M Y') }}
                                    </time>
                                    <span>•</span>
                                    <span>5 min de lecture</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Share Buttons -->
                        <div class="flex items-center space-x-2">
                            <button class="p-2 text-gray-400 hover:text-blue-600 transition-colors rounded-full hover:bg-blue-50">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                                </svg>
                            </button>
                            <button class="p-2 text-gray-400 hover:text-red-600 transition-colors rounded-full hover:bg-red-50">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Image -->
                @if($article->photo)
                <div class="px-8">
                    <img src="{{ $article->photo->url }}" alt="{{ $article->title }}" 
                         class="w-full h-64 md:h-96 object-cover rounded-lg">
                </div>
                @endif
                
                <!-- Article Content -->
                <div class="p-8">
                    <div class="prose prose-lg max-w-none">
                        <!-- Ici vous pouvez ajouter le contenu de l'article -->
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 mt-8">Section importante</h2>
                        
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                </div>
                
                <!-- Article Actions -->
                <div class="px-8 py-6 bg-gray-50 border-t border-gray-200">
                    <div class="flex items-center justify-between">
                        <!-- Like & Comments Count -->
                        <div class="flex items-center space-x-6">
                            <button class="flex items-center space-x-2 text-gray-500 hover:text-red-600 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                <span class="font-medium">{{ rand(15, 150) }} J'aime</span>
                            </button>
                            
                            <div class="flex items-center space-x-2 text-gray-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                <span class="font-medium">{{ rand(5, 25) }} Commentaires</span>
                            </div>
                        </div>
                        
                        <!-- Share Options -->
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-500 mr-2">Partager :</span>
                            <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-full transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </button>
                            <button class="p-2 text-blue-800 hover:bg-blue-50 rounded-full transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 01-1.93.07 4.28 4.28 0 00 4 2.98 8.521 8.521 0 01-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                </svg>
                            </button>
                            <button class="p-2 text-green-600 hover:bg-green-50 rounded-full transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.105"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
            
            <!-- Comments Section -->
            <section class="mt-8 bg-white rounded-lg shadow-sm p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Commentaires ({{ rand(5, 25) }})</h3>
                
                <!-- Comment Form -->
                @auth
                <div class="mb-8 p-6 bg-gray-50 rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Laisser un commentaire</h4>
                    <form>
                        <div class="mb-4">
                            <textarea 
                                rows="4" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                placeholder="Écrivez votre commentaire..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" 
                                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                                Publier le commentaire
                            </button>
                        </div>
                    </form>
                </div>
                @else
                <div class="mb-8 p-6 bg-blue-50 rounded-lg text-center">
                    <p class="text-blue-800 mb-4">Connectez-vous pour laisser un commentaire</p>
                    <a href="{{ route('login') }}" 
                       class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        Se connecter
                    </a>
                </div>
                @endauth
                
                <!-- Comments List -->
                <div class="space-y-6">
                    <!-- Comment 1 -->
                    <div class="flex space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-semibold text-sm">JD</span>
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h5 class="font-semibold text-gray-900">Jean Dupont</h5>
                                    <time class="text-sm text-gray-500">Il y a 2 heures</time>
                                </div>
                                <p class="text-gray-700">
                                    Excellent article ! Très bien expliqué et facile à comprendre. Merci pour ce partage.
                                </p>
                            </div>
                            <div class="flex items-center space-x-4 mt-2 ml-4">
                                <button class="text-sm text-gray-500 hover:text-blue-600 transition-colors">Répondre</button>
                                <button class="text-sm text-gray-500 hover:text-red-600 transition-colors">👍 5</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comment 2 -->
                    <div class="flex space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-semibold text-sm">ML</span>
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h5 class="font-semibold text-gray-900">Marie Lefebvre</h5>
                                    <time class="text-sm text-gray-500">Il y a 1 jour</time>
                                </div>
                                <p class="text-gray-700">
                                    J'ai appris beaucoup de choses grâce à cet article. Continuez comme ça !
                                </p>
                            </div>
                            <div class="flex items-center space-x-4 mt-2 ml-4">
                                <button class="text-sm text-gray-500 hover:text-blue-600 transition-colors">Répondre</button>
                                <button class="text-sm text-gray-500 hover:text-red-600 transition-colors">👍 12</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Load More Comments -->
                    <div class="text-center pt-4">
                        <button class="text-blue-600 hover:text-blue-800 font-medium transition-colors">
                            Voir plus de commentaires
                        </button>
                    </div>
                </div>
            </section>
            
            <!-- Related Articles -->
            <section class="mt-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Articles similaires</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Ici vous pouvez inclure des articles similaires -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600"></div>
                        <div class="p-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Article similaire 1</h4>
                            <p class="text-gray-600 text-sm mb-4">Description courte de l'article...</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Il y a 3 jours</span>
                                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lire →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    @include('livewire.partials.footer')
</div>
