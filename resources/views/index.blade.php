


    <div class="uk-section uk-padding-remove-vertical">
    @include('include.headi')
        <div class="in-slideshow" data-uk-slideshow>
            <ul class="uk-slideshow-items uk-light">
                <li>
                    <div class="uk-position-cover">
                        <img src="img/in-lazy.gif" data-src="img/image3.jpg" alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
                    </div>
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1>
                                        <img src="img/g294.png">
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-position-cover">
                        <img src="img/in-lazy.gif" data-src="img/image1.jpg" alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
                    </div>
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1>ENJOY FOOTBALL</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-position-cover">
                        <img src="img/in-lazy.gif" data-src="img/image2.jpg" alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
                    </div>
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1>ENJOY FOOTBALL</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="uk-container uk-light">
                <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-center"></ul>
            </div>
        </div>
    </div>

    <!-- section content begin -->
    <div class="uk-section in-wave-17 in-offset-top-20 in-offset-bottom-40">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-1-3@m">
                    <h1>PLAY<br><span class="in-highlight"> 5-A-SIDE</span><br>FOOTBALL </h1>
                    <p>We offer a huge range of 5 a side leagues, Games & Pitches across Abuja city</p>
                    <!-- <a class="uk-button uk-button-primary uk-border-rounded" href="#">Open an Account</a>
                        <p class="uk-text-small">Not ready? <a href="#">Sign up for a demo account.</a></p> -->
                </div>
                <div class="uk-width-expand@m">
                    <div class="uk-grid uk-grid-collapse uk-child-width-1-2@m uk-child-width-1-2@s uk-text-center">
                        <a href="{{ route('teamregpage')}}">
                            <div class="uk-tile uk-tile-default">
                                <img src="https://img.icons8.com/material-sharp/48/000000/user-group-man-woman.png"/>
                                <!-- <img class="uk-margin-remove-bottom" src="img/in-wave-icon-14.svg" alt="wave-icon" width="64"> -->
                                <h5 class="uk-margin-small-top">Team Registration</h5>
                            </div>
                        </a>
                        <a href="{{ route('pitchregpage')}}">
                            <div class="uk-tile uk-tile-default" style="border-right: 2px;">
                                <img src="https://img.icons8.com/ios-glyphs/48/000000/stadium.png"/>
                                <!-- <img class="uk-margin-remove-bottom" src="img/in-wave-icon-15.svg" alt="wave-icon" width="64"> -->
                                <h5 class="uk-margin-small-top">Pitch Registration</h5>
                            </div>
                        </a>
                        <a href="{{ route('tournamentpage')}}">
                            <div class="uk-tile uk-tile-default" style="border-right: 2px solid #e8e8e8;
                                border-bottom: 0px;">
                                <img src="https://img.icons8.com/material-sharp/48/000000/football.png"/>
                                <!-- <img class="uk-margin-remove-bottom" src="img/in-wave-icon-16.svg" alt="wave-icon" width="64"> -->
                                <h5 class="uk-margin-small-top">Tournaments</h5>
                            </div>
                        </a>
                        <a href="{{ route('allpitchespage')}}" >
                            <div class="uk-tile uk-tile-default" style="border-bottom: 0px !important;">
                                <img src="https://img.icons8.com/ios-glyphs/48/000000/place-marker.png"/>
                                <!-- <img class="uk-margin-remove-bottom" src="img/in-wave-icon-17.svg" alt="wave-icon" width="64"> -->
                                <h5 class="uk-margin-small-top">All Pitches</h5>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="in-price-list">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div data-uk-slider="autoplay: true; autoplay-interval: 5000">
                            <ul class="uk-slider-items uk-child-width-1-5@m uk-text-small uk-text-center" data-uk-grid>
                                <li>
                                    La Liga <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left">
                                </>
                                <li>
                                    FA Cup <span class="uk-label uk-label-danger uk-border-pill uk-margin-small-left">
                                </li>
                                <li>
                                    Europa League <span class="uk-label uk-label-danger uk-border-pill uk-margin-small-left">
                                </li>
                                <li>
                                    Champions League <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left">
                                </li>
                                <li>
                                    World Cup <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left">
                                </li>
                                <li>
                                    European Championship <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left">
                                </li>
                                <li>
                                    Copa America <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left">
                                </li>
                                <li>
                                    Africa Cup of Nations <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @include('include.footer')
    <!-- section content end -->

