<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TENTACIT|Admin|Phonebook</title>
	
</head>
@section('agendadata')


<body style="background-image:url(istockphoto-1174989482-170667a.jpg);">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  	<img src="Tentacit Shape transparent-0.png" style="width:70px; height:45px;">	Agendas
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li class="active"><a href="#">
							<i class="icon-envelope"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-eye-open"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-bar-chart"></i>
						</a></li>
					</ul>

					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="{{route('executive_agendareg')}}">Create Agenda</a>
							<ul class="dropdown-menu">
								<li><a href="#">Item No. 1</a></li>
								
								<li><a href="#">Don't Click</a></li>
								<li class="divider"></li>
								<li class="nav-header">Example Header</li>
								<li><a href="#">A Separated link</a></li>
															</ul>
						</li>
						
						<li><a href="#">
							Homepage
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="none.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
		
	<div>
	@if(Session::has('success'))
	<div class="alert alert-success">
	{{Session::get('success')}} 
	</div>
	@endif
	</div>
						<div class="module" style="margin-top:120px;">
							<div class="module-head">
								<h3>Agendas</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Agenda</th>
											<th>Date Issued</th>
											<th>Deadline</th>
											<th>Person's Responsible</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@foreach($agendas as $agendas)
									<tr class="odd gradeX">
											<td>{{$agendas['agenda']}}</td>
											<td>{{$agendas['date']}}</td>
											<td>{{$agendas['deadline']}}</td>
											<td>{{$agendas['person']}}</td>
											<td><a href="">VIEW|
												|<a href="{{route('executive_agenupdata',$agendas['id'])}}"> <i class="glyphicon glyphicon-pencil">EDIT</a></i>
												<a href="{{route('executive_agendatadeleteprocess',$agendas['id'])}}" data-confirm="Are you sure you want to remove this Agenda?" class="delete">|DELETE|</i>
											</td>
										</tr>
									</tbody>
									@endforeach
									<tfoot>
										<tr>
                                             <th>Agenda</th>
											<th>Date Issued</th>
											<th>Deadline</th>
											<th>Person's Responsible</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
								
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

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