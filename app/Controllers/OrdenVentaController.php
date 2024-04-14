<?php

namespace App\Controllers;
use App\Models\M_ordenVenta;

class OrdenVentaController extends BaseController
{
    public function index(): string
    {
        $Model = new M_ordenVenta();
        $datos = $Model->getTable();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('V_ordenVenta',$data);
    }
    public function createOrdenVenta(){
        $fecha_creacion = date('Y-m-d H:i:s');
        $datos = [
            "Folio" => $_POST['folio'],
            "Titulo" => $_POST['titulo'],
            "Fecha_creacion" => $fecha_creacion,
            "Enviado_a_prod" => $_POST['enviado_a_prod'],
            "ID_sucursal" => $_POST['id_sucursal'],
            "ID_usuario" => $_POST['id_usuario'],
            "ID_cliente" => $_POST['id_cliente']
        ];
        $Model = new M_ordenVenta();
        $respuesta = $Model->insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/ordenventa')->with('mensaje','1');
        } else{
            return redirect()->to(base_url().'/ordenventa')->with('mensaje','0');
        }
    }

    public function updateOrdenVenta(){
        $fecha_creacion = date('Y-m-d H:i:s');
        $datos = [
            "Folio" => $_POST['folio'],
            "Titulo" => $_POST['titulo'],
            "Fecha_creacion" => $fecha_creacion,
            "Enviado_a_prod" => $_POST['enviado_a_prod'],
            "ID_sucursal" => $_POST['id_sucursal'],
            "ID_usuario" => $_POST['id_usuario'],
            "ID_cliente" => $_POST['id_cliente']
        ];
        $ID = $_POST['ID'];
        $Model = new M_ordenVenta();
        $respuesta = $Model->actualizar($datos,$ID);
        if($respuesta){
            return redirect()->to(base_url().'/ordenventa')->with('mensaje','2');
        } else{
            return redirect()->to(base_url().'/ordenventa')->with('mensaje','3');
        }
    }

    public function deleteOrdenVenta($ID){
        $Model = new M_ordenVenta();
        $data = ["ID" => $ID];

        $respuesta = $Model->eliminar($data);

        if($respuesta){
            return redirect()->to(base_url().'/ordenventa')->with('mensaje','4');
        } else{
            return redirect()->to(base_url().'/ordenventa')->with('mensaje','5');
        }

    }
    public function obtenerOrdenVenta($ID){
        $data = ["ID" => $ID];
        $Model = new M_ordenVenta();
        $respuesta = $Model->obtenerDatos($data);
        $datos = ["datos" => $respuesta];

        return view('V_U_ordenVenta', $datos);
    }

    

}
