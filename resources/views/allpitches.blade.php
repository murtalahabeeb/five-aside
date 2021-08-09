@include('include.headb')
<!-- section content begin -->
<div class="uk-width-1-1 in-content-10">
    <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-background-bottom-left uk-background-contain" style="background-image: url(img/in-content-10-image.png);">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-3-5@m uk-text-center">
                <h1 class="uk-margin-small-top">Find pitches near you.</h1>
                <!-- <form class="uk-search uk-search-default uk-width-1-1 uk-margin-bottom">
                    <span data-uk-search-icon></span>
                    <input class="uk-search-input uk-border-pill" type="search" placeholder="Search for articles...">
                    </form> -->
                <!-- Default dropend button -->


                <!-- <div class="uk-margin-small uk-width-1-1 uk-inline">
                    <select style="color: white;" class="uk-select uk-border-rounded" id="size" name="size">
                        <option selected>Location</option>
                        <option value="20">Wuse</option>
                        <option value="30">Gwarinpa</option>
                        <option value="40">Garki</option>
                    </select>
                </div> -->
            </div>
        </div>
    </div>
    <div class="uk-section uk-padding-large">
        <div class="uk-container in-wave-8">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-2-3">
                    <div class="uk-grid-large uk-child-width-1-1@m" data-uk-grid>
                        <div>
                            <table class="uk-table uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="uk-text-center">Location</th>
                                        <th class="uk-text-center">Size</th>
                                        <th class="uk-text-center">Tournaments</th>
                                        <th class="uk-text-center">Open on</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pitches as $pitch)
                                    <tr>
                                        <td class="uk-text-center">{{$pitch->pitchname}}</td>
                                        <td class="uk-text-center">{{$pitch->address}}</td>
                                        <td class="uk-text-center">{{$pitch->pitchsize}}</td>
                                        <td class="uk-text-center">{{$pitch->tournament->count()}}</td>
                                        <td class="uk-text-center">{{$pitch->days}}</td>
                                    </tr>@endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    @include('include.footer')
</div>
