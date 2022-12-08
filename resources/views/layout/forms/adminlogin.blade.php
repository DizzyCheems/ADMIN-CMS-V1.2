<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

@section('admin_login') 
<body style="  background-image: url(efe-kurnaz-RnCPiXixooY-unsplash.jpg);">


<div class="container" style="max-width:550px; margin-top:130px;" >

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Admin Log in </h4>

	<form action="{{route('login.post')}}" method="POST">
	<div class="form-group input-group" >
		{{ csrf_field() }}
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Username" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
        <input name="password" class="form-control" placeholder="Password" type="Password">
    </div> <!-- form-group// -->


        <button type="submit" class="btn btn-primary btn-block" style="margin-left:-2px;"> Log in </button>
    </div> <!-- form-group// -->      
                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

@endsection





