<!DOCTYPE html>
<html lang="en" style="background: #000000;color: rgb(115,111,111);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Animated-Toggle-NavBar-BS5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dh-row-text-image-right-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Pretty-Registration-Form-.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Simple-Slider-swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Simple-Slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Table-With-Search-search-table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Table-With-Search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Video-Responsive.css') }}">
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54" style="background: var(--bs-border-color-translucent);color: rgb(255,255,255);">
    <header class="masthead" style="background-image: url('rr.jpg');color: rgba(0,0,0,0.64);">
        <nav class="navbar navbar-dark fixed-top bg-dark" style="color: rgb(152,34,34);background: rgba(52,58,64,0);">
            <div class="container"><a class="navbar-brand" href="#" style="background: var(--bs-btn-bg);color: var(--bs-link-color);font-weight: bold;border-color: #ffd700;">Admin Panel</a><button data-bs-toggle="collapse" class="navbar-toggler collapsed" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="width: 21px;"></span></button>
                <div class="collapse navbar-collapse text-center" id="navcol-1">
                    <ul class="navbar-nav">
                     
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.admin.home') }}">Close</a></li>
                     
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="bg-light bg-dark" id="intro" style="padding-top: 50px;padding-bottom: 50px;text-align: center;padding-right: 12px;padding-left: 12px;"></section>
    <section class="bg-light bg-dark" id="portfolio" style="background: rgb(90,43,190);border-color: rgb(205,21,21);color: rgb(40,12,12);padding-bottom: 50px;padding-top: 50px;">
        <div class="container-fluid" style="color: rgb(255,255,255);">
            <div class="row">
                <div class="col-lg-12 text-center" style="background: rgba(255,255,255,0);">
                    <h1 class="text-uppercase text-center section-heading" style="padding-bottom: 43px;color: rgb(255,215,0);border-color: var(--bs-link-color);">
                    @if($video)
                    &nbsp;Update Video
                    @else
                    &nbsp;Add Video
                    @endif
                </h1>
                    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
                </div>
            </div>
        </div>
        <div class="row register-form">
            <div class="col-md-8 offset-md-2">
                <form enctype="multipart/form-data" method="POST" action="{{ route('videos.store') }}" class="custom-form" style="color: rgb(255,255,255);background: rgba(255,255,255,0);">
                    @csrf
                    <h1 style="color: var(--bs-link-color);">                    @if($video)
                    &nbsp;Update Video
                    @else
                    &nbsp;Add Video
                    @endif</h1>
                    <div class="row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field" style="color: #ffffff;">Title</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="text" name="title" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field" style="color: #ffffff;">Description</label></div>
                        <div class="col-sm-6 input-column"><textarea class="form-control" name="description" required></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field" style="color: #ffffff;">Video</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="file" name="video" id="video" required></div>
                    </div><button class="btn btn-light submit-button" type="submit" style="background: var(--bs-warning);color: #2c2b2b;">                    @if($video)
                    &nbsp;Update Video
                    @else
                    &nbsp;Add Video
                    @endif</button>
                </form>
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

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/agency.js') }}"></script>
    <script src="{{ asset('assets/js/Simple-Slider.js') }}"></script>
    <script src="{{ asset('assets/js/Table-With-Search-search-table.js') }}"></script>
</body>

</html>