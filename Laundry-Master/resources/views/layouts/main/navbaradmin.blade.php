   <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/HomeAdmin"><span>Zepatoe Shoes</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/HomeAdmin">Home</a></li>
          <li><a class="nav-link scrollto" href="/DataSelesai">Data Selesai</a></li>
           

         
          <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/ProfileAdmin">Profil</a></li>
              <li>
                                        <form action="/Logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right pe-2"></i>Keluar</button>
                                        </form>
               </li>
            </ul>
          </li>
         
          
           <li>

            </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
