@extends("admin.layouts.template")
@section("content")
<div class="card">
  <a class="btn btn-primary" href="{{url('admin/store-item')}}">Add New Item</a>
<!-- /.card-header -->
<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Resturent Name</th>
      <th>Item Name</th>
      <th>Type </th>
      <th>Price</th>
      <th>Description</th>
    </tr>
    </thead>
    <tbody>
    @foreach($item as $item)
    <tr>
      <td>{{$item->resturent->name}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->type}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->description}}</td>
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