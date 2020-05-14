@extends('layouts.app')
@section('content')
<div class="main-content-wrapper d-flex clearfix">
        <!-- Header Area Start -->
<div class="checkout_details_area mt-50 clearfix">

    <div class="cart-title">
        <h2>Payment info</h2>
    </div>

      <div class="creditCardForm">
          <div class="heading">
              <h1>Confirm Purchase</h1>
          </div>
          <div class="payment">
              <form action={{ route('order')}} method="post">
                @csrf
                  <div class="form-group owner">
                      <label for="owner">Owner</label>
                      <input name = '' type="text" class="form-control" id="owner">
                  </div>
                  <div class="form-group CVV">
                      <label for="cvv">CVV</label>
                      <input name = '' type="text" class="form-control" id="cvv">
                  </div>
                  <div class="form-group" id="card-number-field">
                      <label for="cardNumber">Card Number</label>
                      <input name = 'card' type="text" class="form-control" id="cardNumber">
                  </div>
                  <div class="form-group" id="expiration-date">
                      <label>Expiration Date</label>
                      <select>
                          <option value="01">January</option>
                          <option value="02">February </option>
                          <option value="03">March</option>
                          <option value="04">April</option>
                          <option value="05">May</option>
                          <option value="06">June</option>
                          <option value="07">July</option>
                          <option value="08">August</option>
                          <option value="09">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                      </select>
                      <select>
                          <option value="20"> 2020</option>
                          <option value="21"> 2021</option>
                          <option value="22"> 2022</option>
                          <option value="23"> 2023</option>
                          <option value="24"> 2024</option>
                          <option value="25"> 2025</option>
                      </select>
                  </div>
                  <div class="form-group" id="credit_cards">
                      <img src="{{URL::asset('images/visa.jpg')}}" id="visa">
                      <img src="{{URL::asset('images/mastercard.jpg')}}" id="mastercard">
                      <input type="hidden" name="fname" id="hiddenField" value="{{$req->fname}}" />
                      <input type="hidden" name="lname" id="hiddenField" value="{{$req->lname}}" />
                      <input type="hidden" name="address" id="hiddenField" value="{{$req->address}}" />
                      <input type="hidden" name="post" id="hiddenField" value="{{$req->postcode}}" />
                      <input type="hidden" name="phone" id="hiddenField" value="{{$req->phone_number}}" />
                      <input type="hidden" name="comm" id="hiddenField" value="{{$req->comment}}" />

                  </div>
                  <div class="form-group" id="pay-now">
                      <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                  </div>
              </form>
          </div>
      </div>
</div>
</div>

@endsection
