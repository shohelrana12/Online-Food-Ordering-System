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
	                <h3 class="card-title">Add Item</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form role="form" method="post" action="{{url('admin/store-item')}}">
	              	@csrf
	                <div class="card-body">
					<div class="row">
	                	<div class="col-md-6">
	                		<div class="form-group">
			                    <label for="exampleInputEmail1">Restuarant Name</label>
			                    <select class="form-control" name="resurent_id" required="required">
			                    	@foreach($resturent as $resturent)
			                    	<option value="{{$resturent->id}}">{{$resturent->name}}</option>
			                    	@endforeach
			                    </select>
		                    </div>
	                	</div>	
	                	<div class="col-md-6">
	                		<div class="form-group">
			                    <label for="exampleInputEmail1">Item Name</label>
			                    <input type="text" class="form-control"  placeholder="Item Name " name="name" required="required">
		                    </div>
	                	</div>	
					</div>


					<div class="row">
	                	<div class="col-md-6">
	                		<div class="form-group">
			                    <label for="exampleInputEmail1">Price</label>
			                    <input type="number" class="form-control"  placeholder="Item Price " name="price" required="required">
		                    </div>
	                	</div>	
	                	<div class="col-md-6">
	                		<div class="form-group">
			                    <label for="exampleInputEmail1">Item Type</label>
			                    <select class="form-control" name="type" required="required">
			                    	<option>Chicken</option>
			                    	<option>Mutton</option>
			                    	<option>Beef</option>
			                    </select>
			                    	
			                   
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

@endpush