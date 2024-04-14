<?php

namespace App\Controllers;
use App\Models\M_empresas;

class EmpresasController extends BaseController
{
    public function index(): string
    {
        $ME = new M_empresas();
        $datos = $ME->getTable();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('V_empresas',$data);
    }
    public function createEmpresa(){
        $datos = [
            "Razon_social" => $_POST['razon_social']
        ];
        $ME = new M_empresas();
        $respuesta = $ME->insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/empresas')->with('mensaje','1');
        } else{
            return redirect()->to(base_url().'/empresas')->with('mensaje','0');
        }
    }

    public function updateEmpresa(){
        $datos = [
            "Razon_social" => $_POST['razon_social']
        ];
        $ID = $_POST['ID'];
        $ME = new M_empresas();
        $respuesta = $ME->actualizar($datos,$ID);
        if($respuesta){
            return redirect()->to(base_url().'/empresas')->with('mensaje','2');
        } else{
            return redirect()->to(base_url().'/empresas')->with('mensaje','3');
        }
    }

    public function deleteEmpresa($ID){
        $ME = new M_empresas();
        $data = ["ID" => $ID];

        $respuesta = $ME->eliminar($data);

        if($respuesta){
            return redirect()->to(base_url().'/empresas')->with('mensaje','4');
        } else{
            return redirect()->to(base_url().'/empresas')->with('mensaje','5');
        }

    }
    public function obtenerEmpresa($ID){
        $data = ["ID" => $ID];
        $ME = new M_empresas();
        $respuesta = $ME->obtenerDatos($data);
        $datos = ["datos" => $respuesta];

        return view('V_U_empresas', $datos);
    }

}
