<header class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grid Layout: Logo | Navigation | Auth -->
        <div class="grid grid-cols-3 items-center h-16 gap-4">
            <!-- Logo Section (Left) -->
            <div class="flex items-center justify-start">
                <div class="flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-3">
                        <x-partials.logo />
                    </div>
                    <span class="text-xl font-semibold text-gray-900 m-5">{{ config('app.name') }}</span>
                </div>
            </div>

            <!-- Navigation Links (Center) -->
            <nav class="hidden md:flex justify-center">
                <div class="flex items-center space-x-8">
                <a href="{{ route('home') }}" wire:navigate class="flex items-center text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Home
                </a>
                
                <div class="relative group">
                    <button class="flex items-center text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Categories
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu (hidden by default) -->
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        @foreach ($this->categories as $category)   
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ $category->name }}</a>
                            </div>
                        @endforeach
                        </div>
                </div>
                
            </nav>

            <!-- Auth Section (Right) -->
            <div class="flex items-center justify-end space-x-4">
                @auth
                    <!-- Notifications -->
                    <div class="relative">
                        <button class="p-2 text-gray-500 hover:text-gray-700 relative">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5-5 5-5h-5m-6 10v-2a6 6 0 00-6-6H5a6 6 0 006 6v2a1 1 0 102 0z"></path>
                            </svg>
                            <span class="absolute -top-1 -right-1 h-3 w-3 bg-red-500 rounded-full"></span>
                        </button>
                    </div>

                    <!-- User Menu -->
                    <div class="relative group">
                        <button class="flex items-center space-x-3 text-sm">
                            <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=6366f1&color=fff" alt="{{ auth()->user()->name }}">
                            <div class="hidden md:block text-left">
                                <div class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</div>
                                <div class="text-xs text-gray-500">{{ auth()->user()->email }}</div>
                            </div>
                        </button>
                        
                        <!-- User Dropdown -->
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-1">
                                <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mes articles</a>
                                <div class="border-t border-gray-100"></div>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Guest Links -->
                    <a href="{{ route('login') }}" class="flex items-center text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        Se connecter
                    </a>
                    <a href="{{ route('register') }}" class="flex items-center bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        Créer un compte
                    </a>
                @endauth

                <!-- Mobile menu button -->
                <button class="md:hidden p-2 text-gray-500 hover:text-gray-700" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden border-t border-gray-200">
            <div class="grid gap-1 py-4">
                <!-- Navigation Section -->
                <div class="grid gap-1">
                    <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Accueil
                    </a>
                    
                    <!-- Categories Mobile -->
                    <div class="px-4 py-2">
                        <div class="text-base font-medium text-gray-700 mb-2 flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            Categories d'articles
                        </div>
                        <div class="grid gap-1 ml-8">
                            <a href="#" class="block py-2 text-sm text-gray-600 hover:text-blue-600">Technologie</a>
                            <a href="#" class="block py-2 text-sm text-gray-600 hover:text-blue-600">Design</a>
                            <a href="#" class="block py-2 text-sm text-gray-600 hover:text-blue-600">Business</a>
                        </div>
                    </div>
                </div>
                
                @guest
                    <!-- Auth Section for Guests -->
                    <div class="border-t border-gray-200 pt-4 mt-4">
                        <div class="grid grid-cols-2 gap-3 px-4">
                            <a href="{{ route('login') }}" class="flex items-center justify-center px-4 py-2 text-base font-medium text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50 transition-colors duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="flex items-center justify-center px-4 py-2 text-base font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition-colors duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                                Register
                            </a>
                        </div>
                    </div>
                @else
                    <!-- Auth Section for Authenticated Users -->
                    <div class="border-t border-gray-200 pt-4 mt-4">
                        <div class="px-4">
                            <div class="flex items-center mb-4">
                                <img class="w-10 h-10 rounded-full mr-3" src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=6366f1&color=fff" alt="{{ auth()->user()->name }}">
                                <div>
                                    <div class="text-base font-medium text-gray-900">{{ auth()->user()->name }}</div>
                                    <div class="text-sm text-gray-500">{{ auth()->user()->email }}</div>
                                </div>
                            </div>
                            <div class="grid gap-1">
                                <a href="{{ route('profile') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md">Profile</a>
                                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md">Mes articles</a>
                                <a href="{{ route('logout') }}" class="block px-3 py-2 text-base font-medium text-red-600 hover:text-red-800 hover:bg-red-50 rounded-md">Logout</a>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</header>
