<?php namespace App\Models;
use CodeIgniter\Model;

    class M_ordenVenta extends Model{

        public function getTable(){
            $info = $this->db->query("SELECT orden_venta.*, 
                                              sucursales.Nombre as NombreSucursal, 
                                              usuario.Nombre as NombreUsuario, 
                                              cliente.Razon_social as RazonSocialCliente
                                      FROM orden_venta 
                                      LEFT JOIN sucursales ON orden_venta.ID_sucursal = sucursales.ID
                                      LEFT JOIN usuario ON orden_venta.ID_usuario = usuario.ID
                                      LEFT JOIN cliente ON orden_venta.ID_cliente = cliente.ID");
            return $info->getResult();
        }
        
        public function insertar($datos){
            $info = $this->db->table('orden_venta');
            $info->insert($datos);
            return $this->db->insertID();
        }
        public function obtenerDatos($data){
            $info = $this ->db->table('orden_venta');
            $info->where($data);
            return $info->get()->getResultArray();
        }
        public function actualizar($data,$ID){
            $info = $this ->db->table('orden_venta');
            $info->set($data);
            $info->where('ID' ,$ID); 
            return $info->update();
        }
        public function eliminar($data){
            $info = $this ->db->table('orden_venta');
            $info->where($data);
            return $info->delete();
        }
    }