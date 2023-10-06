<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Festava Live - Bootstrap 5 CSS Template</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{url('frontend/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{url('frontend/css/templatemo-festava-live.css')}}" rel="stylesheet">
        
<!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->
    </head>
    
    <body>

        <main>

            <header class="site-header">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12 col-12 d-flex flex-wrap">
                            <p class="d-flex me-4 mb-0">
                                <i class="bi-person custom-icon me-2"></i>
                                <strong class="text-dark">Welcome to Music Festival 2023</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </header>


            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        Festava Live
                    </a>

                    <a href="{{url('/ticket')}}" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/#section_2">About</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/#section_3">Artists</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/#section_4">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/#section_5">Pricing</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/#section_6">Contact</a>
                            </li>
                        </ul>

                        <a href="{{url('/ticket')}}" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>
                    </div>
                </div>
            </nav>