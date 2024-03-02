<header class="header padding10 coloring ">
      <div class="container dFlexCenterWithSpaceBetween ">
        <!-- logo - left side -->
        <span class="header__logo">
          <img src="images/GharNagar-logo.png" alt="GG">
        </span>
        <!-- right side -->
        <div class="dFlexCenter">
          <!-- navigation -->
          <nav class="header__nav">
            <ul class="dFlexCenter">
              <li class="header__active"><a href="index.html">Home</a></li>
              <li><a class="header-a">Rents</a></li>
              <li><a class="header-a">About Us</a></li>
              <li><a class="header-a">Contact Us</a></li>
              <!-- search bar is here -->
              <div class="search">
                <input type="text" class="search-box" placeholder="Search...">
                <button class="search-btn">
                  <i class="ph-magnifying-glass-bold"></i>
                </button>
                <button class="close-btn">
                  <i class="ph-x-bold"></i>
                </button>
              </div>
            </ul>
          </nav>
          <!-- login buttons -->
          <div class="dFlexCenter dflexMobileCenter">

          @if (Route::has('login'))

@auth
<x-app-layout>
   </x-app-layout>


@else
            <a href="{{route('login')}}" class="header__login">Login</a>
            <a href="{{route('register')}}" class="button__small">Sign Up</a>
@endauth
            @endif
            <div class="hamburger only__mobile">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </div>
          </div>
        </div>
      </div>
    </header>
