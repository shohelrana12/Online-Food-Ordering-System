@extends("admin.layouts.template")
@section("content")
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Add Resturent</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form role="form" method="post" action="{{url('admin/store-resturent')}}">
	              	@csrf
	                <div class="card-body">
					<div class="row">
	                	<div class="col-md-6">
	                		<div class="form-group">
			                    <label for="exampleInputEmail1">Restuarant Name</label>
			                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Restuarant Name" required="required">
		                    </div>
	                	</div>	
	                	<div class="col-md-6">
	                		<div class="form-group">
			                    <label for="exampleInputEmail1">Location</label>
			                    <input type="text" class="form-control" id="location" placeholder="Location" name="location" required="required">
		                    </div>
	                	</div>	
					</div>


					<div class="row">
	                	<div class="col-md-6">
	                		<div class="form-group">
			                    <label for="exampleInputEmail1">Phone Number</label>
			                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number" name="phone" required="required">
		                    </div>
	                	</div>	
	                	<div class="col-md-6">
	                		<div class="form-group">
			                    <label for="exampleInputEmail1">Latitude and Logititude</label>
			                    <input type="text" class="form-control" id="lat" placeholder="Latitude and Logititude" readonly="readonly" required="required">

			                    <input type="hidden" name="latituted" id="latituted">
			                    <input type="hidden" name="logituted" id="logituted">
			                   
		                    </div>
	                	</div>	
					</div>


					<div class="row">
	                		
	                	<div class="col-md-12">
	                		<div class="form-group">
			                    <label for="exampleInputEmail1">Add Description</label>
			                     <textarea name="description" id="" cols="30" rows="10" class="form-control" required="required"></textarea>
			                   
		                    </div>
	                	</div>	
					</div>

	                <!-- /.card-body -->
	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
	                </div>
	              </form>
	            </div>
           </div>
       </div>
   </div>
</section>
@endsection
@push("myscript")
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBULAgH0vJt-Sce1kRDfw8MImLIu61IG_0&libraries=places"></script>
<script type="text/javascript">
	let input = document.getElementById('location');
    let autocomplete = new google.maps.places.Autocomplete(input);
	

     $(document).on("change","#location",function(){
     	let latitude;
		 let longitude;

	     google.maps.event.addListener(autocomplete, 'place_changed', function () {
	                let searchplace = autocomplete.getPlace();
	                latitude = searchplace.geometry.location.lat();
	                longitude = searchplace.geometry.location.lng();
	                $("#lat").val("Lat:"+latitude+" Lng: "+longitude);
	                $("#latituted").val(latitude);
	                $("#logituted").val(longitude);
	     });

     })

</script>
@endpush