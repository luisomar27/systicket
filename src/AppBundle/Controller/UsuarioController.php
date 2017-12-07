<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Usuario;
class UsuarioController extends Controller
{
    /**
     * @Route("/usuario", name="usuario_lista")
     */
    public function indexAction(Request $request)
    {
       // $listUsuario =  array('hector'=> '041-0000',
         //   'mella'=> '041-000');

        //dump($listUsuario);
      //  die;
        $usuario = new usuario();
        $usuario->setnombres('write your name');
        $usuario->setapellidos('write your last name');
         $usuario->setusername('omar27');
        $usuario->setpassword('1234');
         $usuario->settipo_usuario('admin');
        $usuario->setrol_id('10');
         $usuario->setestado('activo');
        $usuario->setfecha_registro('23-11-2017');
        
        // replace this example code with whatever you need
       // return $this->render('AppBundle::usuario.html.twig', array(
       //     'base_dir' => 'usuario'
        //));
    }
}
