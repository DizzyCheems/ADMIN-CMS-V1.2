<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<body style="background-image:url(1064070_wallpaper-spots-light-background-circles-blue-wallpapers_2880x1800_h.jpg);">

@section('employeeprofileupdate')

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

    <input type="hidden" name="id" value="{{$employees['id']}}">
	<div class="form-group input-group">	
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="employeename" class="form-control" placeholder="Full name" type="text" value="{{$employees['employeename']}}">

	</div> <!-- form-group// -->
	@error('employeename')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="phonenumber" class="form-control" placeholder="Phonenumber" type="text" value="{{$employees['phonenumber']}}">

	</div> <!-- form-group// -->
	@error('phonenumber')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		</div>
    	<input name="email" class="form-control" placeholder="E-mail Address" type="email" value="{{$employees['email']}}">
	
	</div> <!-- form-group// -->
	@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="occupation" class="form-control" placeholder="Role" type="text" value="{{$employees['occupation']}}">
    </div> <!-- form-group// -->
	@error('occupation')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">

    <div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
         <input name="image"  class="form-control" placeholder="Profile Picture" type="text" readonly>
        <input name="image"  class="form-control" placeholder="Profile Picture" type="file">
		<img src="/image/{{ $employees->image }}" width="100px">
    </div> <!-- form-group// -->

	@error('image')
    <div class="alert alert-danger" >{{ $message }}</div>
	@enderror
                                       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" style="margin-right:140px; margin-top:10px;"> Update Credentials </button>
    </div> <!-- form-group// -->      
                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
@endsection

