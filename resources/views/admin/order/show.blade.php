@extends("admin.layouts.template")
@section("content")
<div class="card">
 
<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Order Id</th>
      <th>Item Name</th>
      <th>User Name</th>
      <th>User Phone</th>
      <th>Quantity</th>
      <th>Total Price</th>
      <th>User Location</th>
      <th>Order Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order as $order)
    <tr>
      <td>{{$order->id}}</td>
      <td>
      <?php
       $itemid = json_decode($order->item_id, true);
       $name='';
       foreach($itemid as $itemid){
         $name .=  \App\Item::where(['id' => $itemid])->pluck('name')->first().',';
       }
       echo $name ;
      ?>
      
      <td>
       {{\App\User::where(['id' => $order->user_id])->pluck('firstname','lastname')->first()}}
      </td>

      <td>
       {{\App\User::where(['id' => $order->user_id])->pluck('phone')->first()}}
      </td>

      <td>{{$order->quantity}}</td>
      <td>{{$order->price}}</td>
      <td>{{$order->location}}</td>
      <td>{{($order->status==1)?"Success":"Not Success"}}</td>
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