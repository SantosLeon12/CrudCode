<?php

namespace App\Controllers;
use App\Models\M_areas;

class AreasController extends BaseController
{
    public function index(): string
    {
        $Model = new M_areas();
        $datos = $Model->getTable();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('V_areas',$data);
    }
    public function createArea(){
        $datos = [
            "Nombre" => $_POST['nombre'],
            "ID_sucursal" => $_POST['id_sucursal']
        ];
        $Model = new M_areas();
        $respuesta = $Model->insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/areas')->with('mensaje','1');
        } else{
            return redirect()->to(base_url().'/areas')->with('mensaje','0');
        }
    }

    public function updateArea(){
        $datos = [
            "Nombre" => $_POST['nombre'],
            "ID_sucursal" => $_POST['id_sucursal']
        ];
        $ID = $_POST['ID'];
        $Model = new M_areas();
        $respuesta = $Model->actualizar($datos,$ID);
        if($respuesta){
            return redirect()->to(base_url().'/areas')->with('mensaje','2');
        } else{
            return redirect()->to(base_url().'/areas')->with('mensaje','3');
        }
    }

    public function deleteArea($ID){
        $Model = new M_areas();
        $data = ["ID" => $ID];

        $respuesta = $Model->eliminar($data);

        if($respuesta){
            return redirect()->to(base_url().'/areas')->with('mensaje','4');
        } else{
            return redirect()->to(base_url().'/areas')->with('mensaje','5');
        }

    }
    public function obtenerArea($ID){
        $data = ["ID" => $ID];
        $Model = new M_areas();
        $respuesta = $Model->obtenerDatos($data);
        $datos = ["datos" => $respuesta];

        return view('V_U_areas', $datos);
    }

    

}
