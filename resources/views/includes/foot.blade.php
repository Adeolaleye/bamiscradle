<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/imagelightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsdk-bootstrap-wizard.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script>
    var videoPlayButton,
    videoWrapper = document.getElementsByClassName('video-wrapper')[0],
    video = document.getElementsByTagName('video')[0],
    videoMethods = {
    renderVideoPlayButton: function() {
        if (videoWrapper.contains(video)) {
            this.formatVideoPlayButton()
            video.classList.add('has-media-controls-hidden')
            videoPlayButton = document.getElementsByClassName('video-overlay-play-button')[0]
            videoPlayButton.addEventListener('click', this.hideVideoPlayButton)
        }
    },

    formatVideoPlayButton: function() {
        videoWrapper.insertAdjacentHTML('beforeend', '\
            <svg class="video-overlay-play-button" viewBox="0 0 240 240" alt="Play video">\
                <circle class="animated-btn animate__animated animate__pulse animate__infinite" cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#acd046"/>\
                <polygon points="70, 55 70, 145 145, 100" class="animated-btn animate__animated animate__pulse animate__infinite" fill="#acd046"/>\
            </svg>\
        ')
    },

    hideVideoPlayButton: function() {
        video.play()
        videoPlayButton.classList.add('is-hidden')
        video.classList.remove('has-media-controls-hidden')
        video.setAttribute('controls', 'controls')
    }
    }

    videoMethods.renderVideoPlayButton()
</script>