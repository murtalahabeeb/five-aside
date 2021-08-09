<!DOCTYPE html>
<html lang="English" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <!-- Site Properties -->
    <title>Sign in </title>
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/vendors/uikit.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url(img/soccer.jpg);">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="index-2.html">
                                        <img class="uk-margin-small-right in-offset-top-10" src="img/in-lazy.gif" data-src="img/in-logo-2.svg" alt="wave" width="134" height="23" data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account</p>
                                    <br>
                                    <!-- <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Don't have an account? <a href="signup.php" >Register here</a></p> -->
                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="email" name="email" value="" type="email" placeholder="Email">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="password" name="password" value="" type="password" placeholder="Password">
                                        </div>
                                        
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button  class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Log in</button>
                                        </div>
                                    </form>
                                    <!-- login form end -->
                                    <div class="uk-margin-medium-bottom uk-text-center">
                                       
                                        <a class="uk-button uk-button-small uk-border-rounded" href="{{ route('homepage') }}">Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    <script src="js/vendors/uikit.min.js"></script>
    <script src="js/vendors/indonez.min.js"></script>
</body>
</html>