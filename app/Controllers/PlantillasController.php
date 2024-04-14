<?php

namespace App\Controllers;
use App\Models\M_plantillas;

class PlantillasController extends BaseController
{
    public function index(): string
    {
        $Model = new M_plantillas();
        $datos = $Model->listarNombres();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('listado',$data);
    }
    public function crear(){
        $camposJSON = json_encode($_POST['campos']);

        $datosPlantilla = [
            "Nombre" => $_POST['nombre'],
            "Campos" => $camposJSON
        ];
    
        // Insertar la plantilla en la tabla 'plantillas'
        $Model = new M_plantillas();
        $idPlantilla = $Model->insertar($datosPlantilla);
    
        // Verificar si se insertó correctamente la plantilla
        if($idPlantilla != null){
            // Si se insertó correctamente, procedemos a insertar los campos en la tabla 'plantillas_campos'
            foreach ($_POST['campos'] as $campo) {
                $datosCampo = [
                    "Nombre" => $campo['nombrec'],
                    "Tipo" => $campo['tipo'],
                    "ID_plantilla" => $idPlantilla
                ];
                // Insertar el campo en la tabla 'plantillas_campos'
                $Model->insertarPC($datosCampo);
            }
            return redirect()->to(base_url().'/')->with('mensaje','1');
        } else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
    }

    public function actualizar(){
        $datos = [
            "Nombre" => $_POST['nombre']
        ];
        $ID = $_POST['ID'];
        $Model = new M_plantillas();
        $respuesta = $Model->actualizar($datos,$ID);
        if($respuesta){
            return redirect()->to(base_url().'/')->with('mensaje','2');
        } else{
            return redirect()->to(base_url().'/')->with('mensaje','3');
        }
    }

    public function eliminar($ID){
        $Model = new M_plantillas();
        $data = ["ID" => $ID];

        $respuesta = $Model->eliminar($data);

        if($respuesta){
            return redirect()->to(base_url().'/')->with('mensaje','4');
        } else{
            return redirect()->to(base_url().'/')->with('mensaje','5');
        }

    }
    public function obtenerPlantilla($ID){
        $data = ["ID" => $ID];
        $Model = new M_plantillas();
        $respuesta = $Model->obtenerNombre($data);
        $datos = ["datos" => $respuesta];

        return view('UpdatePlantilla', $datos);
    }

}
