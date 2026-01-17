<?php

// Hardcoded notice data removed from backend
use App\Models\Gallery;


new Gallery();

$images = Gallery::orderBy('created_at', 'desc')->take(6)->get();
  
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Genius English Boarding School</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

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
  <link href="{{asset('css/animate.css')}}" rel="stylesheet" />
  <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" />

  <!-- Customized  Stylesheet -->
  <link href="{{asset('css/Customstyle2.css')}}" rel="stylesheet" />

  <link href="{{asset('css/Customstyle.css')}}?v={{time()}}" rel="stylesheet" />
</head>

<body>


  <!-- notice -->
  <!-- <div class="header" style="">
    <div class="second-container">

      <b><button class="notice" style="text-align: center; font-size: 16px;">NOTICE </button></b>



      <marquee behavior="#" direction="#" class="marq" style="">
        <div style="display: flex; align-items: center;">
          <li style="margin-left: 5rem;">Welcome to Genius English Boarding School - Excellence in Education.</li>
          <li style="margin-left: 5rem;">Admissions are now open for the new academic session. Apply today!</li>
          <li style="margin-left: 5rem;">New school logo and branding launched. Visit our gallery for more info.</li>
        </div>
      </marquee>



    </div>
  </div> -->
  <!-- notice ends -->

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
      <span class="school-name d-none d-sm-block" style="font-weight: 600;">Genius English Boarding School</span>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
        <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
        <a href="{{url('/result')}}" class="nav-item nav-link">Result</a>
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

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(14, 60, 104, 0.7)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                  Excellence in Education
                </h5>
                <h1 class="display-3 text-white animated slideInDown">
                  Welcome to Genius English Boarding School
                </h1>
                <p class="fs-5 text-white mb-4 pb-2">
                  Empowering students with knowledge, skills, and values to excel in a global world. Join us for a
                  brighter future.
                </p>
                <a href="{{url('/apply-now')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Apply
                  now</a>
                <a href="{{url('/about')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel-2.jpg" alt="" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(14, 60, 104, 0.7)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                  Innovative Learning
                </h5>
                <h1 class="display-3 text-white animated slideInDown">
                  The Best Foundation for Your Child
                </h1>
                <p class="fs-5 text-white mb-4 pb-2">
                  We provide a nurturing environment where every child can flourish and reach their full potential.
                </p>
                <a href="{{url('/apply-now')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Apply
                  now</a>
                <a href="{{url('/about')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
              <h5 class="mb-3">Expert Educators</h5>
              <p>
                Highly qualified and experienced teaching staff dedicated to student success and mentorship.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-microscope text-primary mb-4"></i>
              <h5 class="mb-3">Modern Labs</h5>
              <p>
                Well-equipped science and computer laboratories to foster practical learning and innovation.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-basketball-ball text-primary mb-4"></i>
              <h5 class="mb-3">Sports & Arts</h5>
              <p>
                A wide range of extracurricular activities including sports, music, and creative arts for overall
                growth.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
              <h5 class="mb-3">Rich Library</h5>
              <p>
                A vast collection of books and digital resources to encourage a lifelong habit of reading and research.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->





  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-start text-primary pe-3">
            About Us
          </h6>
          <h1 class="mb-4">Welcome to Genius English Boarding School</h1>
          <p class="mb-4">
            Genius English Boarding School is dedicated to nurturing young minds with a blend of traditional values and
            modern teaching methodologies. We believe in providing a safe and stimulating environment where every
            student can excel.
          </p>
          <p class="mb-4">
            Our approach focuses on holistic development, ensuring that our students are well-prepared for the
            challenges of the future while remaining grounded in their culture and ethics.
          </p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Expert Educators
              </p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Modern Facilities
              </p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Student-Centered
              </p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Safe Environment
              </p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Creative Arts
              </p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Sports Excellence
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Categories Start -->
  <div class="container-xxl py-5 category">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">
          Our Levels
        </h6>
        <h1 class="mb-5">Education Levels</h1>
      </div>
      <div class="row g-3">
        <div class="col-lg-7 col-md-6">
          <div class="row g-3">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
              <a class="position-relative d-block overflow-hidden" href="">
                <img class="img-fluid" src="{{asset('img/cat-1.jpg')}}" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                  <h5 class="m-0">Pre-School</h5>

                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.2s">
              <a class="position-relative d-block overflow-hidden" href="">
                <img class="img-fluid" src="{{asset('img/cat-2.jpg')}}" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                  <h5 class="m-0">Primary Level</h5>

                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.1s">
              <a class="position-relative d-block overflow-hidden" href="">
                <img class="img-fluid" src="{{asset('img/cat-3.jpg')}}" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                  <h5 class="m-0">Secondary Level</h5>

                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.2s" style="min-height: 350px">
          <a class="position-relative d-block h-100 overflow-hidden" href="">
            <img class="img-fluid position-absolute w-100 h-100" src="{{asset('img/cat-4.jpg')}}" alt=""
              style="object-fit: cover" />
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
              <h5 class="m-0">Extracurricular (ECA)</h5>

            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Categories Start -->

  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">
          Instructors
        </h6>
        <h1 class="mb-5">Expert Instructors</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="{{asset('img/instructor.png')}}" alt="Principal" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Alisha KC</h5>
              <small>Principal</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="{{asset('img/team-2.jpg')}}" alt="Vice Principal" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Saraswati Sharma</h5>
              <small>Vice Principal</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="{{asset('img/team-3.jpg')}}" alt="Senior Teacher" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Rajesh Tamang</h5>
              <small>Senior Science Teacher</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="{{asset('img/team-4.jpg')}}" alt="Coordinator" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Deepa Kushwaha</h5>
              <small>Primary Coordinator</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">
          Testimonials
        </h6>
        <h1 class="mb-5">What Our Community Says!</h1>
      </div>
      <div class="owl-carousel testimonial-carousel position-relative">
        <div class="testimonial-item">
          <div class="testimonial-quote"><i class="fa fa-quote-left"></i></div>
          <div class="testimonial-img-wrapper">
            <img src="{{asset('img/parent.png')}}" alt="Parent Testimonial" />
          </div>
          <div class="text-center">
            <div class="testimonial-stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <h5>Ram Prasad Sharma</h5>
            <p class="profession">Proud Parent</p>
            <div class="testimonial-text">
              "Genius English Boarding School has provided an exceptional environment for my children's growth. The
              teachers are dedicated, and the curriculum is perfectly balanced with extracurricular activities."
            </div>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-quote"><i class="fa fa-quote-left"></i></div>
          <div class="testimonial-img-wrapper">
            <img src="{{asset('img/student.png')}}" alt="Student Testimonial" />
          </div>
          <div class="text-center">
            <div class="testimonial-stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <h5>Anjali Tamang</h5>
            <p class="profession">Grade 10 Student</p>
            <div class="testimonial-text">
              "I love studying here at Genius School. The labs and library are amazing, and my teachers always encourage
              me to push my boundaries. It's truly a second home for me."
            </div>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-quote"><i class="fa fa-quote-left"></i></div>
          <div class="testimonial-img-wrapper">
            <img src="{{asset('img/instructor.png')}}" alt="Instructor Testimonial" />
          </div>
          <div class="text-center">
            <div class="testimonial-stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <h5>Sita Dahal</h5>
            <p class="profession">Senior Coordinator</p>
            <div class="testimonial-text">
              "Teaching at Genius School is a rewarding experience. Our focus on holistic development ensures that every
              student gets personalized attention to excel both academically and creatively."
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->

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