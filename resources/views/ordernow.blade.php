@extends('master')
@section('content')
  <div class="custom-product">
      <div class="col-sm-4">
    <table class="table table-striped">

        <tbody>
          <tr>
            <td>Product price</td>
            <td>{{$total}} Rupees</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>0 Rupees</td>
          </tr>
          <tr>
            <td>Delivery Charge</td>
            <td>50</td>
          </tr>
          <tr>
            <td><b>Total Amount</b></td>
            <td><b>{{$total + 50}}</b></td>
          </tr>
        </tbody>
      </table>
      <form method="POST" action="orderplace">
        @csrf
        <div class="form-group">
          <textarea name="address" class="form-control" placeholder="Write Your Complete Address"></textarea>
        </div>
        <div class="form-group">
            <label>Payment Method</label>
            <p><input type="radio" value="cash" name="payment">&nbsp<span>Online Payment</span></p>
            <p><input type="radio" value="cash" name="payment">&nbsp<span>EMI Payment</span></p>
            <p><input type="radio" value="cash" name="payment">&nbsp<span>Cash On Delivery</span></p>
        </div>
        <div class="checkbox">
        </div>
        <button type="submit" class="btn btn-success">Place Order</button>
      </form>
</div>
  </div>
@endsection