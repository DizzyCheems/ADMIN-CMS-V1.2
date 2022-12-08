<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body style="background-image:url(1064070_wallpaper-spots-light-background-circles-blue-wallpapers_2880x1800_h.jpg);">


@section('addproduct')
<div class="container" style="max-width:550px; margin-top:80px;" >


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Add New Contact</h4>



	<form action="{{route('product_register_post')}}" method="POST">
	{{ csrf_field() }}


	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Product Name" type="text">
    </div> <!-- form-group// -->
	@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="price" class="form-control" placeholder="Price" type="text">

    </div> <!-- form-group// -->
	@error('price')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		</div>
    	<input name="quantity" class="form-control" placeholder="Quantity" type="text">
    </div> <!-- form-group// -->
	@error('quantity')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	
    <div class="form-group input-group">
                                       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" style="margin-right:140px; margin-top:10px;"> Add Contact </button>
    </div> <!-- form-group// -->      
                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
@endsection

