@extends('master')
@section('content')
  <div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>    
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Results For Product</h4>
            <div class="carousel-inner">
              @foreach ($products as $item)
              <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                  <img class="trending-img" src="{{$item['gallery']}}">
                  <div class="">
                    <h3><b>{{$item['name']}}</b></h3>
                    <h4>{{$item['description']}}</h4><br><br>
                    

                  </div>
                </a>  
                </div>
              @endforeach
          </div>
    </div>
  </div>
@endsection