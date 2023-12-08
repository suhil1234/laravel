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
   
        <nav class="navbar navbar-dark fixed-top bg-dark" style="color: rgb(152,34,34);background: rgba(52,58,64,0);">
            <div class="container"><a class="navbar-brand" href="#" style="background: var(--bs-btn-bg);color: var(--bs-link-color);font-weight: bold;border-color: #ffd700;">Admin Panel</a>
            <button data-bs-toggle="collapse" class="navbar-toggler collapsed" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="width: 21px;"></span></button>
                <div class="collapse navbar-collapse text-center" id="navcol-1">
                    <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.events.create') }}">Add Event</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('videos.create') }}">                    @if($video)
                    &nbsp;Update Video
                    @else
                    &nbsp;Add Video
                    @endif</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="bg-dark" id="intro" style="padding-top:10px;text-align: center;padding-right: 12px;padding-left: 12px;"></section>
    <section class="bg-dark" id="portfolio" >
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-12 text-center" >
                    <h1 class="text-uppercase text-center section-heading" style="padding-bottom: 43px;color: rgb(255,215,0);">&nbsp; Events</h1>
                    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @elseif(session('error_log'))
        <div class="alert alert-danger" role="alert">
            {{ session('error_log') }}
        </div>
    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12 search-table-col" style="padding-right: 20px;padding-left: 20px;"><span class="counter pull-right"></span>
            <div class="table-responsive table table-hover table-bordered results" style="color: rgb(255,255,255);">
                <table class="table table-hover table-bordered">
                    <thead class="bill-header cs">
                        <tr>
                            <th id="trs-hd-1" class="col-lg-1">ID</th>
                            <th id="trs-hd-2" class="col-lg-2">title</th>
                            <th id="trs-hd-3" class="col-lg-3">Description</th>
                            <th id="trs-hd-3" class="col-lg-3">Time</th>
                            <th id="trs-hd-4" class="col-lg-2">Image</th>
                            <th id="trs-hd-6" class="col-lg-2" style="color: #ffffff;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach($events as $event)
    <tr>
        <td style="color: rgb(255,255,255);">{{ $event->id }}</td>
        <td style="color: rgb(255,255,255);">{{ $event->title }}</td>
        <td style="color: rgb(255,255,255);">{{ $event->description }}</td>
        <td style="color: rgb(255,255,255);">{{ $event->time }}</td>
        <td style="color: rgb(255,255,255);">{{ $event->image }}</td>
        <td>
    <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event and its associated images?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button>
    </form>
</td>
    </tr>
    @endforeach
</tbody>
                </table>
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