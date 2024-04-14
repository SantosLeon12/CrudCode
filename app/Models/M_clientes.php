<?php namespace App\Models;
use CodeIgniter\Model;

    class M_clientes extends Model{
        public function getTable(){
            $Info = $this ->db->query("SELECT * FROM cliente");
            return $Info->getResult();
        }
        public function insertar($datos){
            $Info = $this->db->table('cliente');
            $Info->insert($datos);
            return $this->db->insertID();
        }
        public function obtenerDatos($data){
            $Info = $this ->db->table('cliente');
            $Info->where($data);
            return $Info->get()->getResultArray();
        }
        public function actualizar($data,$ID){
            $Info = $this ->db->table('cliente');
            $Info->set($data);
            $Info->where('ID' ,$ID);
            return $Info->update();
        }
        public function eliminar($data){
            $Info = $this ->db->table('cliente');
            $Info->where($data);
            return $Info->delete();
        }
    }