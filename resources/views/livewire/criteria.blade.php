<div>
<!-- Composant de filtres et tri moderne -->
<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
        
        <!-- Section recherche -->
        <div class="flex-1 max-w-md">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="search"
                       wire:model.live.debounce.300ms="search"
                       class="block w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                       placeholder="Rechercher un article...">
            </div>
        </div>

        <!-- Section tri -->
        <div class="flex flex-col sm:flex-row gap-3">
            <!-- Sélecteur de tri personnalisé -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" 
                        class="w-full bg-white border border-gray-200 rounded-lg px-4 py-3 text-left text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-300 min-w-[140px] flex items-center justify-between">
                    <span class="flex items-center gap-2">
                        @if($sort === 'date')
                            <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Date
                        @elseif($sort === 'author')
                            <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Auteur
                        @elseif($sort === 'category')
                            <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            Catégorie
                        @elseif($sort === 'likes')
                            <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            Likes
                        @else
                            Trier par
                        @endif
                    </span>
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                
                <div x-show="open" 
                     @click.away="open = false"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute z-10 mt-1 w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                    
                    <button wire:click="$set('sort', '')" 
                            @click="open = false"
                            class="w-full px-4 py-3 text-left hover:bg-gray-50 flex items-center gap-2 text-gray-700">
                        Trier par
                    </button>
                    
                    <button wire:click="$set('sort', 'date')" 
                            @click="open = false"
                            class="w-full px-4 py-3 text-left hover:bg-gray-50 flex items-center gap-2 text-gray-700 {{ $sort === 'date' ? 'bg-blue-50 text-blue-700' : '' }}">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Date
                    </button>
                    
                    <button wire:click="$set('sort', 'author')" 
                            @click="open = false"
                            class="w-full px-4 py-3 text-left hover:bg-gray-50 flex items-center gap-2 text-gray-700 {{ $sort === 'author' ? 'bg-blue-50 text-blue-700' : '' }}">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Auteur
                    </button>
                    
                    <button wire:click="$set('sort', 'category')" 
                            @click="open = false"
                            class="w-full px-4 py-3 text-left hover:bg-gray-50 flex items-center gap-2 text-gray-700 {{ $sort === 'category' ? 'bg-blue-50 text-blue-700' : '' }}">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        Catégorie
                    </button>
                    
                    <button wire:click="$set('sort', 'likes')" 
                            @click="open = false"
                            class="w-full px-4 py-3 text-left hover:bg-gray-50 flex items-center gap-2 text-gray-700 {{ $sort === 'likes' ? 'bg-blue-50 text-blue-700' : '' }}">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        Likes
                    </button>
                </div>
            </div>

            <!-- Sélecteur de direction -->
            <div class="relative">
                <select wire:model.live="direction" 
                        class="appearance-none bg-white border border-gray-200 rounded-lg px-4 py-3 pr-8 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-300 min-w-[140px]">
                    <option value="desc">⬇️ Trier par ordre décroissant </option>
                    <option value="asc">⬆️ Trier par ordre croissant</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</div>
</div>