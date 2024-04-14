<?php namespace App\Models;
use CodeIgniter\Model;

    class M_areas extends Model{

        public function getTable(){
            $info = $this->db->query("SELECT areas.*, sucursales.Nombre as NombreSucursal
                                      FROM areas 
                                      LEFT JOIN sucursales ON areas.ID_sucursal = sucursales.ID");
            return $info->getResult();
        }
        public function insertar($datos){
            $info = $this->db->table('areas');
            $info->insert($datos);
            return $this->db->insertID();
        }
        public function obtenerDatos($data){
            $info = $this ->db->table('areas');
            $info->where($data);
            return $info->get()->getResultArray();
        }
        public function actualizar($data,$ID){
            $info = $this ->db->table('areas');
            $info->set($data);
            $info->where('ID' ,$ID); 
            return $info->update();
        }
        public function eliminar($data){
            $info = $this ->db->table('areas');
            $info->where($data);
            return $info->delete();
        }
    }