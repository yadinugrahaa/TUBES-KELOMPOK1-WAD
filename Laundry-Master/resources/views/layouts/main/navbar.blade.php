  
  @auth
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/Home"><span>Zepatoe Shoes</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/Home">Home</a></li>
          <li><a class="nav-link scrollto" href="/Service">Service</a></li>
           

          @auth
          <li class="dropdown"><a href="#"><span>{{ auth()->user()->first_name }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/Profile">Profil</a></li>
              <li><a href="/OrderSaya">Transaksi</a></li>
              <li>
                                        <form action="/Logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right pe-2"></i>Keluar</button>
                                        </form>
               </li>
            </ul>
          </li>
          @else
          
           <li>
              <a class="nav-link scrollto active" href="/Login">Login
              </a>
            </li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  @else
  
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/Home"><span>Zepatoe Shoes</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Services</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonial</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
   
        
          @auth
          <li class="dropdown"><a href="#"><span>{{ auth()->user()->first_name }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/Profile">Profil</a></li>
              <li><a href="/OrderSaya">Transaksi</a></li>
              <li>
                                        <form action="/Logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right pe-2"></i>Keluar</button>
                                        </form>
               </li>
            </ul>
          </li>
          @else
          
           <li>
              <a class="nav-link scrollto active" href="/Login">Login
              </a>
            </li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      

    </div>
  </header><!-- End Header -->
 @endauth
  