<div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-200">
                       <!-- <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600"></div> -->
                        <img loading="lazy" decoding="async"src="{{ $article->photo->url }}" alt="{{ $article->title }}" class="w-full h-48 object-contain">
                       <div class="p-6">
                           <div class="flex items-center mb-2">
                               <!-- <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded"> $article->category->name </span> -->
                           </div>
                           <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $article->title }}</h3>
                           
                           <!-- Auteur avec avatar -->

                            @if ($article->user->avatar)
                              <div class="flex items-center mb-3">
                                  <img src="{{ $article->user->avatar->url }}" alt="{{ $article->user->name }}" class="w-8 h-8 rounded-full mr-2">
                                  <span class="text-xs font-medium text-gray-600">{{ $article->user->name }}</span>
                              </div>
                            @else
                              <div class="flex items-center mb-3">
                                  <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center mr-2">
                                      <span class="text-xs font-medium text-gray-600">{{ strtoupper(substr($article->user->name, 0, 2)) }}</span>
                                  </div>
                                  <span class="text-xs font-medium text-gray-600">Par {{ $article->user->name }}</span>
                              </div>
                            @endif

                           <p class="text-sm mb-4">
                             <span class="font-semibold text-gray-900">Catégorie :</span>
                             <span class="text-gray-600">{{ $article->category->name }}</span>
                           </p>
                           
                           <!-- Section inférieure avec date, likes et lien -->
                           <div class="flex items-center justify-between">
                               <span class="text-sm text-gray-500">{{ $article->created_at->diffForHumans() }}</span>
                               
                               <div class="flex items-center space-x-3">
                                   <!-- Bouton Like -->
                                   <button class="flex items-center space-x-1 text-gray-500 hover:text-red-500 transition-colors duration-200">
                                       <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                       </svg>
                                       <span class="text-xs">{{ rand(5, 50) }}</span>
                                   </button>
                                   
                                   <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lire plus →</a>
                               </div>
                           </div>
                       </div>
                   </div>