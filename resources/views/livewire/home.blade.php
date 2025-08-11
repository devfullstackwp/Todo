<div>
    @livewire('partials.header')
    <!-- Main Content -->
    <main class="bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Hero Section -->
            <div class="bg-white rounded-lg shadow-sm p-8 mb-8">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $heading }}</h1>
                    <p class="text-xl text-gray-600 mb-8">ss sur notre blog. Découvrez nos derniers articles et actualités.</p>
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
            
            @livewire('criteria', ['sort' => $sort, 'direction' => $direction, 'search' => $search])
            
            <!-- Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @foreach ($articles as $article)
                    @livewire('card', ['article' => $article, 'search' => $search], key($article->id))
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div  class="mt-8 flex justify-center bg-gray-50 p-4 mb-8">
                {{ $articles->links('vendor.pagination.custom') }}
            </div>
            
            @include('livewire.partials.newsletter')
        </div>
    </main>
    @include('livewire.partials.footer')
</div>
