@extends('main.master')

@section('shop')
    <div class="content">
        <div class="container mt-5 px-5">

            <div class="mb-4 pre">


                <h2>Confirm order and pay</h2>
                <span>Hello {{ $user->name }} please fill the form below to checkout.</span>
            </div>

            <div class="row">

                <div class="col-md-8">
                    <form action="" id="paymentForm">

                        <div class="card p-3">

                            {{-- <h6 class="text-uppercase">Payment details</h6>
                            <div class="inputbox mt-3"> <input type="text" name="name" class="form-control"
                                    required="required"> <span>Name on card</span> </div>


                            <div class="row">

                                <div class="col-md-6">

                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="name"
                                            class="form-control" required="required"> <i class="fa fa-credit-card"></i>
                                        <span>Card Number</span>


                                    </div>


                                </div>

                                <div class="col-md-6">

                                    <div class="d-flex flex-row">


                                        <div class="inputbox mt-3 mr-2"> <input type="month" name="expiry"
                                                class="form-control" required="required" value=""> (Expiry)</div>

                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="name"
                                                class="form-control" required="required"> <span>CVV</span> </div>


                                    </div>


                                </div>


                            </div> --}}



                            <div class="mt-4 mb-4">

                                <h6 class="text-uppercase">Billing Address</h6>


                                <div class="row mt-3">

                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="address"
                                                class="form-control" required="required"> <span>Street Address</span> </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="city"
                                                class="form-control" required="required"> <span>City</span> </div>
                                    </div>

                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <div class="inputbox mt-3 mr-2">
                                            <select name="region" id="region" class="form-control" required="required">
                                                <option value="">--Select Region --</option>
                                                <option value="Ahafo">AHAFO</option>
                                                <option value="Ashanti">ASHANTI</option>
                                                <option value="Bono East">BONO EAST</option>
                                                <option value="Brong Ahafo">BRONG AHAFO</option>
                                                <option value="Central">CENTRAL</option>
                                                <option value="Eastern">EASTERN</option>
                                                <option value="Greater Accra">GREATER ACCRA</option>
                                                <option value="Northern">NORTHERN</option>
                                                <option value="North East">NORTH EAST</option>
                                                <option value="Oti">OTI</option>
                                                <option value="Savannah">SAVANA</option>
                                                <option value="Upper East">UPPER EAST</option>
                                                <option value="Upper West">UPPER WEST</option>
                                                <option value="Volta">VOLTA</option>
                                                <option value="Western">WESTERN</option>
                                                <option value="Western North">WESTERN NORTH</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="locality"
                                                class="form-control" required="required"> <span>Locality</span> </div>
                                    </div>
                                    <input type="hidden" name="amount" id="amount" value="{{ $product->price }}">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <input type="hidden" name="email" value="{{ $user->email }}" id="email-address">

                                </div>

                                <div class="row mt-2">
                                    <h5>DELIVERY INFO:</h5>
                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="delivery_address"
                                                class="form-control" required="required"> <span>Deliver Address</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="name"
                                                class="form-control" required="required"> <span>GPS Address</span> </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="mt-4 mb-4 d-flex justify-content-between">
                            <button class="btn btn-success px-3 pay" onclick="payWithPaystack(event)">Checkout</button>

                        </div>
                    </form>


                </div>

                <div class="col-md-4">

                    <div class="card card-blue p-3 text-white mb-4 side">

                        <img class="text-white mb-4" src="{{ asset($product->primary_image) }}" alt=""
                            style="justify-content: center !important; align-items:center !important; overflow: hidden; width: inherit;">

                        <span>You have to pay</span>
                        <div class="d-flex flex-row align-items-end mb-3">
                            <h1>Gh₵ {{ $product->price }}.00</h1>
                        </div>

                        <p>{{ $product->description }}</p>

                        <div class="hightlight">


                        </div>

                    </div>

                </div>

            </div>


        </div>
    </div>
@endsection
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

<link rel="stylesheet" href="{{ asset('main/assets/css/checkout.css') }}">

<script src="https://js.paystack.co/v1/inline.js"></script>

<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    function payWithPaystack(e) {
        e.preventDefault();

        let handler = PaystackPop.setup({
            key: 'pk_test_989007f464df9f461740fc76aacd0149bdbd3e62', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            ref: '' + Math.floor((Math.random() * 1000000000) +
            1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function() {
                alert('Window closed.');
            },
            callback: function(response) {
                let reference = response.reference;

                s.ajax({
                    type: "GET",
                    url: "{{URL::to('verify-payment')}}/"+reference,
                    dataType: "dataType",
                    success: function (response) {

                    }
                });
            }
        });

        handler.openIframe();
    }
</script>
