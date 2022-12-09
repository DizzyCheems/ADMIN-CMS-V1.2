<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TENTACIT|admin|Aritst|Profile|Account|View</title>
       
    </head>
    <body style="background-image:url(efe-kurnaz-RnCPiXixooY-unsplash.jpg);">
     
        @section('artistprofileview')
        <input type="hidden" name="id" value="">
    <div style="margin-left: 30px;">
	@if(Session::has('success'))
	<div class="alert alert-success">
	{{Session::get('success')}} 
	</div>  
	@endif
	</div>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="{{route('executive_homepage')}}"> <img src="/Tentacit Shape transparent-0.png" style="width:70px; height:45px;">TENTACIT </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons" style="margin-top:10px;">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#"  style="margin-top:25px;">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        
                       
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="{{route('executive_songlisting_show', $artist['id'])}}" class="dropdown-toggle" data-toggle="dropdown">Songs
                         
            
                            <b class="caret"></b></a>
                                <ul class="dropdown-menu">  
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('executive_artitsprofileupdate_view', $artist['id'] )}}">Update Profile </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="/icon-user-default-420x420.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="{{route('executive_homepage')}}"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                <li><a href="{{route('executive_inbox')}}"><i class="menu-icon icon-inbox"></i>Inbox 
                                     </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks 
                                     </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Members </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Audits </a></li>
                                <li><a href="{{route('executive_documents')}}"><i class="menu-icon icon-paste"></i> Documents </a></li>
                                <li><a href="{{route('executive_calendar')}}"><i class="menu-icon icon-table"></i>Corporate Calendar </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Corporate Statistics </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>


                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid" >
                                    <a href="#" class="btn-box big span4" style=" position:relative; top:480px; height:340px;"><b></b>
                                    <ul class="list-group list-group-flush">
      

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">NULL</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">NULL</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">NULL</span>
                  </li>
                </ul>
                <input type="hidden" name="id" value="{{$artist['id']}}">
                                    </a><a href="#" class="btn-box big span4" style="width: 570px; height:400px;">
                                    <div class="row">
                    <div class="col-sm-10" >
                      <h6 class="mb-0" style="position:relative; right:230px;">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h6>{{$artist['artistname']}}</h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" style="position:relative; right:240px;">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h6>{{$artist['artistmail']}}</h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" style="position:relative; right:215px;">Contact Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h6>{{$artist['artistnum']}}</h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" style="position:relative; right:235px;" >Address</h6>
                    </div>
                    <h6>{{$artist['artistaddress']}} </h6>
                    
                     <div class="col-sm-9 text-secondary">    
                      <hr>
                       </div>
                    
                         </div>
                          </a>
                          </div>
                                </div>
                              

                                <div class="span9" style="line-height: 5em;">
                        <div class="content" >
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid" style="margin-left:-30px; position:relative; top:-450px;">
                                    <a href="#" class="btn-box big span4"> <img src="/1st_bg/{{ $artist->background_img }}" alt="Artist" style="width:250px; height:250px;"  >
                   <b></b>
                                 <div class="mt-3">
                                   <h4>{{$artist['artistname']}}</h4>
                                     <p class="text-secondary mb-1" style="font-weight: bold;"> {{$artist['genre']}} </p>
                                     <p class="text-muted font-size-sm" style="font-weight: bold;">{{$artist['nationality']}}   </p>
                           
                                    
                                 </div>
                                    </a>
                                </div>

                                
                                <ul class="widget widget-usage unstyled span4 " style="margin-left:566px; margin-top:-520px; width:280px;">
                                        <li>
                                            <p>
                                                <strong >Singles</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Album</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Promotions</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Audience Monetization</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                                    <ul class="widget widget-usage unstyled span4" style="margin-top: -520px; margin-left:267px; width:280px;" >
                                        <li>
                                            <p>
                                                <strong >Fanbase</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Distribution</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Releases</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Merchendise</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                           
                            <!--/.module-->

                            
                       
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <script>
function deleteconfirmation() {
  confirm("Are you sure you want to remove this Agenda?");
}

var deleteLinks = document.querySelectorAll('.delete');

for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      var choice = confirm(this.getAttribute('data-confirm'));

      if (choice) {
        window.location.href = this.getAttribute('href');
      }
  });
}
</script>
    </body>
    @endsection
