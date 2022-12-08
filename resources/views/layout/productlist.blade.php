<!DOCTYPE html>
<html lang="en">
@include('layout.modals.sendmessagemodal')

<head>
<title>TENTACIT|Aritst List|Admin|Control</title>
</head>
@section('productlist')
<body>

<div>
	@if(Session::has('success'))
	<div class="alert alert-success">
	{{Session::get('success')}} 
	</div>
	@endif
	</div>
			


<!-- MODAL !-->

<!-- Button trigger modal --
<a data-toggle="modal" data-target="#exampleModal">
  Launch demo modal             
</a>

!-- Modal -->

<!-- ENDMODAL !-->


        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="{{route('executive_homepage')}}"> <img src="Tentacit Shape transparent-0.png" style="width:70px; height:45px;">TENTACIT </a>
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
                            <li class="dropdown"><a href="#" class="d   ropdown-toggle" data-toggle="dropdown">Settings
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('phonebook_showdata')}}">Phonebook </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="icon-user-default-420x420.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
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
   
        @yield ('sendmesssage')
      
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
                        <div class="module">    
                            <div class="module-head">
                                <h3>
                                    All Artist</h3>
                            </div>
                            <div class="module-option clearfix">
                                <form>
                                    
                                <div class="input-append pull-left">
                                    <input type="text" class="span3" placeholder="Filter by name...">
                                    <button type="submit" class="btn">
                                        <i class="icon-search"></i>
                                    </button>

                                </div>
                                </form>
                                <div class="btn-group pull-right" data-toggle="buttons-radio">
                                
                                <a class="btn btn-small btn-primary" href="{{route('product_register')}}">Register New Product</a>
     
                                </div>
                            </div>
                         
                            <div class="module-body">   
                            @foreach($product as $product)
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="media user">
                                            <a class="media-avatar pull-left" href="#">
                                            <img src="" width="100px">
                                            </a>
                                           
                                            <div class="media-body">
                                                <h3 class="media-title">    
                                                {{$product['name']}}
                                                </h3>
                                                <p>
                                                    <small class="muted">{{$product['price']}}</small></p>
                                                <div class="media-option btn-group shaded-icon">
                                                    
                                                    <button class="btn btn-small" data-toggle="modal" data-target="#exampleModal">
                                                        <i class="icon-envelope"></i>
                                                    </button>
                                                    <a button class="btn btn-small" href="{{route('product_update_view',  $product['id'])}}">
                                                        <i class="icon-share-alt"></i>
                                                    </a>    
                                                                        
                                                                                                                                                            
                                                <a class="btn btn-small" href="{{route('product_delete',$product['id'])}}" >
                                                        <i class=" menu-icon icon-signout"></i></a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                        <div class="span6">
                                            <div class="media user">
                                                <a class="media-avatar pull-left" href="#">
                                                    <img src="Unused_music_icon.png">
                                                </a>
                                                <div class="media-body">
                                                    <h3 class="media-title">
                                                        NULL</h3>
                                                    <p> 
                                                        <small class="muted">NULL</small></p>
                                                    <div class="media-option btn-group shaded-icon">
                                                        <button class="btn btn-small">
                                                            <i class="icon-envelope"></i>
                                                        </button>
                                                        <button class="btn btn-small">
                                                            <i class="icon-share-alt"></i>
                                                        </button>
                                                        


                                                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!--/.row-fluid-->
                               
                               
                                   
                             
                                <div class="pagination pagination-centered">
                                    <ul>
                                        <li><a href="#"><i class="icon-double-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>  
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; 2021 Mjcube Technologies - Mjcube.com </b>All rights reserved.
        </div>
    </div>



	<script>
function deleteconfirmation() {
  confirm("Are you sure you want to remove this Contact?");
}

var deleteLinks = document.querySelectorAll('.delete');

for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      var choice = confirm(this.getAttribute('data-confirm'));

      if (choice) {
        window.location.href = this.getAttribute('button');
      }
  });
}


</script>


</body>
@endsection







