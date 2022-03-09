@extends('master')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-sm-4">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
          </div>
          <div class="col-sm-4">
            <a class="font" href="/"><b> Go Back </b></a>
            <h3><b>Description  : {{$product['description']}}</b></h3>
            {{-- <h2>Product  : {{$product['name']}}</h2> --}}
            <h4>Category  : {{$product['category']}}</h4>
            <h3><b>Price  : ₹{{$product['price']}}</b></h3>
            <br><br>
            <form action="/add_to_cart" method="POST">
              <input type="hidden" name="product_id" value="{{$product['id']}}">
              @csrf
              <button class="btn btn-primary btn-lg btn-block font"><b>Add To Cart</b></button> 
            </form>
            <br><br>
            <a  href="http://localhost:8000/ordernow" class="btn btn-success btn-lg btn-block font"><b>Buy Now</b></a>
            <br><br>

        </div>
      </div>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection