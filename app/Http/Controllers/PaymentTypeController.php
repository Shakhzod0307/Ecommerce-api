<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use App\Http\Requests\StorePaymentTypeRequest;
use App\Http\Requests\UpdatePaymentTypeRequest;

class PaymentTypeController extends Controller
{

    public function index()
    {
        return PaymentType::all();
    }


    public function store(StorePaymentTypeRequest $request)
    {
        //
    }


    public function show(PaymentType $paymentType)
    {
        //
    }


    public function edit(PaymentType $paymentType)
    {
        //
    }


    public function update(UpdatePaymentTypeRequest $request, PaymentType $paymentType)
    {
        //
    }


    public function destroy(PaymentType $paymentType)
    {
        //
    }
}
