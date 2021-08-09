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
                        <a class="nav-link btn create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Tournament</a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample"  method="POST" action="{{ route('createtournament') }}" >
                                        @csrf
                                        <div class="form-group">
                                            <select class="js-example-basic-single" style="width: 100%;" name='pitch'>
                                                <option selected>select a pitch</option>
                                                @foreach(Auth::user()->pitches->where('reg_status','approved') as $pitch)
                                                    <option value="{{$pitch->pitch_id}}">{{$pitch->pitchname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input style="width: 100%;" type="text" class="form-control" id="name" name="name" placeholder="Name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="startdate">Start Date</label>
                                            <input style="width: 100%;" type="date" class="form-control" id="startdate" name="startdate" placeholder="Start Date" />
                                        </div>
                                        <div class="form-group">
                                            <label for="enddate">End Date</label>
                                            <input style="width: 100%;" type="date" class="form-control" id="enddate" name="enddate" placeholder="End Date" />
                                        </div>
                                        @if(!Auth::user()->pitches->where('reg_status','approved')->isEmpty())
                                        <button type="submit" class="btn btn-primary mr-2">Create</button>
                                        @else
                                        <center> <div class="badge badge-outline-warning">Pending</div></center><br>
                               <center> <h5 class="card-title">this function will be available when you have an approved pitch</h5></center>
                               @endif

                                        
                                        

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
                            <!-- <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Profile</p>
                    </div>
                  </a> -->
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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                
                            @foreach(Auth::user()->pitches as $pitch)
                            <center><h3 class="card-title">{{$pitch->pitchname}}</h3></center>
                            @if($pitch->reg_status != 'pending')
                                <h4 class="card-title">Tournaments</h4>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Start Date</th>
                                                <th>End date</th>
                                                <th>Teams</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(Auth::user()->pitches as $pitch)
                                                @foreach($pitch->tournament as $tournament)
                                                    <tr>
                                                        <td>{{$tournament->name}}</td>
                                                        <td>{{$tournament->start_date}}</td>
                                                        <td>{{$tournament->end_date}}</td>
                                                        <td>{{$tournament->teams->count()}}</td>
                                                      
                                                        <td><a style="border: 1px solid #c99c3b;" class="btn create-new-button" aria-expanded="false" href="{{route('managetournament',['id'=>$tournament->tournament_id])}}">Manage</a></td>

                                                        <td><a style="border: 1px solid red;" class="btn create-new-button" aria-expanded="false" href="{{route('deletetournament',['id'=>$tournament->tournament_id])}}">Delete</a></td>
                                                        
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <center> <div class="badge badge-outline-warning">Pending</div></center><br>
                               <center> <h5 class="card-title">this function will be available when the pitch has been confirmed</h5></center>
                                @endif
                                @endforeach
                                
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
