<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('user.payment');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'payment_method' => 'required|string'
        ]);

        $payment = Payment::create([
            'user_id' => Auth::id(),
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'status' => 'pending', // Change this based on the payment gateway response
        ]);


        $payment->status = 'completed';
        $payment->save();

        return redirect('user.userdashboard')->route('user.payment.success');
    }

    public function paymentSuccess()
    {
        return view('user.payment_success');
    }
}
