<header>
    <nav class="navbar navbar-expand-lg">
        <div class="navbar-brand">
          <a class="logo js-scroll-trigger" href="index.html"><img src="{{asset('assets/img/logo1.png')}}"></a>
        </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('find-resturant')}}">Find Restaurants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('food-item')}}">Find Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about-us')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
            </li>
            @if(Auth::user())
             <li class="nav-item">
              <a class="nav-link" href="{{url('logout')}}">Logout</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{url('login')}}">Login</a>
            </li>
            @endif
            
          </ul>
      </div>
    </nav>
 </header>