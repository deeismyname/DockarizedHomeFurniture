<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {

        $paymentDetails = Paystack::getPaymentData();

        if ($paymentDetails['status']) {
            dd($paymentDetails);
            // $payment = new Payment();
            // $payment->apply_id = session()->get('apply')['id'];
            // $payment->total = ($paymentDetails['data']['amount'] / 100);
            // $payment->status = "paid";
            // $payment->save();


            // return redirect()->route('application');
        }
    }
}