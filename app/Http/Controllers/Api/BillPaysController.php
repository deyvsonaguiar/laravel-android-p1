<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\BillPayCreateRequest;
use App\Http\Requests\BillPayUpdateRequest;
use App\Repositories\BillPayRepository;
use App\Validators\BillPayValidator;

/**
 * Class BillPaysController.
 *
 * @package namespace App\Http\Controllers\Api;
 */
class BillPaysController extends Controller
{
    /**
     * @var BillPayRepository
     */
    protected $repository;

    /**
     * @var BillPayValidator
     */
    protected $validator;

    /**
     * BillPaysController constructor.
     *
     * @param BillPayRepository $repository
     * @param BillPayValidator $validator
     */
    public function __construct(BillPayRepository $repository, BillPayValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $billPays = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $billPays,
            ]);
        }

        return view('billPays.index', compact('billPays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BillPayCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(BillPayCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $billPay = $this->repository->create($request->all());

            $response = [
                'message' => 'BillPay created.',
                'data'    => $billPay->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $billPay = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $billPay,
            ]);
        }

        return view('billPays.show', compact('billPay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $billPay = $this->repository->find($id);

        return view('billPays.edit', compact('billPay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BillPayUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(BillPayUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $billPay = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'BillPay updated.',
                'data'    => $billPay->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'BillPay deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'BillPay deleted.');
    }
}
