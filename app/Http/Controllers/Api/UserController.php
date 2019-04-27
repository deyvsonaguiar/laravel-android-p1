<?php

namespace App\Http\Controllers\Api;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    private $repository;

    /**
     * UserController constructor.
     * @param $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $user = $this->repository->create($request->all());
        return response()->json($user, 201);

    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
