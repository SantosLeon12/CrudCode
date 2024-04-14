<?php

namespace App\Controllers;
use App\Models\M_clientes;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $Model = new M_clientes();
        $datos = $Model->getTable();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('V_clientes',$data);
    }
    public function createCliente(){
        $datos = [
            "Razon_social" => $_POST['razon_social'],
            "Rfc" => $_POST['rfc'],
            "Contacto" => $_POST['contacto'],
            "Direccion" => $_POST['direccion']
        ];
        $Model = new M_clientes();
        $respuesta = $Model->insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/clientes')->with('mensaje','1');
        } else{
            return redirect()->to(base_url().'/clientes')->with('mensaje','0');
        }
    }

    public function updateCliente(){
        $datos = [
            "Razon_social" => $_POST['razon_social'],
            "Rfc" => $_POST['rfc'],
            "Contacto" => $_POST['contacto'],
            "Direccion" => $_POST['direccion']
        ];
        $ID = $_POST['ID'];
        $Model = new M_clientes();
        $respuesta = $Model->actualizar($datos,$ID);
        if($respuesta){
            return redirect()->to(base_url().'/clientes')->with('mensaje','2');
        } else{
            return redirect()->to(base_url().'/clientes')->with('mensaje','3');
        }
    }

    public function deleteCliente($ID){
        $Model = new M_clientes();
        $data = ["ID" => $ID];

        $respuesta = $Model->eliminar($data);

        if($respuesta){
            return redirect()->to(base_url().'/clientes')->with('mensaje','4');
        } else{
            return redirect()->to(base_url().'/clientes')->with('mensaje','5');
        }

    }
    public function obtenerCliente($ID){
        $data = ["ID" => $ID];
        $Model = new M_clientes();
        $respuesta = $Model->obtenerDatos($data);
        $datos = ["datos" => $respuesta];

        return view('V_U_clientes', $datos);
    }

}
