<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $dataUser = User::select('users.id', 'users.name', 'users.fecha_nacimiento', 'user_domicilios.domicilio', 'user_domicilios.numero_exterior', 'user_domicilios.colonia', 'user_domicilios.cp', 'user_domicilios.ciudad')
                ->leftjoin('user_domicilios', 'users.id', '=', 'user_domicilios.user_id')
                ->get();

        /*//Esta parte agrupa las direcciones por usuario
        $data = json_decode($dataUser, true);

        $groupedData = [];
        foreach ($data as $item) {
            $id = $item['id'];
            $name = $item['name'];
            $fechaNacimiento = $item['fecha_nacimiento'];
            $domicilio = $item['domicilio'];
        
            $age = Carbon::parse($fechaNacimiento)->diffInYears(Carbon::now());
        
            $groupedData[$id][] = [
                'id' => $id,
                'name' => $name,
                'fecha_nacimiento' => $fechaNacimiento,
                'domicilio' => $domicilio,
                'edad' => $age,
                ];
            }
        
            $groupedData = array_values($groupedData);
        
            return response()->json($groupedData);
        */
        return response()->json($dataUser);
    }
    
}
