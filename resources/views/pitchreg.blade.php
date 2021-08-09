@include('include.headi')
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-2-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url(img/pitchreg.jpg);">
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
                                 
                                    <p style="color:black" class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Pitch Registration</p>
                                    <!-- login form begin --> <br>
                                    <form class="uk-grid uk-form" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="fname" name="fname" value="" type="text" placeholder="First Name">
                                        </div>  
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="lname" name="lname" value="" type="text" placeholder="Last Name">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="email" name="email" value="" type="email" placeholder="Email">
                                        </div>                            
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="password" name="password" value="" type="password" placeholder="Password">
                                        </div> 
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="number" name="number" value="" type="tel" placeholder="Phone Number">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="pitchname" name="pitchname" value="" type="text" placeholder="Pitch Name">
                                        </div>       
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="address" name="address" value="" type="text" placeholder="Pitch Address">
                                        </div>  
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <select  class="uk-select uk-border-rounded" id="size" name="pitchsize">
                                                <option selected>Pitch Size</option>                                            
                                                <option value="5-Aside">5-Aside</option>
                                                <option value="11-Aside">11-Aside</option>
                                                
                                            </select>
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="days" name="days" value="" type="text" placeholder="Days of the week e.g mon,tuesday">
                                        </div> 
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="opening" name="opening" value="" type="text" placeholder="Opening Time">
                                        </div>  
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            
                                            <input class="uk-input uk-border-rounded" id="closing"  name="closing" value="" type="text" placeholder="Closing Time">
                                        </div> 
                                        <input type="hidden" name="manager"  value="manager">
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button  class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Register</button>
                                        </div>
                                       
                                        
                                    </form>
                                    <!-- login form end -->
                                    <div class="uk-margin-medium-bottom uk-text-center">
                                        <a class="uk-button uk-button-small uk-border-rounded" href="signin.php">Log In</a>
                                        <a class="uk-button uk-button-small uk-border-rounded" href="index.php">Home</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        @include('include.footer')