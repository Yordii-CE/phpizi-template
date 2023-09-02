<?php

class AuthController extends Controller
{
   function index(): View
   {
      return view(false);
   }
   function register()
   {
      return view(false);
   }
   function reset()
   {

      return view(false);
   }
   function login(Body $body)
   {
      $usuario = $body->usuario;
      echo "USURIO OBTENIDO: " . $usuario;
      /*
	   $errors = array();
	
      if(!empty($_POST))
      {         
         $nombre = mysqli_real_escape_string($db,$_POST['nombre']);
         $usuario = mysqli_real_escape_string($db,$_POST['usuario']);
         $password = mysqli_real_escape_string($db,$_POST['password']);
         // $id_tipo = mysqli_real_escape_string($db,$_POST['id_tipo']);
         
         
         if(isNullLogin($usuario, $password))
         {
            $errors[] = "Debe llenar todos los campos";
         }
         
         $errors[] = login($usuario, $password);	
      }*/
   }
}
