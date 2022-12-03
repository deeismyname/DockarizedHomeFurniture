<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Paystack;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = date('d-m-Y H:i:s');
        $product = Product::findOrFail($id);

        // init an empty order with the product id and user id
        $order = new Orders();
        $order->user_id = Auth::user()->id;
        $order->product_id = $product->id;
        $order->save();

        return view('main.checkout', compact('product', 'date', 'order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }



    // public function verify($refrence)
    // {
    //     $sec = "sk_test_d497c99a59614f65a78e91df74a38c5c6470f785";
    //     $curl = curl_init();
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => "https://api.paystack.co/transaction/verify/$refrence",
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_SSL_VERIFYHOST => 0,
    //         CURLOPT_SSL_VERIFYPEER => 0,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_HTTPHEADER => array(
    //             "Authorization: Bearer $sec",
    //             "Cache-Control: no-cache",
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);

    //     $new_data = json_decode($response);
    //     dd($new_data);

    //     return [$new_data];
    // }


    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        $order = Orders::findOrFail($request->order_id);
        try {
            $order->payment_reference = $request->reference;
            $order->street_address = $request->address;
            $order->city_town = $request->city;
            $order->region = $request->region;
            $order->locality = $request->locality;
            $order->delivery_address = $request->delivery_address;
            $order->gps_address = $request->gps_address;
            $order->save();

            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            $order->delete();
            // dd($e);
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

        $order = Orders::where('payment_reference', $paymentDetails['data']['reference'])->first();
        if ($paymentDetails['status']) {
            $order->total = ($paymentDetails['data']['amount'] / 100);
            $order->status = "paid";
            $order->save();
            return redirect()->route('thankyou', [$order->id]);
        }
    }

    public function thankyou($order_id)
    {
        $order = Orders::findOrFail($order_id);

        return view('main.thankyou', compact('order'));
    }
}