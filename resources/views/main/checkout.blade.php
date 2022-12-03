@extends('main.master')

@section('shop')
<div class="content">
    <div class="container mt-5 px-5">

        <div class="mb-4 pre">


            <h2>Confirm order and pay</h2> <span></span>
            <span>Hello {{ Auth::user()->name }} please fill the form below to checkout.</span>
        </div>

        <div class="row">

            <div class="col-md-8">
                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal"
                    role="form">
                    @csrf

                    <input type="hidden" name="amount" id="amount" value="{{ $product->price * 100 }}" required>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="user_id" required>
                    <input type="hidden" name="email" value="{{ Auth::user()->email }}" id="email-address">
                    <input type="hidden" name="product_id" value="{{ $product->id }}" id="product_id" required>
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <input type="hidden" name="currency" value="GHS">
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">

                    <div class="card p-3">

                        <div class="mt-4 mb-4">

                            <h6 class="text-uppercase">Billing Address</h6>


                            <div class="row mt-3">

                                <div class="col-md-6">
                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="address"
                                            class="form-control" id="street_address" required> <span>Street
                                            Address</span> </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="city" class="form-control"
                                            id="city" required> <span>City / Town</span> </div>
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


                            </div>

                            <div class="row mt-2">
                                <h5>DELIVERY INFO:</h5>
                                <div class="col-md-6">
                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="delivery_address"
                                            class="form-control" id="delivery_address" required> <span>Deliver
                                            Address</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="gps_address"
                                            class="form-control" id="gps" required> <span>GPS Address</span> </div>
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="mt-4 mb-4 d-flex justify-content-between">
                        <button type="submit" class="btn btn-success px-3 pay">Checkout</button>

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