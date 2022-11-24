@extends('main.master')

@section('shop')
    <div class="content">
        <div class="container mt-5 px-5">

            <div class="mb-4 pre">


                <h2>Confirm order and pay</h2> <span></span>
                <span>Hello {{ $user->name }} please fill the form below to checkout.</span>
            </div>

            <div class="row">

                <div class="col-md-8">
                    <form action="" id="paymentForm">

                        <div class="card p-3">

                            <div class="mt-4 mb-4">

                                <h6 class="text-uppercase">Billing Address</h6>


                                <div class="row mt-3">

                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="address"
                                                class="form-control" id="street_address" required> <span>Street Address</span> </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="city"
                                                class="form-control" id="city" required> <span>City / Town</span> </div>
                                    </div>

                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <div class="inputbox mt-3 mr-2">
                                            <select name="region" id="region" class="form-control" required>
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
                                    <input type="hidden" name="amount" id="amount" value="{{ $product->price }}" required>
                                    <input type="hidden" name="user_id" value="{{ $user->id }}" id="user_id" required>
                                    <input type="hidden" name="email" value="{{ $user->email }}" id="email-address" required>
                                    <input type="hidden" name="product_id" value="{{ $product->id }}" id="product_id" required>

                                </div>

                                <div class="row mt-2">
                                    <h5>DELIVERY INFO:</h5>
                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="delivery_address"
                                                class="form-control" id="delivery_address" required> <span>Deliver Address</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="name"
                                                class="form-control" id="gps" required> <span>GPS Address</span> </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="mt-4 mb-4 d-flex justify-content-between">
                            <button type="submit" class="btn btn-success px-3 pay" onclick="payWithPaystack(event)">Checkout</button>

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
<script rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            currency: "GHS",
            // user_id: document.getElementById("user_id").value,
            // city: document.getElementById("city").value,
            // street_address: document.getElementById("street_address").value,
            // delivery_address: document.getElementById("delivery_address").value,
            // gps: document.getElementById("gps").value,
            // locality: document.getElementById("locality").value,

            // ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function() {
                alert('Window closed.');
            },
            callback: function(response) {
                let reference = response.reference;
                //  console.log(reference);
                $.ajax({
                    type: "GET",
                    url: "{{URL::to('verify-payment')}}/"+reference,
                    success: function (response) {
                        console.log(response);
                        if(response[0].status==true){
                            $('form').prepend(`
                                <h2>${response[0].message}</h2>
                            `)
                        } else{
                            $('form').apend(`
                                <h2>Payment Failed</h2>
                                <a href=""><<button type="submit" class="btn btn-info px-3 >Retry</button>/a>
                            `)
                        }
                    }
                });
            }
        });

        handler.openIframe();
    }
</script>
