@extends("user.layouts.base")
@section("main")

<section id="select-food-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-6 col-lg-5">
          <div class="select-food">
            <h2>Select Food Items: </h2>
             @foreach($item as $item)
              <div class="items" id="{{$item->id}}" onclick="order(this.id)">
                <h3 class="item" id="itemname_{{$item->id}}">{{$item->name}} </h3>
               <select name="" id="" class="item1">
                  <option value="">{{$item->type}}</option>
                </select>
                <div class="price">
                  <h5>Price</h5>
                  <p id="itemprice_{{$item->id}}">{{$item->price}}</p>
                </div>
              </div>
              @endforeach
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="total-order">
            <h2>Your Order</h2>
            <ul id="orderul">
              
              
            </ul>
            <h2 class="total" id="totalprice"></h2>

            @if(Auth::user())
             <form  class="submit-button" action="{{url('order')}}" id="orderform" onsubmit="return validateForm()">
              @csrf
              <input type="hidden" name="totalprice" value="" id="totalpriceform" required="">
              <input type="hidden" name="user" value="{{Auth::user()->id}}" required="">
              <input class="submit-btn" type="submit" name="Order" Value="Order">
            </form>
            @else
              <a class="submit-btn" href="{{url('login')}}">Please Login To Order</a>
            @endif
           
          </div>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
      </div>
    </div>
  </section>
  @endsection
  @push('scripts')

<script type="text/javascript">

  let i=0;
  let totalPrice=0;
  function order(id) {
    let itemname = $('#itemname_'+id).text();
    let itemprice = $('#itemprice_'+id).text();
    i+=1;
    totalPrice = totalPrice+parseInt(itemprice);

    let items =`
              <li>
                <p class="food-choice">
                  <span class="number">${i}</span> 
                  <span class="food-name">${itemname}</span>
                </p>
                <p class="food-price">${itemprice}Tk</p>
              </li>`

    if("{{Auth::user()}}"){
      let formdata=`<input type="hidden" name="item[]" value="${id}">`
      $("#orderform").append(formdata);
       $("#totalpriceform").val(totalPrice);
    }
    $("#orderul").append(items);
    $("#totalprice").text(totalPrice + " Tk");
  }


  function validateForm(){
    var price = document.forms["orderform"]["totalprice"]; 
    if (price.value == "")                                  
    { 
        window.alert("Please select at least on Item for order"); 
        return false; 
    } 
  }
</script>

  @endpush