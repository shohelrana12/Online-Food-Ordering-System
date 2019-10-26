@extends("user.layouts.base")
@section("main")
<section id="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-3 col-lg-6">
          <form action="{{url('contacts')}}" class="login-form" method="post">
            @csrf
            <div class="form-title">
              <h3>Contact Us</h3>
            </div>
            <label for="student-name">Enter Your Message</label>
            <textarea name="message" id="" cols="30" rows="10" class="message-fd" required="required"></textarea>
            <label for="student-password">Enter Your Mail</label>
            <input type="email" class="student-password" id="student-password" name="email" required="">
            <div class="submit-button">
              <button class="submit-btn">Send</button>
            </div>
          </form>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
      </div>
    </div>
  </section>
@endsection