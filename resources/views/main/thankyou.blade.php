@extends('main.master')

@section('shop')
<div class="content">
    <div class="container mt-5 px-5">

        <div class="row">
            <div class="mb-4 pre">
                <h1>Thank you </h1>
            </div>
            <div class="col-md-12">
                <span>Hello {{ Auth::user()->name }}, </span><br>
                <div>Your order with a the order ID of {{$order->id}} and payment reference
                    ({{$order->payment_reference}}) has been accepted and ready for shipment to the address below</div>

                <div>
                    <table class="table border">
                        <tbody>
                            <tr>
                                <td>Street Address</td>
                                <td colspan="2">{{$order->street_address}}</td>
                            </tr>
                            <tr>
                                <td>City Town</td>
                                <td colspan="2">{{$order->city_town}}</td>
                            </tr>
                            <tr>
                                <td>Locality</td>
                                <td colspan="2">{{$order->locality}}</td>
                            </tr>
                            <tr>
                                <td>Region</td>
                                <td colspan="2">{{$order->region}}</td>
                            </tr>
                            <tr>
                                <td>Delivery Address</td>
                                <td colspan="2">{{$order->delivery_address}}</td>
                            </tr>
                            <tr>
                                <td>GPS Address</td>
                                <td colspan="2">{{$order->gps_address}}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td colspan="2">{{$order->updated_at->format('d M Y g:i A')}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>


    </div>
</div>
@endsection
<script rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{ asset('main/assets/css/checkout.css') }}">