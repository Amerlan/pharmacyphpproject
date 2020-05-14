@extends('layouts.app')
@section('content')

    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Checkout</h2>
                        </div>

                        <form id = 'mform' action={{ route('store')}} method="post">
                          @csrf
                            <div class="col-md-6 mb-3">
                                <label for="owner">First Name</label>
                                <input name = 'fname' type="text" class="form-control" id="owner">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="owner">Last Name</label>
                              <input name = 'lname' type="text" class="form-control" id="owner">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="owner">Address</label>
                              <input name = 'address' type="text" class="form-control" id="owner">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="owner">Postcode</label>
                              <input name = 'postcode' type="text" class="form-control" id="owner">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="owner">Phone number</label>
                              <input name = 'phone_number' type="text" class="form-control" id="owner">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="owner">Comments</label>
                              <input name = 'comment' type="text" class="form-control" id="owner">
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>Total:</span> <span>{{$totalprice}}</span></li>
                        </ul>


                        <div class="cart-btn mt-15">
                          <a href="{{ route('store') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('mform').submit();">
                              Confirm
                          </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
