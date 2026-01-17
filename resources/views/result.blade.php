<?php

use App\Models\Result;


if (session()->has('symbolNo')) {
  $symbol = session()->get('symbolNo');
  new Result();

  $users = Result::where('symbolNo', '=', $symbol)->first();
}


use App\Models\Gallery;


new Gallery();

$images = Gallery::orderBy('created_at', 'desc')->take(6)->get();




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Genius English Boarding School</title>



  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Animation and Carousel Stylesheet -->
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/owl.carousel.css" rel="stylesheet" />

  <!-- Customized  Stylesheet -->
  <link href="{{asset('css/Customstyle2.css')}}" rel="stylesheet" />
  <link href="{{asset('css/Customstyle.css')}}?v={{time()}}" rel="stylesheet" />
</head>

<body>
  <!-- Top Bar Start -->
  <div class="top-bar d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <a href="tel:9702289003"><i class="fa fa-phone-alt"></i> 9702289003</a>
          <a href="mailto:geniusschool935@gmail.com"><i class="fa fa-envelope"></i> geniusschool935@gmail.com</a>
          <span><i class="fa fa-map-marker-alt"></i> Tarkeshower-09 Jarankhu, Kathmandu</span>
        </div>
        <div class="col-md-4 text-end">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Top Bar End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <img src="{{asset('img/lo.png')}}" class="logo" alt="" />
      <span class="school-name d-none d-sm-block">Genius English Boarding School</span>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
        <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
        <a href="{{url('/result')}}" class="nav-item nav-link active">Result</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="{{url('/team')}}" class="dropdown-item">Our Team</a>
            <a href="{{url('/gallery')}}" class="dropdown-item">Gallery</a>
            <a href="#" class="dropdown-item">ECA</a>
            <a href="#" class="dropdown-item">vacancy</a>
          </div>
        </div>
        <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
      </div>
      <a href="{{url('/apply-now')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Apply now<i
          class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-3 text-white animated slideInDown">Result</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item">
                <a class="text-white" href="{{url('/')}}">Home</a>
              </li>

              <li class="breadcrumb-item text-white active" aria-current="page">
                Result
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- result  -->

  <body>
    @if(session()->has('notRegister'))
      <p style="text-align: center;
                font-size: 1.5rem;
                color: red;" class="sess-err">{{Session()->get('notRegister')}}</p>
    @endif
    @if(session()->has('notMatch'))
      <p class="sess-err" style="text-align: center;
                font-size: 1.5rem;
                color: red;">{{Session()->get('notMatch')}}</p>
    @endif



    <div class="box">

      <span class="borderline"></span>
      <form action="{{url('/admin/showResult')}}" method="post">
        @csrf
        <h2>Check your Result</h2>
        <div class="inputbox">
          <input type="text" name="studentName" required="required">
          <span>Your Name</span>
          <i></i>
        </div>
        <div class="inputbox">
          <input type="Text" name="symbolNo" required="required">
          <span>Symbol No:</span>
          <i></i>
        </div>

        <input type="submit" value="Check">

      </form>


    </div>

    @if(session()->has('symbolNo'))
      <div style="text-align: center; margin-top: 1.5rem; border: 1px solid black">

        <img src="{{asset('/images/Result/' . $users->resultPic)}}" style="height: 700px; width: 900px;">
      </div>


    @endif


    <!-- result end  -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5" style="display: flex; justify-content: space-between;">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Quick Link</h4>
            <a class="btn btn-link" href="about.html">About Us</a>
            <a class="btn btn-link" href="contact.html">Contact Us</a>
            <a class="btn btn-link" href="">Privacy Policy</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">FAQs & Help</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Contact</h4>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>Tarkeshower-09 Jarankhu, Kathmandu
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>9702289003
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>geniusschool935@gmail.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
              <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Gallery</h4>
            <div class="row g-2 pt-2">
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="" />
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="" />
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="" />
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="" />
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="" />
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="" />
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Newsletter</h4>
          <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
          
        </div> -->
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <!-- <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            
            <p></p>


          </div> -->

            <!-- <div class="col-md-6 text-center text-md-end">
            <div class="footer-menu">
              <a href="index.html">Home</a>
              <a href="">Cookies</a>
             
            </div>
          </div> -->
          </div>&copy; <a class="border-bottom" href="#">Genius English Boarding School</a>
          <p>All
            Right Reserved.</p>

        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/easing.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


  </body>

</html>