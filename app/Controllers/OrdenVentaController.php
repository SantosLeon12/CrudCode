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
        $conceptosJSON = json_encode($_POST['conceptos']);
        $datosOrdenVenta = [
            "Folio" => $_POST['folio'],
            "Titulo" => $_POST['titulo'],
            "Fecha_creacion" => $fecha_creacion,
            "Enviado_a_prod" => $_POST['enviado_a_prod'],
            "ID_sucursal" => $_POST['id_sucursal'],
            "ID_usuario" => $_POST['id_usuario'],
            "ID_cliente" => $_POST['id_cliente'],
            "conceptos" => $conceptosJSON
        ];
    
        // Insertar la orden de venta en la tabla 'orden_venta'
        $Model = new M_ordenVenta();
        $idOrdenVenta = $Model->insertar($datosOrdenVenta);
    
        // Verificar si se insertó correctamente la orden de venta
        if($idOrdenVenta > 0){
            // Si se insertó correctamente, procedemos a insertar los conceptos de venta en la tabla 'orden_venta_conceptos'
            foreach ($_POST['conceptos'] as $concepto) {
                $datosConcepto = [
                    "ID_orden_venta" => $idOrdenVenta,
                    "ID_articulo" => $concepto['id_articulo'],
                    "Cantidad" => $concepto['cantidad'],
                    "Unidad" => $concepto['unidad'],
                    "Observaciones" => $concepto['observaciones'],
                    "Precio_unitario" => $concepto['precio_unitario']
                ];
                // Insertar el concepto en la tabla 'orden_venta_conceptos'
                $Model->insertarOVC($datosConcepto);
            }
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
