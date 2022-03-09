@extends('master')
@section('content')
  <div class="custom-product">
   
    <div class="col-md-12">
        <div class="trending-wrapper">
            <h4 class="font"><b>Orders List</b></h4>
            <div class="carousel-inner">
              @foreach ($orders as $item)
              <div class="row searched-item cart-list-devider">
                <div class="col-md-2">
                <a href="detail/{{$item->id}}">
                  <img class="trending-img" src="{{$item->gallery}}">
                </a>
                </div>
                
                <div class="col-md-8">
                        <h3><b>{{$item->name}}</b></h3>
                        <h4><b>{{$item->description}}</b></h4>
                        <h4>Delivery Status :{{$item->status}}</h4>
                        <h4>Payment Status :{{$item->payment_status}}</h4>
                        <h4>Payment Method :{{$item->payment_method}}</h4>
                        <h4>Delivery Address :{{$item->address}}</h4>
                        <h3><b>₹{{$item->price}}</b></h3>


                </div>
                   
                <div class="col-md-2">
                    {{-- <a href="/removeFromCart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a> --}}
                </div>

          </div>
          @endforeach
    </div>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection