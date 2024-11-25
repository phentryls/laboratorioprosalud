<?php
namespace App\Controllers;
use App\Models\Persona;


class Usuarios extends BaseController
{

    function index()
    {
        return view('usuarios/index');


    }


    function usuario_agregar()
        {
            if(!empty($_POST)){
                $datos['usu_email']  = $this->request->getPost('usu_nombre');
                $datos['usu_pass']   = $this->request->getPost('usu_apaterno');
                $datos['usu_email']  = $this->request->getPost('usu_amaterno');
                $datos['usu_email']  = $this->request->getPost('usu_usuario');
                $datos['usu_pass']   = $this->request->getPost('usu_genero');
                $datos['usu_pass']   = $this->request->getPost('usu_cel');
                $datos['usu_email']  = $this->request->getPost('usu_email');
                $datos['usu_pass']   = $this->request->getPost('usu_pass');

                return view('usuario_registrar', $datos);

            }else{
                return view('usuarios/usuario_registrar');

            }
        


            return view('usuarios/usuario_registrar');


        }

    
}