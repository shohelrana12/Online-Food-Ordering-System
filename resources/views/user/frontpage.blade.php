@extends("user.layouts.base")
@section("main")
<section id="hero">
    <div class="food-slider">
      <div>
        <div class="slide-image">
          <img src="{{asset('assets/img/slide1.jpg')}}" alt="">
          <div class="slider-caption">
            <h2 class="caption">Food Deal</h2>
            <a href="{{url('login')}}" class="sign-in">Sign In</a>
          </div>
        </div>
      </div>
      <div>
        <div class="slide-image">
          <img src="{{asset('assets/img/slide2.jpg')}}" alt="">
          <div class="slider-caption">
            <h2 class="caption">It's the food you love, delivered</h2>
            <a href="{{url('login')}}" class="sign-in">Sign In</a>
          </div>
        </div>
      </div>
      <div>
        <div class="slide-image">
          <img src="{{asset('assets/img/slide3.jpg')}}" alt="">
          <div class="slider-caption">
            <h2 class="caption">You prepare the food, we handle the rest</h2>
            <a href="{{url('login')}}" class="sign-in">Sign In</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
