@extends("admin.layouts.template")
@section("content")
<div class="card">
	<a class="btn btn-primary" href="{{url('admin/store-resturent')}}">Add New Resturent</a>
<!-- /.card-header -->
<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Resturent Name</th>
      <th>Location</th>
      <th>Phone</th>
      <th>Description</th>
    </tr>
    </thead>
    <tbody>
    @foreach($resturent as $resturent)
    <tr>
      <td>{{$resturent->name}}</td>
      <td>{{$resturent->location}}</td>
      <td>{{$resturent->phone}}</td>
      <td>{{$resturent->description}}</td>
      
      
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
<!-- /.card-body -->
</div>
        
@endsection

@push("myscript")
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

@endpush