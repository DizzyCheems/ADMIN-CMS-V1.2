<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<body style="background-image:url(/1064070_wallpaper-spots-light-background-circles-blue-wallpapers_2880x1800_h.jpg);">

@section('artist_register_form')

<div class="container" style="max-width:550px; margin-top:80px;" >

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Register Artist information</h4>

	<form action="{{route('executive_artistregisterprocess')}}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	
<div>
	@if(Session::has('success'))
<div class="alert alert-success">
	{{Session::get('success')}} 
</div>
@endif
</div>

    <div class="form-group input-group">	
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="artistname" class="form-control" placeholder="Full name" type="text" >

	</div> <!-- form-group// -->
	@error('artistname')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="realname" class="form-control" placeholder="Birth Name" type="text" >

	</div> <!-- form-group// -->
	@error('realname')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror

	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="number" class="form-control" placeholder="Contact Number" type="text" >

	</div> <!-- form-group// -->
	@error('number')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
		
		<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="nationality" class="form-control" placeholder="Nationality" type="text" >

	</div> <!-- form-group// -->
	@error('nationality')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
		
		<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="genre" class="form-control" placeholder="Music Genre" type="text" >

	</div> <!-- form-group// -->
	@error('genre')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror

		<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="dateregistered" class="form-control" placeholder="Date Registered" type="text">

	</div> <!-- form-group// -->
	@error('dateregistered')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror

		<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="address" class="form-control" placeholder="Address" type="text" >
	
	</div> <!-- form-group// -->
	@error('address')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		</div>
    	<input name="mail" class="form-control" placeholder="E-mail Address" type="text">
	
	</div> <!-- form-group// -->
	@error('mail')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
 
    <div class="form-group input-group">
    <div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
  
        <input name="image"  class="form-control" placeholder="Profile Picture" type="file">
	</div> <!-- form-group// -->

	@error('image')
    <div class="alert alert-danger" >{{ $message }}</div>
	@enderror

	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="background_img" class="form-control" placeholder="Profile Picture" type="file">
    </div> <!-- form-group// -->
	@error('background_img')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror

	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="secondbackground_img" class="form-control" placeholder="Profile Picture" type="file">
    </div> <!-- form-group// -->
	@error('secondbackground_img')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	

    <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block" style="margin-right:140px; margin-top:10px;"> Register</button>
    </div> <!-- form-group// -->      
                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
@endsection

