<?php

namespace App\Controllers;
use App\Models\M_sucursales;

class SucursalesController extends BaseController
{
    public function index(): string
    {
        $Model = new M_sucursales();
        $datos = $Model->getTable();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('V_sucursales',$data);
    }
    public function createSucursal(){
        $datos = [
            "Nombre" => $_POST['nombre'],
            "Direccion" => $_POST['direccion'],
            "ID_empresa" => $_POST['id_empresa']
        ];
        $Model = new M_sucursales();
        $respuesta = $Model->insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/sucursales')->with('mensaje','1');
        } else{
            return redirect()->to(base_url().'/sucursales')->with('mensaje','0');
        }
    }

    public function updateSucursal(){
        $datos = [
            "Nombre" => $_POST['nombre'],
            "Direccion" => $_POST['direccion'],
            "ID_empresa" => $_POST['id_empresa']
        ];
        $ID = $_POST['ID'];
        $Model = new M_sucursales();
        $respuesta = $Model->actualizar($datos,$ID);
        if($respuesta){
            return redirect()->to(base_url().'/sucursales')->with('mensaje','2');
        } else{
            return redirect()->to(base_url().'/sucursales')->with('mensaje','3');
        }
    }

    public function deleteSucursal($ID){
        $Model = new M_sucursales();
        $data = ["ID" => $ID];

        $respuesta = $Model->eliminar($data);

        if($respuesta){
            return redirect()->to(base_url().'/sucursales')->with('mensaje','4');
        } else{
            return redirect()->to(base_url().'/sucursales')->with('mensaje','5');
        }

    }
    public function obtenerSucursal($ID){
        $data = ["ID" => $ID];
        $Model = new M_sucursales();
        $respuesta = $Model->obtenerDatos($data);
        $datos = ["datos" => $respuesta];

        return view('V_U_sucursales', $datos);
    }

    

}
