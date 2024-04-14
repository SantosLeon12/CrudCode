<?php namespace App\Models;
use CodeIgniter\Model;

    class M_usuarios extends Model{

        public function getTable(){
            $info = $this->db->query("SELECT usuario.*, sucursales.Nombre as NombreSucursal
                                      FROM usuario 
                                      LEFT JOIN sucursales ON usuario.ID_sucursal = sucursales.ID");
            return $info->getResult();
        }
        public function insertar($datos){
            $info = $this->db->table('usuario');
            $info->insert($datos);
            return $this->db->insertID();
        }
        public function obtenerDatos($data){
            $info = $this ->db->table('usuario');
            $info->where($data);
            return $info->get()->getResultArray();
        }
        public function actualizar($data,$ID){
            $info = $this ->db->table('usuario');
            $info->set($data);
            $info->where('ID' ,$ID); 
            return $info->update();
        }
        public function eliminar($data){
            $info = $this ->db->table('usuario');
            $info->where($data);
            return $info->delete();
        }
    }