<div class="flex justify-center space-x-4 mb-8">
            <!-- Filters Author, Date, Category -->
                <button id="dropdownDefaultButton-Filtre" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Filtrer par : {{ $sort ? ucfirst($sort) : 'Date' }}
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                <!-- Dropdown menu Filters -->
                <div id="dropdown-Filtre" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton-{{ $this->getId() }}">
                      <li>
                        <button wire:click="changeSort('date')" class="dropdown-item block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Date</button>
                      </li>
                      <li>
                        <button wire:click="changeSort('author')" class="dropdown-item block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Auteur</button>
                      </li>
                      <li>
                        <button wire:click="changeSort('category')" class="dropdown-item block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Catégorie</button>
                      </li>
                    </ul>
                </div>

            <!-- Filters Asc:Desc -->
                <button id="dropdownDefaultButton-asc-desc" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Filtrer par : {{ $direction ? ucfirst($direction) : 'Desc' }}
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                <!-- Dropdown Asc, Desc -->
                <div id="dropdown-asc-desc" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton-{{ $this->getId() }}">
                      <li>
                        <button wire:click="changeDirection('asc')" class="dropdown-item block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ascendant</button>
                      </li>
                      <li>
                        <button wire:click="changeDirection('desc')" class="dropdown-item block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Descendant</button>
                      </li>
                    </ul>
                </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.getElementById('dropdownDefaultButton-asc-desc');
    const dropdownMenu = document.getElementById('dropdown-asc-desc');
    
    if (dropdownButton && dropdownMenu) {
        // Créer l'instance dropdown avec triggerType: 'none'
        const options = {
            triggerType: 'none',
            onShow: () => {
                console.log('Dropdown shown');
            },
            onHide: () => {
                console.log('Dropdown hidden');
            }
        };
        
        const dropdown = new Dropdown(dropdownMenu, dropdownButton, options);
        
        // Gérer le clic sur le bouton manuellement
        dropdownButton.addEventListener('click', function(e) {
            e.preventDefault();
            dropdown.toggle();
        });
        
        // Fermer le dropdown après sélection d'un élément
        const dropdownItems = dropdownMenu.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                // Petite temporisation pour laisser Livewire traiter l'événement
                setTimeout(() => {
                    dropdown.hide();
                }, 100);
            });
        });
    }
});

// Réinitialiser le dropdown après chaque mise à jour Livewire
document.addEventListener('livewire:navigated', function() {
    // Le script sera réexécuté automatiquement
});



document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.getElementById('dropdownDefaultButton-Filtre');
    const dropdownMenu = document.getElementById('dropdown-Filtre');
    
    if (dropdownButton && dropdownMenu) {
        // Créer l'instance dropdown avec triggerType: 'none'
        const options = {
            triggerType: 'none',
            onShow: () => {
                console.log('Dropdown shown');
            },
            onHide: () => {
                console.log('Dropdown hidden');
            }
        };
        
        const dropdown = new Dropdown(dropdownMenu, dropdownButton, options);
        
        // Gérer le clic sur le bouton manuellement
        dropdownButton.addEventListener('click', function(e) {
            e.preventDefault();
            dropdown.toggle();
        });
        
        // Fermer le dropdown après sélection d'un élément
        const dropdownItems = dropdownMenu.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                // Petite temporisation pour laisser Livewire traiter l'événement
                setTimeout(() => {
                    dropdown.hide();
                }, 100);
            });
        });
    }
});

// Réinitialiser le dropdown après chaque mise à jour Livewire
document.addEventListener('livewire:navigated', function() {
    // Le script sera réexécuté automatiquement
});
</script>