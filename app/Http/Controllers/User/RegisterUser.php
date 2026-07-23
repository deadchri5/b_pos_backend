<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterUser as RegisterUserRequest;

use App\Models\User\Users_pv;

class RegisterUser extends Controller
{
    public function registerUser(RegisterUserRequest $request)
    {
        $data = $request->validated();

        $hashedPassword = Hash::make($data['password'], [
            'rounds' => 12
        ]);

        try {
            $user = Users_pv::create([
                'username' => $data['name'],
                'email' => $data['email'],
                'password_hash' => $hashedPassword,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al registrar el usuario',
                'error' => $e->getMessage()
            ], 500);
        }

        return response()->json([
            'message' => 'Usuario registrado exitosamente',
            'data' => [
                'id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at
            ]
        ], 201);
    }
}
