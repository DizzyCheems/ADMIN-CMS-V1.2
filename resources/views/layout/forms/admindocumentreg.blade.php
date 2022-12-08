<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body style="background-image:url(grey-white-abstract-background-geometry-shine-layer-element-vector-presentation-design-suit-business-corporate-institution-204368345.jpg);">


@section('documentreg')
<div class="container" style="max-width:550px; margin-top:80px;" >


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Submit New Document</h4>



	<form action="{{route('executive_document_register_post')}}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}


	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Document Name" type="text">
    </div> <!-- form-group// -->
	@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="type" class="form-control" placeholder="Agenda" type="text">

    </div> <!-- form-group// -->
	@error('type')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		</div>
    	<input name="date_published" class="form-control" placeholder="Date Written" type="text">
    </div> <!-- form-group// -->
	@error('date_published')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="docs" class="form-control" placeholder="File" type="file">

    </div> <!-- form-group// -->
	@error('docs')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->

	
    <div class="form-group input-group">
                                       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" style="margin-right:290px; margin-top:10px;"> Submit </button>
    </div> <!-- form-group// -->      
                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
@endsection

