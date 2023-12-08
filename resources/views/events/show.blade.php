<!DOCTYPE html>
<html lang="en" style="background: #000000;color: rgb(115,111,111);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="assets/css/swiper-icons.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Toggle-NavBar-BS5.css">
    <link rel="stylesheet" href="assets/css/dh-row-text-image-right-responsive.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Video-Responsive.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54" style="background: var(--bs-border-color-translucent);color: rgb(255,255,255);">
<div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal1" style="color: rgb(0,0,0);background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;), rgb(27,27,27);">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container" style="color: rgb(0,0,0);">
                    <div class="row" style="color: rgb(248,15,15);background: rgba(34,30,30,0);">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body" style="background: rgba(0,0,0,0);color: rgb(0,0,0);">
                                <h2 class="text-uppercase" style="color: var(--bs-link-color);">Project Name</h2>
                                <div class="simple-slider">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                        @foreach($event->images as $image)
                                            <div class="swiper-slide" style="background: url('{{ asset('storage/' . $image->image_url) }}') center center / cover no-repeat;"></div>
                                        @endforeach    
                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-prev" style="color: var(--bs-link-color);"></div>
                                        <div class="swiper-button-next" style="color: var(--bs-link-color);"></div>
                                    </div>
                                </div>
                                <p style="color: rgb(0,0,0);padding-top: 40px;">Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-unstyled">
                                    <li>Date: January 2017</li>
                                    <li>Time: 12:10 PM</li>
                                </ul><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>