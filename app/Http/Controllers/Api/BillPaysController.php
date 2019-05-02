<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BillPayRequest;
use App\Http\Resources\BillPayResource;
use App\Models\BillPay;

class BillPaysController extends Controller
{

    public function index()
    {
        $billPays = BillPay::paginate();
        return BillPayResource::collection($billPays);

    }

    public function store(BillPayRequest $request)
    {
        $billPay = BillPay::create($request->all());
        return new BillPayResource($billPay);
    }

    public function show(BillPay $bill_pay)
    {
        return new BillPayResource($bill_pay);
    }

    public function update(BillPayRequest $request, BillPay $bill_pay)
    {
        $bill_pay->fill($request->all());
        $bill_pay->save();

        return new BillPayResource($bill_pay);
    }

    public function destroy(BillPay $bill_pay)
    {
        $bill_pay->delete();

        return response()->json([], 204);
    }

}
