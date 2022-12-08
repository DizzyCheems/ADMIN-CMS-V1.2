<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<html>
@section('updateagenda')	
<body style="background-image:url(grey-white-abstract-background-geometry-shine-layer-element-vector-presentation-design-suit-business-corporate-institution-204368345.jpg);">



<div class="container" style="max-width:550px; margin-top:80px;" >

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Update Agenda</h4>

	<form action="{{route('executive_agenupdataprocess', $agendas['id'])}}" method="POST">
	{{ csrf_field() }}
	

    <input type="hidden" name="id" value="{{$agendas['id']}}">
	<div class="form-group input-group">	
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="agenda" class="form-control" placeholder="Agenda" type="text" value="{{$agendas['agenda']}}">

	</div> <!-- form-group// -->
	@error('agenda')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="date" class="form-control" placeholder="Date Issued" type="text" value="{{$agendas['date']}}">

	</div> <!-- form-group// -->
		@error('date')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		</div>
    	<input name="deadline" class="form-control" placeholder="Deadline" type="text" value="{{$agendas['deadline']}}">
	
	</div> <!-- form-group// -->
	@error('deadline')
    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
    <div class="form-group input-group">
    	<div class="input-group-prepend">
	</div> <!-- form-group end.// -->
	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="person" class="form-control" placeholder="Person's Responsible" type="text" value="{{$agendas['person']}}">
    </div> <!-- form-group// -->
	@error('person')
    <div class="alert alert-danger">{{ $message }}</div>
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
    <div class="alert alert-danger" >{{$message }}</div>
	@enderror
	

    <div class="form-group input-group">
                                       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" style="margin-right:140px; margin-top:10px;"> Update Agenda </button>
    </div> <!-- form-group// -->      
                                                           
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
</body>
</html>
@endsection

