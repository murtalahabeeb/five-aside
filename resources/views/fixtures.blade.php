@include('include.headb')


<!-- section content begin -->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 in-card-16">
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                    <div class="uk-grid uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <h3>See upcoming fixtures for {{$fixtures[0]->tournament->name}} tournament</h3>
                            <h4>new fixtures will be posted at 12pm</h4>
                        </div>
                        <div class="btn-group">
                            <!-- <div class="uk-margin-small uk-width-1-5 uk-inline">
                                <select style="color: black;" class="uk-select uk-border-rounded" id="size" name="size">
                                    <option selected>Location</option>
                                    <option value="20">Wuse</option>
                                    <option value="30">Gwarinpa</option>
                                    <option value="40">Garki</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
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
                                    <th>First Team</th>
                                    <th></th>
                                    <th class="uk-text-center">Second Team</th>
                                    <th class="uk-text-center">Date</th>
                                    <th class="uk-text-center">Time</th>
                                    <th class="uk-text-right uk-visible@s">Round</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($fixtures as $fixture)
                                        
                                       <tr>
                                           
                                                <td>{{$fixture->matchedteams[0]->name}} </td>
                                                <td class="uk-text-center">{{$fixture->matchedteams[0]->pivot->score??''}} {{$fixture->matchedteams[0]->pivot->score==null?' vs ':'-'}} {{$fixture->matchedteams[1]->pivot->score??''}}</td>
                                                <td class="uk-text-center">{{$fixture->matchedteams[1]->name}}</td>
                                                <td class="uk-text-center">{{$fixture->date}}</td>
                                                <td class="uk-text-center">{{$fixture->time}}</td>
                                                <td class="uk-text-right uk-visible@s">{{$fixture->matchedteams[0]->pivot->round}}</td>
                                            
                                     
                                           
                                          
                                           
                                          
                                       </tr>
                                      
                                       @endforeach
                                
                               
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

