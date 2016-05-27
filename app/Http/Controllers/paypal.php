<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

  \Braintree_Configuration::environment('sandbox');
  \Braintree_Configuration::merchantId('sqhkrm7fqh7jg8dg');
  \Braintree_Configuration::publicKey('6d2dyfz9s9x3cm9v');
  \Braintree_Configuration::privateKey('6edf7246b1c8356d4c152a69ed16534f');

class paypal extends Controller
{

	public function paypal(){

		$clientToken = \Braintree_clientToken::generate();
		return view('paypal')->with('clientToken',$clientToken);
	}

	public function checkout(Request $request){

		  $payment = $request ->input('payment_method_nonce');
  		$result = \Braintree_Transaction::sale([
        'amount' => '599.00',
        'paymentMethodNonce' => $payment,
        'options' => [
        'submitForSettlement' => True
        ]
      ]);
		$buscar = $result->transaction;
		$transaction = \Braintree\Transaction::find($buscar->id);
		 return view('resultados')->with('transaction',$transaction);
	}
}
