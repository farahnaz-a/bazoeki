<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Carbon\Carbon;
use App\Models\Sale;
use App\Models\User;
use App\Models\Course;
use App\Models\Wallet;
use App\Models\LiveSession;
use App\Mail\NewAppointment;
use App\Models\Availibility;
use Illuminate\Http\Request;
use App\Mail\ZoomLinkForCoachAkil;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{

    public function  __construct() {
        Mollie::api()->setApiKey('test_GPnmyFCTF6KF8Fu3rSjJmSNbU6BCNc'); // your mollie test api key
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment(Request $request)
    {
    

            $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => 'EUR', // Type of currency you want to send
                'value' =>   '7.99', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Payment to Bazoeki',
            "webhookUrl" => route('webhooks.mollie'),
            'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
            ]);
    
            $payment = Mollie::api()->payments()->get($payment->id);

            
    
            // redirect customer to Mollie checkout page
            return redirect($payment->getCheckoutUrl(), 303);


    }


    public function handle(Request $request) {
        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);
        if($payment->isPaid()) {

        }
    }


    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess(Request $request) {

        return redirect('/success')->withSuccess('Thank you !! From here the data will be sent to AirTable API');

    }
}