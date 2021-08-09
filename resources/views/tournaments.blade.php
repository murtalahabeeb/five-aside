@include('include.headb')

    <!-- section content begin -->
    <div class="uk-width-1-1 in-content-10">
    <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-background-bottom-left uk-background-contain" style="background-image: url(img/in-content-10-image.png);">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-3-5@m uk-text-center">
                <h1 class="uk-margin-small-top">Hi, register your team for a tournament.</h1>
                <!-- <form class="uk-search uk-search-default uk-width-1-1 uk-margin-bottom">
                    <span data-uk-search-icon></span>
                    <input class="uk-search-input uk-border-pill" type="search" placeholder="Search for articles...">
                    </form> -->
                <!-- Default dropend button -->
                <!-- <div class="uk-margin-small uk-width-2-5 uk-inline">
                    <select style=" color: white;" class="uk-select  uk-border-rounded" id="size" name="size">
                        <option selected>Location</option>
                        <option value="20">Wuse</option>
                        <option value="30">Gwarinpa</option>
                        <option value="40">Garki</option>
                    </select>
                </div>
                <div class="uk-margin-small uk-width-2-5 uk-inline">
                    <select style=" color: white;"  class="uk-select uk-border-rounded" id="size" name="size">
                        <option selected>Day</option>
                        <option value="20">Monday</option>
                        <option value="30">Tuesday</option>
                        <option value="40">Wednessday</option>
                        <option value="40">Thursday</option>
                        <option value="40">Friday</option>
                        <option value="40">Saturday</option>
                        <option value="40">Sunday</option>
                    </select>
                </div>              -->
            </div>
        </div>
        @if(Session::has('status'))
        <div class="badge badge-outline-success">{{Session::get('status')}}</div>
        @endif
    </div>
    <div class="uk-section uk-margin-top">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-2-1@m">
                    <div class="uk-grid-medium uk-child-width-1-2@m in-blog-1" data-uk-grid>
                        @foreach($tournaments as $tournament)
                            <div>
                                <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded " >
                                    <div class="uk-card-body ">
                                        <h3>
                                            <a href="blog-article.html">{{$tournament->name}}</a>
                                        </h3>
                                        <p>Tournaments start date: {{$tournament->start_date}}</p>
                                        <p>end date: {{$tournament->end_date}}</p>
                                       
                                        <div class="uk-flex uk-flex-middle">
                                            <div>
                                                <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                                                    Venue
                                                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                    {{$tournament->pitch->pitchname}}
                                                </p>
                                                <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                                                    Location
                                                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                    {{$tournament->pitch->address}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="uk-card-footer uk-clearfix ">
                                        <div class="uk-float-left">
                                            <a href="{{route('jointournament',['id' => $tournament->tournament_id])}}"><span class="uk-label uk-label-success uk-border-pill">Play the tournament</span></a>
                                        </div>
                                    </div>
                                    <div class="uk-card-footer uk-clearfix ">
                                        <div class="uk-float-left">
                                            <a href="{{route('fixturespage',['id' => $tournament->tournament_id])}}"><span class="uk-label uk-label-success uk-border-pill">View fixtures</span></a>
                                        </div>
                                    </div>
                                    <div class="uk-card-footer uk-clearfix ">
                                        <div class="uk-float-left">
                                            <a href="{{route('resultspage',['id' => $tournament->tournament_id])}}"><span class="uk-label uk-label-success uk-border-pill">View results</span></a>
                                        </div>
                                    </div>
                                    
                                </article>
                            </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

@include('include.footer')