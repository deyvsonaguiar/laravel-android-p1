<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BillPayRequest;
use App\Repositories\BillPayRepository;

class BillPaysController extends Controller
{

    protected $repository;

    public function __construct(BillPayRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->all();

    }

    public function store(BillPayRequest $request)
    {
        $billPay = $this->repository->create($request->all());
        return response()->json($billPay, 201);
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function update(BillPayRequest $request, $id)
    {
        $billPay = $this->repository->update($request->all(), $id);
        return response()->json($billPay, 200);
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);
        if ($deleted) {
            return response()->json([], 204);
        } else {
            return response()->json([
                'error' => 'Resource can not be deleted'
            ], 500);
        }
    }

}
