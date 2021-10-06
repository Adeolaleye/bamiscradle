@extends('layouts.main')
@section('title','Bamiscradles Creche in Abuja')
@section('content')
<div class="main">
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Gallery</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="{{ asset('assets/img/playground2.jpg') }}" alt="image" />
                        <a href="{{ asset('assets/img/playground2.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class="bx bx-search-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="{{ asset('assets/img/earlyyears.jpg') }}" alt="image" />
                        <a href="{{ asset('assets/img/earlyyears.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class="bx bx-search-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="{{ asset('assets/img/playground.jpg') }}" alt="image" />
                        <a href="{{ asset('assets/img/playground.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class="bx bx-search-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="{{ asset('assets/img/footer.jpg') }}" alt="image" />
                        <a href="{{ asset('assets/img/footer.jpg') }}" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class="bx bx-search-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="enrollaction-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="enrollaction-content">
                        <h2>Do You Want To Your CHild To Be Part Of Us Now?</h2>
                    </div>
                </div>
                <div class="col-lg-6"  style="text-align: center;">
                    <a href="{{ route('enrollnow') }}" target="_blank" class="default-btn">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="enrollaction-shape">
            <div class="shape-1">
                <img src="{{ asset('assets/img/enroll/shape-1.png') }}" alt="image" />
            </div>
            <div class="shape-2">
                <img src="{{ asset('assets/img/enroll/shape-2.png') }}" alt="image" />
            </div>
        </div>
    </div>
</div>
@endsection