<?php
namespace App\Controllers;
use App\Models\Persona;


class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    

    public function inicio()
    {

        if(!empty($_POST)){
            $usu_email = $this->request->getPost('usu_email');
            $usu_pass = $this->request->getPost('usu_pass');
            
        }else{
        return view('welcome_message');
            
        }
        


        $usuario_model = new Persona();

        $datos[''] = '';
        $datos['mail'] = $usu_email;
        $datos['pass'] = $usu_pass;
        $datos['usuario'] = $usuario_model->get_usuario($usu_email, $usu_pass);
        

        
        return view('principal', $datos);
    }

    

   

}
