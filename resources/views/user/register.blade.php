@extends("user.layouts.base")
@section("main")
<section id="login-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-3 col-lg-6">
          <form action="{{url('sign-up')}}" class="login-form" method="post">
            @csrf
            <div class="form-title">
              <h3>Register</h3>
            </div>
            <label for="student-name">Fisrt Name</label>
            <input type="text" class="student-id" id="student-id" name="firstname" required="required">
            <label for="student-password">Last Name</label>
            <input type="text" class="student-password" id="student-password" name="lastname" required="required">
            <label for="student-password">Email</label>
            <input type="email" class="student-password" id="student-password" name="email" required="required">
            <label for="student-password">Phone Number</label>
            <input type="text" class="student-password" id="student-password" name="phone" required="required">
            <label for="student-password">Password</label>
            <input type="password" class="student-password" id="student-password" name="password" required="required">
            <div class="submit-button">
              <button class="submit-btn">Register</button>
            </div>
          </form>
          <p>If you have an account? Please <a href="{{url('login')}}">Login</a></p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
      </div>
    </div>
  </section>
@endsection