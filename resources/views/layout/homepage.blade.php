<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TENTACIT|admin|index|homepage</title>
       
    </head>
    
    <body style="background-image:url(efe-kurnaz-RnCPiXixooY-unsplash.jpg);">
     
        @section('admin_homepage')

    <div style="margin-left:0px;">
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
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>0</b>
                                        <p class="text-muted">
                                            Growth</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>0</b>
                                        <p class="text-muted">
                                            New Users</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>BROKE</b>
                                        <p class="text-muted">
                                            Profit</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="{{route('executive_inbox')}}" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                                </a><a href="{{route('admin_artistlist')}}" class="btn-box small span4"><i class="icon-group"></i><b>Artist</b>
                                                </a><a href="{{route('admin_employeelist')}}" class="btn-box small span4"><i class="icon-group"></i><b>Employees </b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="{{route('executive_productlist')}}" class="btn-box small span4"><i class="icon-save"></i><b>Products</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b> Liabilities</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Realtime Data</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Realtime Data</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Realtime Data</strong> <span class="pull-right small muted">0%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 0%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Realtime Data</strong> <span class="pull-right small muted">0%</span>
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
                            
                            <div class="module">
                                <div class="module-head">
                                                            
                                <h3>  Calendar Agenda   </h3>
                                <a class="btn btn-small btn-primary" href="{{route('executive_agendareg')}}" style="margin-left:700px; top:30px;">Create Agenda</a>
 
                                </div>   
                                

                                
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Agenda
                                                </th>
                                                <th>
                                                    Date Issued
                                                </th>
                                                <th>
                                                    Deadline
                                                </th>
                                                <th>
                                                    Person's Responsible
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach($agendas as $agendas)
                                        <tbody>
                                        <tr class="odd gradeX">
											<td>{{$agendas['agenda']}}</td>
											<td>{{$agendas['date']}}</td>
											<td>{{$agendas['deadline']}}</td>   
											<td>{{$agendas['person']}}</td>
                                            <td><a href="">VIEW|
												|<a href="{{route('executive_agenupdata',$agendas['id'])}}"> <i class="glyphicon glyphicon-pencil">EDIT</a></i>
												<a href="{{route('executive_agendatadelete',$agendas['id'])}}" data-confirm="Are you sure you want to remove this Agenda?" class="delete">|DELETE|</i>
											</td>
                                        </tr>
                                        </tbody>
                                        @endforeach
                                        <tfoot>
                                         <tr>
                                                <th>
                                                    Agenda
                                                </th>
                                                <th>
                                                    Date Issued
                                                </th>
                                                <th>
                                                    Deadline
                                                </th>
                                                <th>
                                                    Person's Responsible
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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
