<?php namespace App\Models;
use CodeIgniter\Model;

    class M_empresas extends Model{
        public function getTable(){
            $info = $this ->db->query("SELECT * FROM empresas");
            return $info->getResult();
        }
        public function insertar($datos){
            $info = $this->db->table('empresas');
            $info->insert($datos);
            return $this->db->insertID();
        }
        public function obtenerDatos($data){
            $info = $this ->db->table('empresas');
            $info->where($data);
            return $info->get()->getResultArray();
        }
        public function actualizar($data,$ID){
            $info = $this ->db->table('empresas');
            $info->set($data);
            $info->where('ID' ,$ID);
            return $info->update();
        }
        public function eliminar($data){
            $info = $this ->db->table('empresas');
            $info->where($data);
            return $info->delete();
        }
    }