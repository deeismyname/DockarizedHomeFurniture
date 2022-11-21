<?php

namespace App\Http\Controllers;

use Paystack;
use App\Http\Requests;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Psy\Readline\Hoa\Console;

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
        $user = auth()->user();

        $product = Product::findOrFail($id);
        return view('main.checkout', compact('product', 'user', 'date'));
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

    //public function pay (){

    //     $formData = [
    //         'email' => request('email'),
    //         'amount' => request('amount') * 100,
    //         // 'callback_url' => route('pay.callback')
    //     ];

    //     $pay = json_decode($this->initiate_payment($formData));
    //     if ($pay) {
    //         if ($pay->status) {
    //              return redirect($pay->data->authorization_url);
    //             // dd($pay);
    //         } else {
    //             return back()->withError($pay->message);
    //         }
    //     } else {
    //         return back()->withError("Something went wrong");
    //     }
    // }

    // public function initiate_payment($formData){
    //     $url = "https://api.paystack.co/transaction/initialize";

    //     $fields_string = http_build_query($formData);
    //     $ch = curl_init();

    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_POST, true);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //         "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
    //         "Cache-Control: no-cache",
    //     ));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //     $result = curl_exec($ch);
    //     curl_close($ch);

    //     return $result;
    // }

    public function verify($refrence)
    {
        $sec = "sk_test_d497c99a59614f65a78e91df74a38c5c6470f785";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$refrence",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYHOST =>0,
            CURLOPT_SSL_VERIFYPEER =>0,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $sec",
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

         $new_data = json_decode($response);
        // dd($response);

        return [$new_data];

    }

}
