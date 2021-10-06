<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="image" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="image" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('whoweare') }}" class="nav-link {{ Request::is('whoweare') ? 'active' : '' }}">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('whatweoffer') }}" class="nav-link  {{ Request::is('whatweoffer') ? 'active' : '' }}">
                                What We Offer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gallery') }}" class="nav-link  {{ Request::is('gallery') ? 'active' : '' }}">
                                Gallery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link  {{ Request::is('contact') ? 'active' : '' }}">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                        </div>
                        <div class="option-item">
                            <a href="{{ route('enrollnow') }}" class="default-btn">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="{{ route('enrollnow') }}" class="default-btn">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>