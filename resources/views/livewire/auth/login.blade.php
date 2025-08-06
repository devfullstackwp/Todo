<div class="min-h-screen bg-gray-50 dark:bg-gray-900 flex items-center justify-center">
    <div class="max-w-md w-full space-y-8">
        <!-- Logo -->
         <div class="flex justify-center">
        <svg width="63" height="40" viewBox="0 0 63 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M63 29.3506L38.117 5.08907C37.4008 4.39081 36.4402 4 35.44 4C31.9983 4 30.2991 8.18294 32.7659 10.583L59.4712 36.5666C60.7577 37.8183 59.8715 40 58.0765 40H9.65685C8.59599 40 7.57857 39.5786 6.82843 38.8284L1.17157 33.1716C0.421426 32.4214 0 31.404 0 30.3431V10.6484L24.883 34.9109C25.5992 35.6092 26.5598 36 27.5601 36C31.0017 36 32.7009 31.8171 30.2342 29.417L3.52882 3.43345C2.24227 2.18166 3.12849 0 4.92354 0L53.3431 0C54.404 0 55.4214 0.421427 56.1716 1.17157L61.8284 6.82843C62.5786 7.57857 63 8.59599 63 9.65685V29.3506Z" fill="#007BFF"></path>
</svg>
        </div>
        <div class="text-center">

            <h2 class="mt-6 text-3xl font-extrabold text-gray-900 dark:text-white">
                Heureux de vous revoir ! 
            </h2>
            <h4 class="text-lg font-medium text-gray-900 dark:text-white">
                Merci de vous connecter
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

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mot de passe</label>
                    <input wire:model.blur="password" type="password" id="password" name="password" 
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" 
                           placeholder="••••••••">
                </div>
                @error('password') 
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <div class="space-y-3">
                    <button type="submit" 
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        se connecter
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
                        Mot de passe oublié ?
                        <a href="{{ route('forgot') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400">Réinitialiser</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>