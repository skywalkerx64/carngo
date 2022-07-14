<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">CARNGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Basculer la navigation">
        <span class="oi oi-menu"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Menu
      </font></font></button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="/" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="/voitures" class="nav-link">Voitures</a></li>
          <li class="nav-item"><a href="/locations" class="nav-link">Locations</a></li>
          @auth
          @if ($user->admin)
          <li class="nav-item "><a href="/admin" class="nav-link">Administration</a></li>
           @endif
          @endauth
        
         
          
          <li class="nav-item dropdown nav-user">
            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compte</a>
            @guest
            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
              <a class="dropdown-item" href="/register"><i class="fas fa-user mr-2"></i>S'inscrire</a>
              <a class="dropdown-item" href="/login"><i class="fas fa-cog mr-2"></i>Se connecter</a>                <form method="POST" action="/logout">
                  @csrf
           </div> 
            @endguest

            @auth
            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <form method="POST" action="/logout">
                  @csrf
                   <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="/logout" onclick="event.preventDefault();
                                       this.closest('form').submit();"><i class="fas fa-power-off mr-2"></i>Déconnexion</a>
               </form>
          </div>
            @endauth

        </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- Fin Navbar -->