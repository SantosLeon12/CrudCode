<?php namespace App\Models;
use CodeIgniter\Model;

    class M_sucursales extends Model{

        public function getTable(){
            $info = $this->db->query("SELECT sucursales.*, empresas.Razon_social 
                                      FROM sucursales 
                                      LEFT JOIN empresas ON sucursales.ID_empresa = empresas.ID");
            return $info->getResult();
        }
        public function insertar($datos){
            $info = $this->db->table('sucursales');
            $info->insert($datos);
            return $this->db->insertID();
        }
        public function obtenerDatos($data){
            $info = $this ->db->table('sucursales');
            $info->where($data);
            return $info->get()->getResultArray();
        }
        public function actualizar($data,$ID){
            $info = $this ->db->table('sucursales');
            $info->set($data);
            $info->where('ID' ,$ID); 
            return $info->update();
        }
        public function eliminar($data){
            $info = $this ->db->table('sucursales');
            $info->where($data);
            return $info->delete();
        }
    }