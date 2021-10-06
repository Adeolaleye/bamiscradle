@extends('layouts.main')
@section('title','Bamiscradles Creche in Abuja')
@section('content')
<div class="main">
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Contact</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <h3>Ready to Get Started?</h3>
                        @include('includes.alerts')
                        <form id="contactForm" method="POST" action="{{ route('contact') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Your name" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Your email address" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" class="form-control" required="" data-error="Please enter your phone number" placeholder="Your phone number" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" required="" data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                    {{-- @if(session()->get('message'))
                                    <div id="msgSubmit" class="h3 text-center hidden">
                                        <strong class="m-l-30">Great!</strong> {{ session()->get('message')}}
                                    </div>
                                    @endif --}}
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="contact-information">
                        <h3>Here to Help</h3>
                        <ul class="contact-list">
                            <li><i class="bx bx-map"></i> Location: <span>No 32, Joseph Wayas Street, Zone B, Legislative Quaters Apo Abuja.</span></li>
                            <li><i class="bx bx-phone-call"></i> Call Us: <a href="+234 915 820 8745">+234 915 820 8745</a></li>
                            <li>
                                <i class="bx bx-envelope"></i> Email Us:
                                <a href=""><span class="__cf_email__">hello@bamiscradle.com</span></a>
                            </li>
                        </ul>
                        <h3>Opening Hours:</h3>
                        <ul class="opening-hours">
                            <li><span>Monday - Friday:</span> 7am to 6pm</li>
                            <li><span>Saturday: </span> Onsite</li>
                            <li><span>Sunday:</span> Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15762.315442589519!2d7.470782416328762!3d9.010841889520922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0df852e64cef%3A0x9a7f25c87dc4f6fd!2sApo%20legislative%20quarters%20zone%20B!5e0!3m2!1sen!2sng!4v1621880894524!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</div>
@endsection