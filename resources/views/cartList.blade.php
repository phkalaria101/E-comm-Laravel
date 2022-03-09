@extends('master')
@section('content')
  <div class="custom-product">
   
    <div class="col-md-12">
        <div class="trending-wrapper">
            <h4>Cart List</h4>
              <a class="btn btn-success" href="/ordernow">Order Now</a><br><br>
            <div class="carousel-inner">
              @foreach ($products as $item)
              <div class="row searched-item cart-list-devider">
                <div class="col-md-2">
                <a href="detail/{{$item->id}}">
                  <img class="trending-img" src="{{$item->gallery}}">
                </a>
                </div>
                
                <div class="col-md-8">
                        <h3><b>{{$item->name}}</b></h3>
                        <h4>{{$item->description}}</h4><br>
                        <h3><b>{{$item->price}}</b></h3>
                </div>
                   
                <div class="col-md-2">
                    <a href="/removeFromCart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                </div>

          </div>
          @endforeach
          <a class="btn btn-success" href="/ordernow">Order Now</a><br><br>
    </div>
  </div>
@endsection