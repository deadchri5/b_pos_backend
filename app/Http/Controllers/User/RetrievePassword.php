<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User\Users_pv as User;

class RetrievePassword extends Controller
{
    public function retrievePassword(Request $request)
    {
        $email = $request->input('email');

        if (!$email) {
            return response()->json(['error' => 'El correo electrónico es obligatorio.'], 400);
        }

        $alphanumeric_code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ-*/()=_"!{}:'), 0, 10);

        $hashedCode = Hash::make($alphanumeric_code, [
            'rounds' => 12
        ]);

        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado.'], 404);
        }

        $user->password_hash = $hashedCode;
        $user->save();

        return response()->json(['message' => 'Se ha enviado un correo electrónico con la nueva contraseña.', 'new_password' => $alphanumeric_code], 200);
    }
}
