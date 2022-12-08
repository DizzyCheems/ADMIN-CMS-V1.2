<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body style="background-image:url(1064070_wallpaper-spots-light-background-circles-blue-wallpapers_2880x1800_h.jpg);">


@section('addemployee')
<div class="container" style="max-width:550px; margin-top:80px;" >


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Add New Employee</h4> 



	<form action="{{route('executive_employeeregisterprocess')}}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}


	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="employeename" class="form-control" placeholder="Full Name" type="text">
    </div> <!-- form-group// -->
	@error('employeename')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="occupation" class="form-control" placeholder="Occupation/Role" type="text">

    </div> <!-- form-group// -->
	@error('occupation')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		 </div>
        <input name="address" class="form-control" placeholder="Address" type="text">

    </div> <!-- form-group// -->
	@error('address')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-flag"></i> </span>
		 </div>
        <input name="nationality" class="form-control" placeholder="Nationality" type="text">

    </div> <!-- form-group// -->
	@error('nationality')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input name="phonenumber" class="form-control" placeholder="Phonenumber" type="text">
    </div> <!-- form-group// -->
	@error('phonenumber')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="E-mail Address" type="text">
    </div> <!-- form-group// -->

	@error('email')
    <div class="alert alert-danger" >{{ $message }}</div>
	@enderror

    <div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
         <input name="image"  class="form-control" placeholder="Profile Picture" type="text" readonly>
        <input name="image"  class="form-control" placeholder="Profile Picture" type="file">
    </div> <!-- form-group// -->

	@error('image')
    <div class="alert alert-danger" >{{ $message }}</div>
	@enderror
	
    <div class="form-group input-group">
                                       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" style="margin-right:290px; margin-top:10px;"> Register </button>
    </div> <!-- form-group// -->      
                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
@endsection

