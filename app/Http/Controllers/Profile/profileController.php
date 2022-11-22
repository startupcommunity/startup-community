<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class profileController extends Controller
{
    /**
     * Asignar Roll.
     *
     * @return \Illuminate\Http\Response
     */
    public function asign_roll(Request $request)
    {
        $user = $request->user();

        if(!$user->roles->isEmpty()){
            foreach ($user->roles as $roles) {
                $user->removeRole($roles);
            }    
        }
        
        $user->assignRole($request->rol);

        return response()->json([
            'message' => 'Asignada con exito',
            'code' => 200
        ],200);
    }
    /**
     * Primeros datos del perfil.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile_data(Request $request)
    {

        $validator = $this->validate($request, [
                'first'   => 'required',
                'second'   => 'required',
            ]);

        $user = $request->user();

        if($user->roles->isEmpty()){
            return response()->json([
                'message' => 'No hay roles asignados',
                'code' => 400
            ],400);
        }

        $rol = $user->roles->first()->name;
        $data = [];

        switch ($rol) {
            case 'startup':
                $data = [
                    "name" => $request->first,
                    "category" => $request->second,
                    "description" => ($request->third) ? $request->third : " "];
                break;
            case 'professional':
                $data = [
                    "name" => $request->first,
                    "area" => $request->second,
                    "description" => ($request->third) ? $request->third : " "];
                break;
            case 'investor':
                $data = [
                    "type" => $request->first,
                    "area" => $request->second,
                    "description" => ($request->third) ? $request->third : " "];
                break;
            
            default:
            $data = [];
                break;
        }

    $profile = Profile::find($user->profile->id);
    $profile->data = json_encode($data);
    $profile->save();

    return response()->json([
            'message' => 'Actualizado con exito',
            'code' => 200
        ],200);
    }
}
