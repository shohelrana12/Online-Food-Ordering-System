@extends("user.layouts.base")
@section("main")
<section id="login-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-3 col-lg-6">
          <form action="{{url('authenticate')}}" class="login-form" method="post">
            @csrf
            <div class="form-title">
              <h3>Login</h3>
            </div>
            <label for="student-name">Enter Your Mail</label>
            <input type="text" class="student-id" id="student-id" name="email" required="required">
            <label for="student-password">Password</label>
            <input type="password" class="student-password" id="student-password" name="password" required="required">
            <div class="submit-button">
              <button class="submit-btn">Login</button>
            </div>
          </form>
          <p>If you don't have an account? Please <a href="{{url('register')}}">Sign Up</a></p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
      </div>
    </div>
  </section>
@endsection