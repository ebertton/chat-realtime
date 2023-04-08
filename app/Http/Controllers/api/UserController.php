<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index(){
        $userLogged = Auth::user();
        $users = User::where('id','!=', $userLogged)->get();
        return response()->json(['users' => $users, Response::HTTP_OK]);
    }

    public function show(User $user)
    {
        return response()->json(['userActive' => $user], Response::HTTP_OK);
    }

    public function me()
    {
        return response()->json(['user' => Auth::user()], Response::HTTP_OK);
    }
}
