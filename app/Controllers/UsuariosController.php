<?php

namespace App\Controllers;
use App\Models\M_usuarios;

class UsuariosController extends BaseController
{
    public function index(): string
    {
        $Model = new M_usuarios();
        $datos = $Model->getTable();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('V_usuarios',$data);
    }
    public function createUsuario(){
        $datos = [
            "Nombre" => $_POST['nombre'],
            "Correo" => $_POST['correo'],
            "Usuario" => $_POST['usuario'],
            "Password" => $_POST['password'],
            "ID_sucursal" => $_POST['id_sucursal']
        ];
        $Model = new M_usuarios();
        $respuesta = $Model->insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/usuarios')->with('mensaje','1');
        } else{
            return redirect()->to(base_url().'/usuarios')->with('mensaje','0');
        }
    }

    public function updateUsuario(){
        $datos = [
            "Nombre" => $_POST['nombre'],
            "Correo" => $_POST['correo'],
            "Usuario" => $_POST['usuario'],
            "Password" => $_POST['password'],
            "ID_sucursal" => $_POST['id_sucursal']
        ];
        $ID = $_POST['ID'];
        $Model = new M_usuarios();
        $respuesta = $Model->actualizar($datos,$ID);
        if($respuesta){
            return redirect()->to(base_url().'/usuarios')->with('mensaje','2');
        } else{
            return redirect()->to(base_url().'/usuarios')->with('mensaje','3');
        }
    }

    public function deleteUsuario($ID){
        $Model = new M_usuarios();
        $data = ["ID" => $ID];

        $respuesta = $Model->eliminar($data);

        if($respuesta){
            return redirect()->to(base_url().'/usuarios')->with('mensaje','4');
        } else{
            return redirect()->to(base_url().'/usuarios')->with('mensaje','5');
        }

    }
    public function obtenerUsuario($ID){
        $data = ["ID" => $ID];
        $Model = new M_usuarios();
        $respuesta = $Model->obtenerDatos($data);
        $datos = ["datos" => $respuesta];

        return view('V_U_usuarios', $datos);
    }

}
