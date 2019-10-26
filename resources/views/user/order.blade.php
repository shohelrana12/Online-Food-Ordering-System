@extends("user.layouts.base")
@section("main")

<section id="login-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-3 col-lg-6">
          <form action="{{url('confirm')}}" class="login-form" method="post">
          @csrf
            <div class="form-title">
              <h3>Your Oder</h3>
            </div>
            <div class="total-order">
              <h2 class="total" style="text-align: center">Total Amount {{$order->price}} Tk</h2>
            </div>
            <div class="form-title">
              <h3>Order Form</h3>
            </div>
            <input type="hidden" name="orderid" value="{{$order->id}}">
            <label for="student-password">Email</label>
            <input type="email" class="student-password" id="student-password" readonly="readonly" value="{{Auth::user()->email}}" required="required">
            <label for="student-password">Phone Number</label>
            <input type="text" class="student-password" id="student-password" readonly="readonly" value="{{Auth::user()->phone}}" required="required">
            <label for="student-name">Enter Your Location</label>
            <input type="text" class="student-id" id="student-id" name="location" required="required">
            <div class="form-title">
              <input type="Submit" name="confirm" Value="Confirm Order" class="btn btn-primary">
            </div>
            </div>
          </form>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
      </div>
    </div>
  </section>
@endsection
@push('scripts')


@endpush