@extends('layouts.main')
@section('title','Bamiscradles Creche in Abuja')
@section('content')
<div class="main">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="main-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <p class="span ps-4 animate__animated animate__bounce animate__slow">Play, Learn and Grow</p>
                                        <h1 class="ps-4 animate__animated animate__fadeInUp animate__delay-1s ">Refunding Early Childhood Education
                                        </h1>
                                        <p class="ps-4 animate__animated animate__fadeInUp animate__delay-2s">
                                            We are passionate about the right upbringing of children, we provide positive, safe and stimulating environment to learn, play and grow.
                                        </p>
                                        <div class="banner-btn ps-4 animate__animated animate__fadeInUp animate__delay-3s">
                                            <a href="#whoweare" class="default-btn">
                                                Learn More
                                            </a>
                                            <a href="#activities" class="optional-btn">
                                                Our Activities
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-banner-image">
                                        <img class="animate__animated animate__fadeInRight" src="{{ asset('assets/img/child_2.png') }}" alt="image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-banner-shape">
                <div class="banner-bg-shape">
                    <img src="{{ asset('assets/img/main-banner/banner-bg-shape-1.png') }}" alt="image" />
                </div>
                <div class="shape-1">
                    <img src="{{ asset('assets/img/shapes/1.png') }}" alt="image" />
                </div>
                <div class="shape-2">
                    <img src="{{ asset('assets/img/shapes/2.png') }}" alt="image" />
                </div>
                <div class="shape-3">
                    <img src="{{ asset('assets/img/shapes/3.png') }}" alt="image" />
                </div>
                <div class="shape-4">
                    <img src="{{ asset('assets/img/shapes/4.png') }}" alt="image" />
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="main-banner-item banner-item-three">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content">
                            <p class="span animate__animated animate__bounce animate__slow">Play, Learn and Grow</p>
                            <h1 class="animate__animated animate__fadeInUp animate__delay-1s ">Child's Care Our Passion</h1>
                            <p class="animate__animated animate__fadeInUp animate__delay-2s">We foster our students for learning, encourage them to try new and exciting things and give them a solid foundation to build on.</p>
                            <div class="banner-btn animate__animated animate__fadeInUp animate__delay-3s">
                                <a href="{{ route('enrollnow') }}" target="_blank" class="default-btn">
                                    Enroll Now
                                </a>
                                <a href="#whatweoffer" class="optional-btn">
                                    Find Out More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner-shape">
            <div class="banner-bg-shape">
                <img src="{{ asset('assets/img/main-banner/banner-bg-shape-1.png') }}" alt="image" />
            </div>
            <div class="banner-bg-shape-2">
                <img src="{{ asset('assets/img/main-banner/banner-bg-shape-2.png') }}" alt="image" />
            </div>
            <div class="banner-child">
                <div class="child-1">
                    <img src="{{ asset('assets/img/shapes/4.png') }}" alt="image" />
                </div>
                <div class="child-2">
                    <img src="{{ asset('assets/img/shapes/3.png') }}" alt="image" />
                </div>
            </div>
        </div>
          </div>
          <div class="carousel-item">
            <div class="main-banner-item banner-item-two">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <p class="span ps-4 animate__animated animate__bounce animate__slow">Play, Learn and Grow</p>
                                        <h1 class="ps-4 animate__animated animate__fadeInUp animate__delay-1s ">Raising The Future Leaders</h1>
                                        <p class="ps-4 animate__animated animate__fadeInUp animate__delay-2s">
                                            We are not just nurturing children, we nurturing and raising the future leaders, that is why carefully select quality educators and care givers.
                                        </p>
                                        <div class="banner-btn ps-4 animate__animated animate__fadeInUp animate__delay-3s">
                                            <a href="{{ route('whoweare') }}#facilities" class="default-btn">
                                                Our Facilities
                                            </a>
                                            <a href="{{ route('contact') }}" class="optional-btn">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-banner-image-wrap">
                                        <img class="animate__animated animate__fadeInRight" src="{{ asset('assets/img/main-banner/main-banner-1.png') }}" alt="image" />
                                        <div class="banner-image-wrap-shape">
                                            <img src="{{ asset('assets/img/main-banner/main-banner-shape-2.png') }}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-banner-shape">
                <div class="banner-bg-shape">
                    <img src="{{ asset('assets/img/main-banner/banner-bg-shape-1.png') }}" alt="image" />
                </div>
                <div class="shape-5">
                    <img src="{{ asset('assets/img/main-banner/banner-shape5.png') }}" alt="image" />
                </div>
                <div class="shape-2">
                    <img src="{{ asset('assets/img/shapes/2.png') }}" alt="image" />
                </div>
                <div class="shape-6">
                    <img src="{{ asset('assets/img/shapes/5.png') }}" alt="image" />
                </div>
                <div class="shape-4">
                    <img src="{{ asset('assets/img/shapes/4.png') }}" alt="image" />
                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <section class="who-we-are ptb-100" id="whoweare">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="video-wrapper" data-aos="fade-up">
                        <video src="{{ asset('assets/img/video.mp4') }}" poster="{{ asset('assets/img/whoweare.jpeg') }}" style="box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);"></video>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="who-we-are-content" data-aos="fade-up" data-aos-delay="300">
                        <span>Who We Are</span>
                        <h3>Kindergarten and Childhood is Our Passion</h3>
                        <p>Every child deserves the best upbringing in the right environment, this contributes to his/her physiological, psychological, academical and emotional development.<br>We at Bamiscradle are passionate about the right upbringing of the children, with experienced care givers, involving them in the right activites in a stimulating environment.
                        </p>
                        <ul class="who-we-are-list">
                            <li data-aos="fade-up">
                                <span>1</span>
                                Warm Nursing Environment
                            </li>
                            <li data-aos="fade-up"  data-aos-delay="300">
                                <span>2</span>
                                Safety and Security
                            </li>
                            <li data-aos="fade-up" >
                                <span>3</span>
                                CCTV Monitoring 
                            </li>
                            <li data-aos="fade-up"  data-aos-delay="300">
                                <span>4</span>
                                Play Ground 
                            </li>
                        </ul>
                        <div class="who-we-are-btn" data-aos="fade-up">
                            <a href="{{ route('whoweare') }}" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="who-we-are-shape">
            <img src="{{ asset('assets/img/who-we-are-shape.png') }}" alt="image" />
        </div>
    </section>
    
    <section class="class-area bg-fdf6ed pt-100 pb-70" id="whatweoffer">
        <div class="container-xl">
            <div class="section-title pb-3" data-aos="fade-up">
                <span>Our Services</span>
                <h2>What We Offer</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="row pb-70">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-choose">
                                <div class="icon" data-aos="fade-up">
                                    <i class="bx bx-bulb"></i>
                                </div>
                                <div class="content" data-aos="fade-up"  data-aos-delay="300">
                                    <h3>Day Time Care Service</h3>
                                    <p>We offer quality day time care service at Bamiscradle to all our wards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-choose">
                                <div class="icon" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-happy"></i>
                                </div>
                                <div class="content" data-aos="fade-up"  data-aos-delay="500">
                                    <h3>Daily Pick Up/Drop Off</h3>
                                    <p>Safe transportation of students to and from the school is one of the services we offer at Bamiscradle.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-choose">
                                <div class="icon" data-aos="fade-up" data-aos-delay="600">
                                    <i class="bx bx-football"></i>
                                </div>
                                <div class="content" data-aos="fade-up"  data-aos-delay="700">
                                    <h3>After School Care</h3>
                                    <p>For children whose guardians or parents will not be at home to take care of them after school, </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-choose">
                                <div class="icon" data-aos="fade-up"  data-aos-delay="800">
                                    <i class="bx bx-book"></i>
                                </div>
                                <div class="content" data-aos="fade-up"  data-aos-delay="900">
                                    <h3>Onsite/Event Care</h3>
                                    <p>We are interested in the care and welfare of children.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="class-shape">
            <div class="shape-1">
                <img src="{{ asset('assets/img/class-shape-1.png') }}" alt="image" />
            </div>
            <div class="shape-2">
                <img src="{{ asset('assets/img/class-shape-2.png') }}" alt="image" />
            </div>
        </div>
    </section>
    <section class="overview-area ptb-50" id="parentcorner">
        <div class="container" data-aos="fade-left">
            <div class="overview-content">
                <div class="section-title" style="text-align:left" data-aos="fade-left"  data-aos-delay="300">
                    <span>You mean alot to us</span>
                    <h2>Parent Corner</h2>
                </div>
                <p data-aos="fade-left"  data-aos-delay="400">
                    We are committed to providing your child with the best care with professionalism, compassion and love. We therefore take great care to ensure the well-being, health and safety of our babies and toddlers. <br><br>
                    To familiarize with our operational policies, procedures, health and safety guidelines that govern the operation of our facility, here is an handbook for you, kindly download and read carefully. 

                </p>
                <div class="overview-btn" data-aos="fade-left"  data-aos-delay="500">
                    <a href="#" class="default-btn">Download Handbook</a>
                </div>
            </div>
        </div>
    </section>
    <section class="facilities-area pt-100 pb-70" id="activities" style="overflow-x:hidden">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <span>Daily Routines</span>
                <h2>Our Activites</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="single-facilities" data-aos="fade-left"  data-aos-delay="300">
                        <div class="number">
                            <span>01</span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                <a href="#">Sensory/Outdoor Play</a>
                            </h3>
                            <p>Wet and Dry Slide, Water Table, Sprinkler Play, Splash Balls and Roll Down a Hill.</p>
                        </div>
                    </div>
                    <div class="single-facilities" data-aos="fade-left"  data-aos-delay="400">
                        <div class="number">
                            <span class="bg-2">02</span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                <a href="#">Nature Walk</a>
                            </h3>
                            <p>A walk around, identifying of things, feeling and touching of stuff</p>
                        </div>
                    </div>
                    <div class="single-facilities" data-aos="fade-left"  data-aos-delay="500">
                        <div class="number">
                            <span class="bg-3">03</span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                <a href="#">Water/Messy Play</a>
                            </h3>
                            <p>Water Blob, water splash, swimming, wet and dry slide</p>
                        </div>
                    </div>
                    <div class="single-facilities" data-aos="fade-left"  data-aos-delay="600">
                        <div class="number">
                            <span class="bg-4">04</span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                <a href="#">Massage/Cuddling</a>
                            </h3>
                            <p>As a natural impulse, we have routine for massage to provide comfort & reassurance that helps the child feel safe & builds trust.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="facilities-image">
                        <img src="{{ asset('assets/img/activities.png') }}" alt="image" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-facilities" data-aos="fade-left"  data-aos-delay="700">
                        <div class="number">
                            <span class="bg-5">05</span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                <a href="#">Circle Time</a>
                            </h3>
                            <p>This develops positive relationships between the children and gives them the tools to engage with each other.</p> 
                            {{-- <p> (Singing, Finger Plays, Stories & Rhymes etc)Lorem ipsum dolor sit amet consectetur</p> --}}
                        </div>
                    </div>
                    <div class="single-facilities" data-aos="fade-left"  data-aos-delay="800">
                        <div class="number">
                            <span class="bg-6">06</span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                <a href="#"> TV/VCR – Children’s programs</a>
                            </h3>
                            <p>Disney Junior, Nickelodeon, music and educating videos</p>
                        </div>
                    </div>
                    <div class="single-facilities" data-aos="fade-left"  data-aos-delay="900">
                        <div class="number">
                            <span class="bg-7">07</span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                <a href="#">Stretching/Tickle Time</a>
                            </h3>
                            <p>We show kids the easy series that helps stretch the arms, legs, and back.</p>
                        </div>
                    </div>
                    <div class="single-facilities" data-aos="fade-left"  data-aos-delay="1000">
                        <div class="number">
                            <span class="bg-2">08</span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                <a href="#">Free Play</a>
                            </h3>
                            <p>This is an unstructured activity that encourages children to use their imagination, such as playing with blocks, dolls etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="value-shape">
            <div class="shape-1">
                <img src="{{ asset('assets/img/whoweare/value-shape-1.png') }}" alt="image" />
            </div>
            <div class="shape-2">
                <img src="{{ asset('assets/img/whoweare/value-shape-2.png') }}" alt="image" />
            </div>
            <div class="shape-3">
                <img src="{{ asset('assets/img/whoweare/value-shape-3.png') }}" alt="image" />
            </div>
        </div>
    </section>
    <section class="tour-area pb-70" id="schedule">
        <div class="container">
            <div class="section-title">
                <span>Schedules</span>
                <h2>Our Schedules</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-tour bg-blue" data-aos="fade-up">
                        <div class="image">
                            <img src="{{ asset('assets/img/schedule/2.png') }}" alt="image" />
                        </div>
                        <span>6 weeks - 15 months</span>
                        <p class="pb-3">Click below to view out Infact's Schedule</p>
                        <a href=""><h3 class="blue">Infants</h3></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-tour bg-green" data-aos="fade-up" data-aos-delay="300">
                        <div class="image">
                            <img src="{{ asset('assets/img/schedule/4.png') }}" alt="image" />
                        </div>
                        <span>15 months - 18 months</span>
                        <p class="pb-3">Click below to view out Toodler's Schedule</p>
                        <a href="#"><h3 class="green">Toodler</h3></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-tour bg-purple" data-aos="fade-up" data-aos-delay="400">
                        <div class="image">
                            <img src="{{ asset('assets/img/schedule/3.png') }}" alt="image" />
                        </div>
                        <span>18 Months - 2years</span>
                        <p class="pb-3">Click below to view out Early year's Schedule</p>
                        <a href="#"><h3 class="purple">Early Years</h3></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.enroll')
</div>
@endsection