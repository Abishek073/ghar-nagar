<header class="header padding10 coloring ">
  <div class="container dFlexCenterWithSpaceBetween ">
    <!-- logo - left side -->
    <span class="header__logo">
      <a href="{{url('homepage')}}"><img src="images/GharNagar-logo.png" alt="Website Logo" ></a>
    </span>
    <!-- right side -->
    <div class="dFlexCenter">
      <!-- navigation -->
      <nav class="header__nav">
        <ul class="dFlexCenter">
          <li class="header__active"><a href="{{url('homepage')}}">Home</a></li>
          <li><a class="header-a" href="#house">Rents</a></li>
          <li><a class="header-a" href="#about-us">About us</a></li>
          <li><a class="header-a" href="#contact-us">Contact</a></li>
          <!-- search bar is here -->

        </ul>

      </nav>
      <!-- login buttons -->
      <div class="dFlexCenter dflexMobileCenter">

        @if (Route::has('login'))

        @auth
        <x-app-layout>
        </x-app-layout>


        @else
        <ul class="dFlexCenter">
        <li><a href="{{route('login')}}" class="header__login">Login</a></li>
        <li><a href="{{route('register')}}" class="header__login">Register</a></li>
        </ul>
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