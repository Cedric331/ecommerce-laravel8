<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
     <a class="navbar-brand" href="{{ route('dashboard') }}"><x-application-logo class="block h-10 w-auto fill-current text-gray-600" /></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
         </li>
         @auth
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->getFullName() }}
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="#">{{ __('Mon compte') }}</a></li>
             <li><a class="dropdown-item" href="#">{{ __('Mon panier') }}</a></li>
             <li><hr class="dropdown-divider"></li>
             <form method="POST" action="{{ route('logout') }}">
               @csrf
               @method('POST')
               <li>
                  <button type="submit" class="dropdown-item">
                   {{ __('Déconnexion') }}
                  </button>
               </li>
            </form>
           </ul>     
         </li>
         @else
         <a href="{{ route('login') }}" class="nav-link underline">Login</a>

         @if (Route::has('register'))
             <a href="{{ route('register') }}" class="nav-link underline">Register</a>
         @endif
         @endauth
       </ul>
       <form class="d-flex">
         <input class="form-control me-2" type="search" placeholder="Rechercher un produit" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Rechercher</button>
       </form>
     </div>
   </div>
 </nav>