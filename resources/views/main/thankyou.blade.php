@extends('main.master')

@section('shop')
<div class="content">
    <div class="container mt-5 px-5">

        <div class="mb-4 pre">
            <span>Hello {{ Auth::user()->name }} </span>
        </div>

        <div class="row">

            <div class="col-md-12">


                <h1>Thank you </h1>,
                {{$order}}
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

        onClose: function() {
            alert('Window closed.');
        },
        callback: function(response) {
            let reference = response.reference;
            //  console.log(reference);
            $.ajax({
                type: "GET",
                url: "{{URL::to('verify-payment')}}/" + reference,
                success: function(response) {
                    console.log(response);
                    if (response[0].status == true) {
                        $('form').prepend(`
                                <h2>${response[0].message}</h2>
                            `)
                    } else {
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