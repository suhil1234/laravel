
<!DOCTYPE html>
<html>
<head>
    <title>Aroom Events</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Animated-Toggle-NavBar-BS5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dh-row-text-image-right-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Video-Responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

</head>
<body id="page-top">
    <header class="masthead" style="background-image: url('{{ asset('assets/img/rr.jpg') }}');">
        <nav class="navbar navbar-dark fixed-top bg-dark" style="color: rgb(152,34,34);background: rgba(52,58,64,0);">
            <div class="container"><a class="navbar-brand" href="#" style="background: var(--bs-btn-bg);color: var(--bs-link-color);font-weight: bold;border-color: #ffd700;">Aroom Events</a><button data-bs-toggle="collapse" class="navbar-toggler collapsed" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="width: 21px;"></span></button>
                <div class="collapse navbar-collapse text-center" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#intro">Intro</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Up Coming Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="intro-text" style="text-align: left;color: rgb(77,0,0);">
                <div class="intro-lead-in"><span style="color: rgb(255,255,255);font-weight: bold;">Welcome To</span></div>
                <div class="intro-heading text-uppercase"><span style="color: var(--bs-link-color);">Aroom Events</span></div>
            </div>
        </div>
    </header>
    <section class="bg-light bg-dark" id="intro" style="padding-top: 50px;padding-bottom: 50px;text-align: center;padding-right: 12px;padding-left: 12px;">
        <div class="container" style="text-align: center;">
            <div class="row clearmargin clearpadding row-image-txt" style="background: rgb(42, 42, 42);text-align: center;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-sm-pull-12" style="padding: 22px;text-align: center;padding-bottom: 43px;">
                @if($video)
                <div style="text-align: center;">
                    <h2 class="d-flex">{{ $video->title }}</h2>
                    <hr>
                    <p class="d-md-inline">{{ $video->description }}</p>
                    </div>
                </div>
                <div class="video-container">  <video autoplay controls>
                <source src="{{ Storage::url($video->video) }}" type="video/mp4">
                    </video></div>
                    @else
                    <h2 class="d-flex">No Video Added</h2>
                    @endif
            </div>
        </div>
    </section>
    <section class="bg-light bg-dark" id="portfolio" style="background: rgb(50,20,113);border-color: rgb(205,21,21);color: rgb(40,12,12);padding-bottom: 50px;padding-top: 50px;">
        <div class="container-fluid" style="color: rgb(255,255,255);">
            <div class="row">
                <div class="col-lg-12 text-center" style="background: rgba(255,255,255,0);">
                    <h2 class="text-uppercase section-heading" style="padding-bottom: 43px;color: rgb(255,215,0);">Up Coming events</h2>
                </div>
            </div>
            <div class="row">
                @if($events)
                @foreach ($events as $event)
                    <div class="col-sm-6 col-md-4 portfolio-item">
                        <a class="portfolio-link" href="#portfolioModal1" data-bs-toggle="modal"
                            data-event-id="{{ $event->id }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid"
                                src="{{ asset('storage/' . $event->image) }}">
                        </a>
                        <div class="portfolio-caption" style="background: rgb(42,42,42);">
                            <h4 style="color: var(--bs-link-color);">{{ $event->title }}</h4>
                            <p class="text-muted" style="color: #ffffff;">{{ $event->time }}</p>
                        </div>
                    </div>
                @endforeach
                @else
                <h2 class="d-flex">No Events Added</h2>
                @endif
            </div>
        </div>
    </section>
    <footer id="contact" style="padding-top: 50px;padding-bottom: 50px;color: rgba(255,255,255,0);background: rgb(42,42,42);">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright" style="color: var(--bs-link-color);">Copyright&nbsp;© Arooma 2024</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks" style="color: var(--bs-link-color);">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal1" style="color: rgb(0,0,0);background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;), rgb(27,27,27);">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container" style="color: rgb(0,0,0);">
                    <div class="row" style="color: rgb(255,255,255);background: rgba(34,30,30,0);">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body" style="background: rgba(0,0,0,0);color: rgb(0,0,0);">
                                <h2 class="text-uppercase" style="color: var(--bs-link-color);">Project Name</h2>
                               
                                  <img id="event_img" src="" alt="" width='400px' hieght='400px'>
                               
                                <p style="color: rgb(255,255,255);padding-top: 40px;">Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-unstyled">
                                    <li style="color: rgb(255,255,255);">Date: January 2017</li>
                                    <li style="color: rgb(255,255,255);">Time: 12:10 PM</li>
                                </ul><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/agency.js') }}"></script>
    <script src="{{ asset('assets/js/new.js') }}"></script>
    <script src="{{ asset('assets/js/Simple-Slider-swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/Simple-Slider.js') }}"></script>
</body>
</html>