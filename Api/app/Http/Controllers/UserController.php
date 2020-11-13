<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function users()
    {
        return response()->json(User::get(), 200);
    }
    public function user($id_user)
    {
        return response()->json(User::find($id_user), 200);
    }
    public function create(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }
    public function update(Request $request,User $user){
        $user->update($request->all());
        return response()->json($user,200);
    }
    public function delete(Request $request,User $user){
        $user->delete();
        return response()->json($user,204);
    }
}
