<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;


class UsersController extends Controller
{
    public function bladeIndex()
    {
        $users = UserResource::collection(User::with('role')->paginate());
        return view('user.bladeIndex')
            ->with(['users' => $users]);
    }

    public function bladeAdd()
    {
        return view('user.bladeAdd');
    }

    public function store(UserCreateRequest $request)
    {
        $this->authorize('edit', 'users');
        $user = User::create(
            $request->only('first_name', 'last_name', 'email', 'role_id')
            + ['password' => Hash::make(1234)]
        );

        return response(new UserResource($user), Response::HTTP_CREATED);
    }


    public function bladeEdit($id)
    {
        $user = new UserResource(User::with('role')->find($id));
        return view('user.bladeEdit', ['user' => $user]);
    }



}
