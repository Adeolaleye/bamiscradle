@extends('layouts.main')
@section('title','Bamiscradles Creche in Abuja')
@section('content')
<div class="main">
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>About Us</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>Who we are</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="who-we-are ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-content" data-aos="fade-up" data-aos-delay="300">
                        <span>Who We Are</span>
                        <h3>Kindergarten and Childhood is Our Passion</h3>
                        <p>
                            Every child deserves the best upbringing in the right environment, this contributes to his/her physiological, psychological, academical and emotional development.<br>We at Bamiscradle are passionate about the right upbringing of the children, with experienced care givers, involving them in the right activites in a stimulating environment.
                        </p><br>
                        <p>
                            We are of the belief that no child was born academically, emotionally or psychologically weak. How they are brought up matters. This is why we exist, to fill in the missing gap.<br>We foster our students for learning, encourage them to try new and exciting things and give them a solid foundation to build on.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-wrapper" data-aos="fade-up">
                            <video src="{{ asset('assets/img/video.mp4') }}" poster="{{ asset('assets/img/whoweare.jpeg') }}" style="box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);"></video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="value-area ptb-100 bg-edeffb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="value-image">
                        <img src="{{ asset('assets/img/about03.png') }}" alt="image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="value-item">
                        <div class="value-content">
                            <span>Our Core Values</span>
                            <h3>We are Refunding Early Childcare Education</h3>
                        </div>
                        <div class="value-inner-content">
                            <div class="number">
                                <span><img src="{{ asset('assets/img/vision.png') }}" alt="image" /></span>
                            </div>
                            <h4>Our Vision</h4>
                            <p>Creating a safe, fun and enabling environment that spurs learning, to explore each child's individual needs and abilities in a unique way.
                            </p>
                        </div>
                        <div class="value-inner-content">
                            <div class="number">
                                <span class="bg-2"><img src="{{ asset('assets/img/mission.png') }}" alt="image" /></span>
                            </div>
                            <h4>Our Mission</h4>
                            <p>Creating a home away from home while intellectually Nurturing each child to discover and grow their Full potential.</p>
                        </div>
                        <div class="value-inner-content">
                            <div class="number">
                                <span class="bg-3"><img src="{{ asset('assets/img/core.png') }}" alt="image" /></span>
                            </div>
                            <h4>Our Goal</h4>
                            <p>Our goal is to build skills that set children up for success in kindergarten and beyond.</p>
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
    <section class="class-area bg-fdf6ed pt-100 pb-100" id="facilities">
        <div class="container">
            <div class="section-title pb-3" data-aos="fade-up">
                <span>What we Offer</span>
                <h2>Our Facilities</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/background.jpg') }}" alt="image" />
                            </a>
                        </div>
                        <div class="class-content bg-blue">
                            <h3>
                                <a href="#">Warm Nursing Environment</a>
                            </h3>
                            <p>Bamiscradle is well designed and equipped with facilities and helping hands to care for and nurture your kids, this environment is furmugated periodically for 100% safety from germs, washing of hand frequently is made complusory.</p>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/playground.jpg') }}" alt="image" />
                            </a>
                        </div>
                        <div class="class-content bg-green">
                            <h3>
                                <a href="#">Play Ground</a>
                            </h3>
                            <p>Our playground is properly designed to allow children to have access to different facilities and activities while learning, the playground is equipped with play materials that suit each age group such that it creates an atmosphere of learning while playing.</p>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/cctvm.jpg') }}" alt="image" />
                            </a>
                        </div>
                        <div class="class-content  bg-purple">
                            <h3>
                                <a href="#">CCTV Monitoring</a>
                            </h3>
                            <p>The safety of every child in our care is of utmost priority to us. We have CCTV monitoring devices fixed at specific locations in Bamiscradle, and parents can see thier kids on thier devices from where ever they are.
                                </p>
                            
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
    
    <section class="fun-facts-area pt-100 pb-70">
        <div class="container-xl">
            
            <div class="section-title pb-3" data-aos="fade-up">
                <span style="color: #ffeddf;">Our Value</span>
                <h2 style="color:#ffeddf;">Why Choose Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact bg-fff">
                        <img src="{{ asset('assets/img/bus.png') }}" alt="image" class="img-icon" />
                        <h4>Full Day session</h4>
                        <p>We offer 7am to 6pm care from mondays to saturdays.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact bg-fff">
                        <img src="{{ asset('assets/img/educator.png') }}" alt="image" class="img-icon" />
                        <h4>Quality/Professional Educators</h4>
                        <p>We have both experienced and quality care givers, educators and cleaners.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact bg-fff">
                        <img src="{{ asset('assets/img/support-5.png') }}" alt="image" class="img-icon" />
                        <h4>Support for kids personality</h4>
                        <p>We create time to study each child's personality and provide proper support accordingly.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact bg-fff">
                        <img src="{{ asset('assets/img/image-1.png') }}" alt="image" class="img-icon" />
                        <h4>Active Educational Activities</h4>
                        <p>All activites at bamiscradles are educational ones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.enroll')
</div>
@endsection