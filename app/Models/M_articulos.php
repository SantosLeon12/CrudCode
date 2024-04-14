<?php namespace App\Models;
use CodeIgniter\Model;

    class M_articulos extends Model{

        public function getTable(){
            $info = $this->db->query("SELECT articulo.*, plantillas.Nombre as NombrePlantilla
                                      FROM articulo 
                                      LEFT JOIN plantillas ON articulo.ID_plantilla = plantillas.ID");
            return $info->getResult();
        }
        public function insertar($datos){
            $info = $this->db->table('articulo');
            $info->insert($datos);
            return $this->db->insertID();
        }
        public function obtenerDatos($data){
            $info = $this ->db->table('articulo');
            $info->where($data);
            return $info->get()->getResultArray();
        }
        public function actualizar($data,$ID){
            $info = $this ->db->table('articulo');
            $info->set($data);
            $info->where('ID' ,$ID); 
            return $info->update();
        }
        public function eliminar($data){
            $info = $this ->db->table('articulo');
            $info->where($data);
            return $info->delete();
        }
    }