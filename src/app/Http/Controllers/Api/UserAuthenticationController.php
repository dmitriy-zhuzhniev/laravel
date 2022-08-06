<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserAuthResource;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthenticationController extends BaseController
{
    public function login(Request $request, UserRepository $userRepository)
    {
        $data = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|string',
            ]
        );

        if (!$user = $userRepository->byEmail($data['email'])) {
            return response(['error' => 'User not found or password is incorrect'], 403);
        }

        if (!Hash::check($data['password'], $user->password)) {
            return response(['error' => 'User not found or password is incorrect'], 403);
        }

        $userRepository->createToken($user);

        return new UserAuthResource($user);
    }
}
