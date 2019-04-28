<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }


    public function store(UserRequest $request)
    {
        $user = $this->repository->create($request->all());
        return response()->json($user, 201);

    }

}
