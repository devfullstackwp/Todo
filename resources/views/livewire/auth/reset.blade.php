<div class="min-h-screen bg-gray-50 dark:bg-gray-900 flex items-center justify-center">
    <div class="max-w-md w-full space-y-8">

        <x-partials.logo />
        <div class="text-center">

            <h2 class="mt-6 text-3xl font-extrabold text-gray-900 dark:text-white">
                Réinitialisation du mot de passe
            </h2>
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

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mot de passe</label>
                    <input wire:model.blur="password" type="password" id="password" name="password" 
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" 
                           placeholder="••••••••">
                </div>
                @error('password') 
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirmer le mot de passe</label>
                    <input wire:model.blur="password_confirmation" type="password" id="password_confirmation" name="password_confirmation" 
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" 
                           placeholder="••••••••">
                </div>
                @error('password_confirmation') 
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
                        Déjà un compte ? 
                        <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400">Se connecter</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>