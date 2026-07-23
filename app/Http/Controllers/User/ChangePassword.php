<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User\Users_pv as User;

class ChangePassword extends Controller
{
    public function changePassword(Request $request)
    {
        $email = $request->input('email');
        $current_password = $request->input('password');
        $new_password = $request->input('new_password');

        if (!$email || !$current_password) {
            return response()->json(['error' => 'El correo electrónico y la contraseña actual son obligatorios.'], 400);
        }

        if (!$new_password) {
            return response()->json(['error' => 'La nueva contraseña es obligatoria.'], 400);
        }

        if (strlen($new_password) < 8) {
            return response()->json(['error' => 'La nueva contraseña debe tener al menos 8 caracteres.'], 400);
        }

        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado.'], 404);
        }

        if (!Hash::check($current_password, $user->password_hash)) {
            return response()->json(['error' => 'La contraseña actual es incorrecta.'], 401);
        }

        $user->password_hash = Hash::make($new_password);
        $user->save();

        return response()->json(['message' => 'La contraseña se ha actualizado correctamente.'], 200);
    }
}
