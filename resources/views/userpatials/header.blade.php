<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
    <i class="bi bi-phone d-flex align-items-center"><span>Alpha Developers : +237 651-823-870</span></i>
    <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 16:00 PM</span></i>
  </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <div class="logo me-auto">
      <h1><a href="index.html"><span>UBa</span>-Food</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
        <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
        <li><a class="nav-link scrollto" href="#events">Events</a></li>
        <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
        <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
        <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-dropdown-link>
          </form>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <li class="dropdown"><a href="#" class="book-a-table-btn scrollto">{{ Auth::user()->name }}</a><i class="bi bi-chevron-down"></i></a>
  

  </div>
</header><!-- End Header -->