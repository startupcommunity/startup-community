<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;

class authController extends Controller
{
          /**
     * Registro de usuario
     */
    public function signup(Request $request)
    {   
        /***Valido***/
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(6)],
        ]);
        
        $username_profile = null;
        $username = strtolower($request->name);
        $username = str_replace(" ", "_", $username);

        while ($username_profile == null) {
            $username_profile = Profile::where("username", $username)->first();

            if ($username_profile == null) {
                break;
            }
            $pin = mt_Rand(100, 999);
            $username = $username.$pin;
        }

        /***Creo usuario***/
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $profile = new Profile;
        $profile->user_id = $user->id;
        $profile->username = $username;
        $profile->save();

        if ($user) { /*Si creo el usuario*/
            /***Inicio Sesión***/
            $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            ]);

            Auth::attempt($credentials);

            /***Respuestas JSON***/
            $user = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');

            $token = $tokenResult->token;
            $token->expires_at = now()->addYear(2);
            $token->save();
        }

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString(),
            'message' => 'Usuario creado exitosamente!'
        ], 200);
    }

    /**
     * Inicio de sesión y creación de token
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Credenciales incorrectas'
            ], 401);

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString(),
            'message' => 'Logueo exitoso!'
        ]);
    }
    /**
     * Mensaje de autenticacion
     */
    public function msg_login(Request $request)
    {
        return response()->json([
                'message' => 'Necesita autenticacion',
                'status' => 401
            ], 401);
    }
    /**
     * Cierre de sesión (anular el token)
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
