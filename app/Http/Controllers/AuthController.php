<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|string|email|min:10|max:75|unique:users',
            'password' => 'required|string|min:10|confirmed',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        User::create([
            'name'=> $request->get('name'),
            'email' => $request->get('email'),
            'role'=> 'user',
            'password'=> bcrypt($request->get('password')),
        ]);
        return response()->json(['message' => 'Usuario registrado correctamente'], 201);
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email|min:10|max:75',
            'password' => 'required|string|min:10',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        $credentials = $request->only(['email', 'password']);

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['message' => 'Credenciales invalidas'], 401);
            }
            return response()->json(['token '=>$token], 200);
        } catch (JWTException $exception) {
            return response()->json(['error' => 'No se pudo generar el token', $exception], 500);
        }
    }

    public function getUser() {
        $user = Auth::user();
        return response()->json($user, 200);
    }

    public function updateUser(Request $request)  {
        
       
        //$user = auth()->user();
        $user = Auth::user();

        $validator = Validator::make($request->all(),[
            'name' => 'sometimes|string|min:2|max:100',
            'email' => 'sometimes|string|email|min:10|max:75|unique:users,email,' . $user->id,
            'password' => 'sometimes|string|min:10|confirmed',
        ]);

        if ($validator->fails()) { 
            return response()->json($validator->errors(), 422);
        }

        if ($request->has('name')) {
            $user->name = $request->name;
        }
        if ($request->has('email')) {
            $user->email = $request->email;
        }
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return response()->json(['message'=>'User updated'], 200);
        
    }

    public function logout()  {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'Logged out'], 200);
    }
    
}
