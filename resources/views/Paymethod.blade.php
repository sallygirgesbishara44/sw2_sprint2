@extends('layouts.nav')

@section('content')

    <div class="container">
  <div class="py-5 text-center">
    <h2><?php echo $title; ?></h2>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <?php $count = 0 ?>
        @foreach((array) session('order') as $id => $details)
          <?php ++$count ?>

        @endforeach

        <span class="text-muted">Your Order</span>
        <span class="badge badge-secondary badge-pill">{{$count}}</span>
      </h4>
      <ul class="list-group mb-3">
        <?php $total = 0 ?>

            @foreach((array) session('order') as $id => $details)

              <?php $total += $details['price'] * $details['quantity'] ?>

        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $details['name'] }}</h6>
            <small class="text-muted"> Quantity {{ $details['quantity'] }}</small>
          </div>
          <span class="text-muted">${{ $details['price'] }}</span>
        @endforeach
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>${{ $total }}</strong>
        </li>
      </ul>
      <?php session(['price' => $total]);?>

    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" action="{{url('login')}}"  method="post">
        @csrf


        <div class="mb-3">
          <label for="address1">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required name="address1" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>



        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" <?php if (isset($PT) && $PT=="Credit card")  echo "checked";?>checked required value="Credit card">
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"<?php if (isset($PT) && $PT==" Pay On Deliver")  echo "checked";?>  required value=" Pay On Deliver" >
            <label class="custom-control-label" for="debit">Pay On Deliver</label>
          </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" >Finishing Order</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; BurgerBar</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script>

@endsection
