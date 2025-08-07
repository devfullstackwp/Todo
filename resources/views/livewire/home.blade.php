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
      <!-- Navbar -->
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>
          <div class="flex-row navbar-nav order-md-last">
            <div class="d-none d-md-flex">
              <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="px-0 nav-link" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                  <span class="badge bg-red"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Last updates</h3>
                    </div>
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 1</a>
                            <div class="d-block text-muted text-truncate mt-n1">
                              Change deprecated html tags to text decoration classes (#29604)
                            </div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 2</a>
                            <div class="d-block text-muted text-truncate mt-n1">
                              justify-content:between ⇒ justify-content:space-between (#29734)
                            </div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions show">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 3</a>
                            <div class="d-block text-muted text-truncate mt-n1">
                              Update change-version.js (#29736)
                            </div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 4</a>
                            <div class="d-block text-muted text-truncate mt-n1">
                              Regenerate package-lock.json (#29730)
                            </div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="p-0 nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Paweł Kuna</div>
                  <div class="mt-1 small text-muted">UI Designer</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Mes articles</a>
                <div class="dropdown-divider"></div>
                <a href="" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar navbar-light">
            <div class="container-xl">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="./" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 4h6v6h-6z"></path>
                      <path d="M14 4h6v6h-6z"></path>
                      <path d="M4 14h6v6h-6z"></path>
                      <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                   </svg>
                    <span class="nav-link-title">
                      Catégories
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="">
                      Laravel
                    </a>
                    <a class="dropdown-item" href="">
                      PHP 
                    </a>
                    <a class="dropdown-item" href="">
                      Vue 
                    </a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="./" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                      <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                   </svg>
                    <span class="nav-link-title">
                      Login
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                      <path d="M16 19h6"></path>
                      <path d="M19 16v6"></path>
                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                   </svg>
                    <span class="nav-link-title">
                      Register
                    </span>
                  </a>
                </li>
              </ul>
              <!-- <div class="order-first my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-md-last">
                <form action="./" method="get" autocomplete="off" novalidate>
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                    </span>
                    <input type="text" value="" class="form-control" placeholder="Rechercher" aria-label="Search in website">
                  </div>
                </form>
              </div> -->
            </div>
          </div>
        </div>
      </header>
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Blog
                </h2>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3" style="background-image: url(./static/avatars/000m.jpg)"></span>
                      <div>
                        <div>Paweł Kuna</div>
                        <div class="text-muted">3 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          467
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          67
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/brainstorming-session-with-creative-designers.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3">JL</span>
                      <div>
                        <div>Jeffie Lewzey</div>
                        <div class="text-muted">5 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          335
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          80
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3" style="background-image: url(./static/avatars/002m.jpg)"></span>
                      <div>
                        <div>Mallory Hulme</div>
                        <div class="text-muted">yesterday</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          369
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          32
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3" style="background-image: url(./static/avatars/003m.jpg)"></span>
                      <div>
                        <div>Dunn Slane</div>
                        <div class="text-muted">1 week and 3 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          479
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          71
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3" style="background-image: url(./static/avatars/000f.jpg)"></span>
                      <div>
                        <div>Emmy Levet</div>
                        <div class="text-muted">5 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          481
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          57
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3" style="background-image: url(./static/avatars/001f.jpg)"></span>
                      <div>
                        <div>Maryjo Lebarree</div>
                        <div class="text-muted">3 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          405
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          23
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/young-woman-working-in-a-cafe.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3">EP</span>
                      <div>
                        <div>Egan Poetz</div>
                        <div class="text-muted">6 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          332
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          51
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/everything-you-need-to-work-from-your-bed.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3" style="background-image: url(./static/avatars/002f.jpg)"></span>
                      <div>
                        <div>Kellie Skingley</div>
                        <div class="text-muted">1 week and 2 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          369
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          70
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3" style="background-image: url(./static/avatars/003f.jpg)"></span>
                      <div>
                        <div>Christabel Charlwood</div>
                        <div class="text-muted">today</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          555
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          73
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3">HS</span>
                      <div>
                        <div>Haskel Shelper</div>
                        <div class="text-muted">2 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          383
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          37
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/group-of-people-sightseeing-in-the-city.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3" style="background-image: url(./static/avatars/006m.jpg)"></span>
                      <div>
                        <div>Lorry Mion</div>
                        <div class="text-muted">5 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          424
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          45
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/color-palette-guide-sample-colors-catalog-.jpg" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="rounded avatar me-3" style="background-image: url(./static/avatars/004f.jpg)"></span>
                      <div>
                        <div>Leesa Beaty</div>
                        <div class="text-muted">6 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          496
                        </a>
                        <a href="#" class="ms-3 text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                          64
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <ul class="mt-4 pagination ms-auto" style="margin: 0 auto; text-align:center;">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                    prev
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    next
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="flex-row-reverse text-center row align-items-center">
              <div class="mt-3 col-12 col-lg-auto mt-lg-0">
                <ul class="mb-0 list-inline list-inline-dots">
                  <li class="list-inline-item">
                    Copyright &copy; 2023
                    <a href="." class="link-secondary">Tabler</a>.
                    All rights reserved.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

</div>
