<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<body style="background-image:url(1064070_wallpaper-spots-light-background-circles-blue-wallpapers_2880x1800_h.jpg);">

@section('documentupdate')

<div class="container" style="max-width:550px; margin-top:80px;" >

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Update Employee Credentials</h4>

	<form action="{{route('executive_employeeupdateprocessing', $employees['id'])}}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	
<div>
	@if(Session::has('success'))
<div class="alert alert-success">
	{{Session::get('success')}} 
</div>
@endif
</div>

    <input type="hidden" name="id" value="{{$docs['id']}}">
	<div class="form-group input-group">	
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="document_name" class="form-control" placeholder="Full name" type="text" value="{{$employees['employeename']}}">

	</div> <!-- form-group// -->
	@error('document_name')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="type" class="form-control" placeholder="Phonenumber" type="text" value="{{$employees['phonenumber']}}">

	</div> <!-- form-group// -->
	@error('type')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		</div>
    	<input name="date_published" class="form-control" placeholder="E-mail Address" type="email" value="{{$employees['email']}}">
	
	</div> <!-- form-group// -->
	@error('date_published')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
      
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="file"  class="form-control" placeholder="File" type="file">
	
    </div> <!-- form-group// -->

	@error('file')
    <div class="alert alert-danger" >{{ $message }}</div>
	@enderror
                                       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" style="margin-right:140px; margin-top:10px;"> Update Document </button>
    </div> <!-- form-group// -->      
                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
@endsection

