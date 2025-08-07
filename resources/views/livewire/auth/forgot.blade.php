<div class="min-h-screen bg-gray-50 dark:bg-gray-900 flex items-center justify-center">
    <div class="max-w-md w-full space-y-8">
        <!-- Logo -->
        <x-partials.logo />
        
        <div class="text-center">

            @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif()


            @if(session('error'))
                <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif()

            <h2 class="mt-6 text-3xl font-extrabold text-gray-900 dark:text-white">
                Vous avez oubliés votre mot de passe ?
            </h2>
            <h4 class="text-lg font-medium text-gray-900 dark:text-white">
                Merci de nous renseigner votre email pour vous renvoyer un lien de réinitialisation
            </h4>
        </div>
        
        <!-- Formulaire -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <form wire:submit="store" class="space-y-6">
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input wire:model.blur="email" type="email" id="email" name="email" 
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" 
                           placeholder="votre@email.com">
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <div class="space-y-3">
                    <button type="submit" 
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Réinitialiser
                    </button>
                </div>
                
                <div class="text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Créer un compte
                        <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400">Créer un compte</a>
                    </p>
                </div>
                <div class="text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Se connecter
                        <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400">Créer un compte</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>