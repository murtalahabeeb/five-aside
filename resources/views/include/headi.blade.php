<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    
    <!-- Site Properties -->
    <title>Abuja 5-A-Side</title>
    <!-- Critical preload -->
    <link rel="preload" href="js/vendors/uikit.min.js" as="script">
    <link rel="preload" href="css/vendors/uikit.min.css" as="style">
    <link rel="preload" href="css/style.css" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="fonts/rubik-v9-latin-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/rubik-v9-latin-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/rubik-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/vendors/uikit.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- icons8 -->
    <a href="https://icons8.com/icon/87230/team"></a>
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
        <div class="uk-section uk-padding-remove-vertical in-header-home ">
            <!-- module navigation begin -->
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
                <div class="uk-container" data-uk-navbar>
                    
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
                                <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Log out</a>
                                @if(Auth::user()->is_manager)
                                <a href="{{ route('pitchownerpage')}}" class="uk-button uk-button-primary uk-button-small uk-border-pill">dashboard</a>
                                @elseif(Auth::user()->is_admin)
                                <a href="{{ route('adminpage')}}" class="uk-button uk-button-primary uk-button-small uk-border-pill">dashboard</a>
                                @endif

                               
                                <form id='logout-form' action="{{ route('logout') }}" method="post">
                                @csrf
                                  
                                </form>

                                
                                @endguest
                        </div>
                    </div>
                </div>
            </nav>
            <!-- module navigation end -->
        </div>
        <!-- header content end -->
    </header>
    <main>