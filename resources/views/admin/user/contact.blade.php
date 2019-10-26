@extends("admin.layouts.template")
@section("content")
<div class="card">
<!-- /.card-header -->
<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>User Email</th>
      <th>User Message</th>
    </tr>
    </thead>
    <tbody>
    @foreach($user as $user)
    <tr>
      <td>{{$user->email}}</td>
      <td>{{$user->message}}</td>
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