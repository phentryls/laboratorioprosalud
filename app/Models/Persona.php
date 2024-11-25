<?php
namespace App\Models;

use CodeIgniter\Model;
class Persona extends Model 
{    
    protected $DBGroup = 'default';
    protected $table = 'usuario';    
    protected $primaryKey = 'usu_id';    
    protected $allowedFields = ['usu_nombre', 'usu_contrasena','usu_rol', 'usu_status', 'usu_email']; 



    function get_usuario($usu_email, $usu_pass)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT usu_id, usu_nombre, usu_contrasena, usu_apaterno, usu_amaterno, usu_genero FROM usuario where usu_email = '$usu_email' AND usu_contrasena = '$usu_pass'");


             
        
         
        $result = $query->getRowArray();
        

        return $result;
        

    }

}