<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResourceCollection;
use Domain\User\DTO\UserDTO;
use Domain\User\Entities\User;
use Domain\User\Services\UserService;
use Illuminate\Http\Request;

class UserController extends  BaseController
{

    protected User $user;
    protected UserService $service;
    public function __construct(User $user, UserService $service)
    {
        $this->user = $user;
        $this->service = $service;
    }

    public function index()
    {
        $users = $this->user->paginate(20);
        $aa = UserDTO::collection($users->all());


        return response()->json([
//            'data' => new UserResourceCollection($this->user->paginate(20)),
            'data2' =>$aa
        ]);
    }

    public function store(Request $request)
    {
        $this->service->store(UserDTO::fromRequest($request));
    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
