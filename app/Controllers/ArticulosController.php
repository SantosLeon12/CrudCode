<?php

namespace App\Controllers;
use App\Models\M_articulos;

class ArticulosController extends BaseController
{
    public function index(): string
    {
        $Model = new M_articulos();
        $datos = $Model->getTable();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('V_articulos',$data);
    }
    public function createArticulo(){
        $datos = [
            "Codigo" => $_POST['codigo'],
            "Descripcion" => $_POST['descripcion'],
            "Unidad" => $_POST['unidad'],
            "ID_plantilla" => $_POST['id_plantilla']
        ];
        $Model = new M_articulos();
        $respuesta = $Model->insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/articulos')->with('mensaje','1');
        } else{
            return redirect()->to(base_url().'/articulos')->with('mensaje','0');
        }
    }

    public function updateArticulo(){
        $datos = [
            "Codigo" => $_POST['codigo'],
            "Descripcion" => $_POST['descripcion'],
            "Unidad" => $_POST['unidad'],
            "ID_plantilla" => $_POST['id_plantilla']
        ];
        $ID = $_POST['ID'];
        $Model = new M_articulos();
        $respuesta = $Model->actualizar($datos,$ID);
        if($respuesta){
            return redirect()->to(base_url().'/articulos')->with('mensaje','2');
        } else{
            return redirect()->to(base_url().'/articulos')->with('mensaje','3');
        }
    }

    public function deleteArticulo($ID){
        $Model = new M_articulos();
        $data = ["ID" => $ID];

        $respuesta = $Model->eliminar($data);

        if($respuesta){
            return redirect()->to(base_url().'/articulos')->with('mensaje','4');
        } else{
            return redirect()->to(base_url().'/articulos')->with('mensaje','5');
        }

    }
    public function obtenerArticulo($ID){
        $data = ["ID" => $ID];
        $Model = new M_articulos();
        $respuesta = $Model->obtenerDatos($data);
        $datos = ["datos" => $respuesta];

        return view('V_U_articulos', $datos);
    }

    

}
