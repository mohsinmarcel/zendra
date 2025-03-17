<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login()
    {
        return view ('website.auth.login');
    }

    public function loginProcess(Request $request)
{
    $validator = Validator::make($request->all(), [
        'mobile' => 'required|digits_between:10,15', // Ensuring valid mobile number format
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
    }

    $existingUser = User::where('mobile', $request->mobile)->first();

    if (!$existingUser) {
        return response()->json(['status' => 'error', 'key' => 'userNotExist', 'message' => 'User does not exist'], 422);
    }

    if (!Hash::check($request->password, $existingUser->password)) {
        return response()->json(['status' => 'error', 'key' => 'invalid', 'message' => 'Wrong credentials'], 422);
    }

    if (auth('user')->attempt(['mobile' => $request->mobile, 'password' => $request->password])) {
        $user = auth('user')->user();
        session(['user' => $user]);

        return response()->json(['status' => 'success', 'message' => 'Logged in successfully'], 200);
    }

    return response()->json(['status' => 'error', 'message' => 'Invalid credentials'], 422);
}

    public function register()
    {
        return view ('website.auth.register');
    }

    public function registerProcess(Request $request)
{
    // dd(request()->all());
    $validator = Validator::make($request->all(), [
        'mobile' => 'required|digits_between:10,15|unique:users,mobile', // Ensuring valid mobile number format
        'password' => 'required|min:6',
        'name' => 'required|string|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
    }

    // Create new user
    $user = User::create([
        'name' => $request->name,
        'mobile' => $request->mobile ?? 0,
        'password' => Hash::make($request->password),
    ]);

    // Auto-login user after registration
    auth('user')->login($user);
    session(['user' => $user]);

    return response()->json([
        'status' => 'success',
        'message' => 'Registered successfully',
        'user' => $user
    ], 201);
}

}
