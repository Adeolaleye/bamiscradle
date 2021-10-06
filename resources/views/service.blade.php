@extends('layouts.main')
@section('title','Bamiscradles Creche in Abuja')
@section('content')
<div class="main">
    <div class="page-banner-area item-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>What We Offer</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>Our Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="choose-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-choose-item">
                        <h3>Day Time Care Service</h3>
                        <p>
                            We offer quality day time care service at Bamiscradle to all our wards, students are exposed to the best learning and play activities while they are in our care.
                        </p>
                        <p>Our services aren't restricted to the school premises, upon request we render outdoor day time care services too.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-image">
                        <img src="{{ asset('assets/img/earlyyears.jpg') }}" alt="image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-area bg-edeffb pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-image">
                        <img src="{{ asset('assets/img/bus.png') }}" alt="image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-choose-item">
                        <h3>Daily Pick Up/Drop Off</h3>
                        <p>
                            Safe transportation of students to and from the school is one of the services we offer at Bamiscradle.
                        </p>
                        <p>We relieve parents of the stress of dropping their children off in school in the morning and picking them up in the evening through our standby transport system.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-area bg-fdf6ed pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-choose-item">
                        <h3>After School Care</h3>
                        <p>
                            For children whose guardians or parents will not be at home to take care of them after school, Bamiscradle offers after school care services.
                        </p>
                        <p>The mission to create a home away from home is put to practice as we ensure that our wards have the best evening time experience.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-image">
                        <img src="{{ asset('assets/img/banner2.jpg') }}" alt="image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-image">
                        <img src="{{ asset('assets/img/child.jpg') }}" alt="image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-choose-item">
                        <h3>Onsite/Event Care</h3>
                        <p>
                            We are interested in the care and welfare of children. We can be invited to take care of children while their parents are engaged with activities or events outside the home.
                        </p>
                        <p>We offer outdoor care service to families, organizations, religious bodies who would love to have their children closely monitored and cared for during social gatherings, corporate events or religious activities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    @include('includes.enroll')
</div>
@endsection