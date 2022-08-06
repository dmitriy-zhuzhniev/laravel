<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\UserSessionToken;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserRepository
{
    public function all(): Collection
    {
        return User::get();
    }

    public function getById($id): User
    {
        return User::find($id);
    }

    public function byEmail(string $email)
    {
        return User::where('email', $email)->first();
    }

    public function byToken($token)
    {
        return DB::table('users')
                 ->select('users.*')
                 ->join('user_session_tokens', function (JoinClause $join) use ($token) {
                     $join->on('users.id', '=', 'user_session_tokens.user_id')
                          ->where('user_session_tokens.token', $token);
                 })->first();
    }

    public function tokenByUserId(int $userId)
    {
        return DB::table('user_session_tokens')->where('user_id', $userId)->value('token');
    }

    public function createToken(User $user): UserSessionToken
    {
        $userSessionToken = new UserSessionToken();
        $userSessionToken->user_id = $user->id;
        $userSessionToken->token   = Str::random(60);
        $userSessionToken->save();

        return $userSessionToken;
    }
}
