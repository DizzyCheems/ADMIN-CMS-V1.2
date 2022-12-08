<html>
    <body>
@section('sendmesssage')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <!-------------------------------------------MODAL BODY!---------------------------------------------------->
      <div class="modal-body" >
      <form action="{{route('executive_agendaregister')}}" method="POST">
	{{ csrf_field() }}


	<div class="form-group input-group">
	
        <textarea type="input" name="agenda" class="form-control" name="message" placeholder="" type="text" style="width: 500px; height:200px;">
      
        </textarea> 
   
   
      </div>
       <!-- form-group// -->
                   
      </div>
      <!--------------------------------------------END OF MODAL BODY!--------------------------------------------->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>
<!-- ENDMODAL !-->
</body>
</html>
@endsection