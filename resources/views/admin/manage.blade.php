@include('admin.include.head')

<div class="container-scroller">
    <!-- partial -->
    
    
    <div class="container-fluid page-body-wrapper2">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <!-- <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="asset/images/logo-mini.svg" alt="logo" /></a>
                        </div> -->
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link btn create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Update Results</a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample" method="POST" action="{{route('updatescore')}}">
                                        @csrf
                                        <div class="form-group">
                                            <p>Fixture </p>
                                            <select class="js-example-basic-single" style="width: 100%;" name='fixture'>
                                            @foreach($tournament->fixtures as $fixture)
                                                
                                                    <option value="{{$fixture->fixture_id}}">{{$fixture->matchedteams[0]->name}} vs {{$fixture->matchedteams[1]->name}}</option> 
                                              
                                            
                                            @endforeach
                            
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Score</label>
                                            <input style="width: 100%;" type="text" class="form-control" id="name" name="teamAscore" placeholder="First team score" /><br>
                                            <input style="width: 100%;" type="text" class="form-control" id="name2" name="teamBscore" placeholder="Second team score" />
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">{{Auth::user()->name}}</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                            <div class="dropdown-divider"></div>
                            <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                  <p class="preview-subject mb-1" >Log out</p>
                                </div>
                                <form id='logout-form' action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                    <form class="uk-grid uk-form" method="POST" action="{{route('matchteams',['id'=>$tournament->tournament_id])}}">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Match Teams</h4>
                                <div class="form-group">
                                    <p>First Team</p>
                                    <select class="js-example-basic-single" style="width: 100%;" name='teamA'>
                                        @foreach($tournament->teams as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p>Second Team</p>
                                    <select class="js-example-basic-single" style="width: 100%;" name='teamB'>
                                        @foreach($tournament->teams as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Date</span>
                                        </div>
                                        <input type="date" class="form-control" name='date'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Time</span>
                                        </div>
                                        <input type="text" class="form-control" name='time'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Round</span>
                                        </div>
                                        <input type="text" class="form-control" name='round'/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Match</button>
                            </div>
                        </form>
                        </div>
                    </div>
                
                    <div class="col-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Fixtures</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>First Team</th>
                                                <th>Second Team</th>
                                                
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Round</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        
                                        @foreach($tournament->fixtures as $fixture)
                                       
                                            <tr>
                                            @foreach($fixture->matchedteams as $teams)
                                                <td>{{$teams->name}}</td>
                                            @endforeach
                                                
                                                <td>{{$fixture->date}}</td>

                                                <td>{{$fixture->time}}</td>
                                                
                                                
                                                <td>{{$fixture->matchedteams->first()->pivot->round}}</td>
                                            
                                                
                                               
                                            </tr>
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Results</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>First Team</th>
                                                <th>Scores</th>
                                                <th>Second Team</th>
                                                <th>Round</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tournament->fixtures as $fixture)
                                        @if($fixture->matchedteams[0]->pivot->score != null)
                                       <tr>
                                           
                                                <td>{{$fixture->matchedteams[0]->name}}</td>
                                                <td>{{$fixture->matchedteams[0]->pivot->score??''}} {{$fixture->matchedteams[0]->pivot->score==null?' vs ':'-'}} {{$fixture->matchedteams[1]->pivot->score??''}}</td>
                                                <td>{{$fixture->matchedteams[1]->name}}</td>
                                                <td>{{$fixture->matchedteams[0]->pivot->round}}</td>
                                            
                                     
                                           
                                          
                                           
                                          
                                       </tr>
                                       @endif
                                       @endforeach


                


                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <!-- <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                          <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                        </div>
                        </footer> -->
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.include.footer')
