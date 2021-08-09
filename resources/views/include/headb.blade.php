<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
  
    <!-- Site Properties -->
    <title>Abuja 5-A-Side</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{asset('js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('css/vendors/uikit.min.css')}}" as="style">
    <link rel="preload" href="{{asset('css/style.css')}}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{asset('fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{asset('fonts/rubik-v9-latin-500.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/rubik-v9-latin-300.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/rubik-v9-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- icons8 -->
    <a href="https://icons8.com/icon/87230/team"></a>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical in-header-inner uk-background-cover uk-background-top-center" style="background-image: url(img/in-wave-background-1.png);">
            <!-- module navigation begin -->
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-auto">
                        <div class="uk-navbar-item">
                            <!-- module logo begin -->
                            <a class="uk-logo" href="index-2.html">
                                <img class="uk-margin-small-right in-offset-top-10" src="img/in-lazy.gif" data-src="img/in-logo-2.svg" alt="wave" width="134" height="23" data-uk-img>
                            </a>
                            <!-- module logo begin -->
                        </div>
                    </div>
                    <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                           
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li><a href="{{ route('tournamentpage')}}">Tournaments</a></li>
                           
                            
                            <li><a href="{{ route('allpitchespage')}}">Pitches</a></li>
                            
                
                        </ul>
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        @guest
                                @if (Route::has('login'))
                                <a href="{{ route('signinpage')}}" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Log in</a>
                                
                                <a href="{{ route('teamregpage')}}" class="uk-button uk-button-primary uk-button-small uk-border-pill">Sign up</a>
                                @endif
                                @else
                                <form action="{{ route('logout') }}" method="post">
                                @csrf
                                    <button  type='submit' class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Log out</button>
                                </form>
                                
                                @endguest
                           
                        </div>
                    </div>
                </div>
            </nav>
            <!-- module navigation end -->
            
            </div>
        </div>
        <!-- header content end -->
    </header>

    <main>
  