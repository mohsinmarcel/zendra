<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view ('admin.auth.login');
    }

    public function loginProcess(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
        }

        $existingAdmin = Admin::whereEmail(request()->email)->first();
        if($existingAdmin == null)
        {
            return response()->json(['status' => 'error', 'key' => 'userNotExist', 'message' => 'User Not Exist'], 422);
        }
        if (!Hash::check($request->password, $existingAdmin->password)) {
            return response()->json(['status' => 'error', 'key' => 'invalid', 'message' => 'Wrong Credentials'], 422);
        }
        // $tenant = auth('tenant')->attempt(['email' => $request->email, 'password' => $request->password]);
        if (auth('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = auth('admin')->user();
            session(['admin' => $user]);
            return response()->json(['status' => 'success' , 'message' => 'logged in Successfully '],200);
        }

        return response()->json(['status' => 'error' , 'message' => 'Invalid Credentials'], 422);
    }

    public function adminDashboard()
    {
        return view ('admin.pages.dashboard');
    }

    public function adminLogout()
    {
        auth('admin')->logout();
        return redirect()->route('admin.login');
    }
}
