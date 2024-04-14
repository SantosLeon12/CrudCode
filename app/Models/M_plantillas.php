<?php namespace App\Models;
use CodeIgniter\Model;

    class M_plantillas extends Model{
        public function listarNombres(){
            $info = $this ->db->query("SELECT * FROM plantillas");
            return $info->getResult();
        }
        public function insertar($datos){
            $info = $this->db->table('plantillas');
            $info->insert($datos);
            return $this->db->insertID();
        }
        public function insertarPC($datos){
            // Insertar los nuevos registros en plantillas_campos asociados a la plantilla
            $this->db->table('plantillas_campos')->insert($datos);
        }
        
        public function obtenerNombre($data){
            $info = $this ->db->table('plantillas');
            $info->where($data);
            return $info->get()->getResultArray();
        }
        public function actualizar($data,$ID){
            $info = $this ->db->table('plantillas');
            $info->set($data);
            $info->where('ID' ,$ID);
            return $info->update();
        }
        public function eliminar($data){
            $info = $this ->db->table('plantillas');
            $info->where($data);
            return $info->delete();
        }
    }