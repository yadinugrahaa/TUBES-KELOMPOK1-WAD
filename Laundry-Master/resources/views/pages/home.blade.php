@extends('layouts.main')

@section('content')
<!-- ======= Hero Section ======= -->
@auth
<section id="hero">
<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
      <div data-aos="zoom-out">
        <h1>Bersih, wangi dan memikat <span> hati</span></h1>
        <h2>Welcome To Zepatoe Shoes!</h2>
        <div class="text-center text-lg-start">
          <a href="/Service" class="btn-get-started scrollto">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
      <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
  </g>
</svg>

</section><!-- End Hero -->


@else
<section id="hero">
<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
      <div data-aos="zoom-out">
        <h1>Bersih, wangi dan memikat <span> hati</span></h1>
        <h2>Welcome To Zepatoe Shoes!</h2>
        <div class="text-center text-lg-start">
          <a href="#pricing" class="btn-get-started scrollto">Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
      <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
  </g>
</svg>

</section><!-- End Hero -->
@endauth

<main id="main">
        <!-- ======= Pricing Section ======= -->
    
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 class="text-center pt-2 pb-2">Services</h2> 
          <p  class="text-center pt-2 pb-2">Layanan Kami</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
                
              <h3 class="pt-2 pb-2 " >Standart Clean</h3>
              <img id="img-layanan" src="images/standart.png" alt="">
              <h4 ><sup>Rp.</sup>30.000<span> / Shoes</span></h4>
              <ul>
                <li>Canvas</li>
                <li>Polyester</li>
              </ul>
              <div class="btn-wrap">
                <a href="/Service" class="btn-buy">Order Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
              <h3 class="pt-2 pb-2">Deep Clean</h3>
              <img id="img-layanan" src="images/deep.png" alt="">
              <h4><sup>Rp.</sup>40.000<span> / Shoes</span></h4>
              <ul>
                <li>Leather</li>
                <li>Suede</li>
                <li>Nubac</li>
              </ul>
              <div class="btn-wrap">
                <a href="/Service" class="btn-buy">Order Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="300">
              <h3 class="pt-2 pb-2" >Premium Clean</h3>
              <img id="img-layanan" src="images/premium.png" alt="">
              <h4><sup>Rp.</sup>45.000<span> / Shoes</span></h4>
              <ul>
                <li>All Material</li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="btn-wrap">
                <a href="/Service" class="btn-buy">Order Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="400">
              <span class="advanced" class="bi bi-info-circle text-primary">Promo</span>
              <h3 class="pt-2 pb-2">Treatment</h3>
              <img id="img-layanan" src="images/weekend.png" alt="">
              <h4><sup>Rp.</sup>50.000<span> / Shoes</span></h4>
              <ul>
                <li>Unyellowing</li>
                <li>Special Treatment</li>
    
              </ul>
              <div class="btn-wrap">
                <a href="/Service" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->
    
    
    <section section id="about" class="about">
    <div class="container pb-5">
        
 
        <div class="section-title" data-aos="fade-up" >
          <h2 class="text-center pt-2 pb-2">About </h2>
          <p class="text-center pt-2 pb-2">Zepatoe Shoes</p>
        </div>

        <p class="text-center pt-2 pb-2" id="desc-carakerja">Zeopatoe didirakan oleh 6 mahasiswa lulusan Sistem Informasi yang mempunyai motivasi tinggi untuk membuat perubahan disekitarnya, berharap inovasi yang dibuat dapat membantu orang banyak.
        </p>


        <div class="section-title" data-aos="fade-up" >
          <p class="text-center pt-2 pb-2">Bagaimana Cara kami bekerja</p>
        </div>

        <p class="text-center pt-2 pb-2" id="desc-carakerja">Simpan uang dan waktu, dengan gratis jemput di rumah atau
            kantor anda
        </p>
        <div class="row justify-content-around">
            <div class="col-4">
                <div class="text-center">
                    <img id="img-carakerja" src="images/order.png" alt="">
                </div>
                <p class="text-center pt-3" id="item-carakerja"><span id="slip-color-carakerja">Order - </span>Choose
                    our<br>service then order</p>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img id="img-carakerja" src="images/pickup.png" alt="">
                </div>
                <p class="text-center pt-3" id="item-carakerja"><span id="slip-color-carakerja">We Pickup - </span>The
                    driver<br>picks up your shoes</p>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img id="img-carakerja" src="images/deliver.png" alt="">
                </div>
                <p class="text-center pt-3" id="item-carakerja"><span id="slip-color-carakerja">We Deliver - </span>Your
                    shoes are<br>finished, ready to wear
                </p>
            </div>
        </div>
    </div>
</section>    
    @auth
    @else
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->



    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Customer 1</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Customer 2</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Customer 3</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Customer 4</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Customer 5</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our Great Team</p>
        </div>

        <div class="row" >

          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>YADI NUGRAHA</h4>
                <span>Web Developer</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>TIARA HATI GIWANGKAR</h4>
                <span>UI/UX Designer</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>SHAZKIA SEPTIAWENI</h4>
                <span>System Analyst</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>YUNUS ARDIANSYAH</h4>
                <span>Data Engineer</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-5.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>GELDISEN ALFRANANTA</h4>
                <span>UX Researcher</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-6.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>M LUKMAN BAHRUL HIKAM</h4>
                <span>Project Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Team Section -->
`   @endauth




  </main><!-- End #main -->