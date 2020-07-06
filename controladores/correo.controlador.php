<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ControladorCorreos{


/*======================================================================
=            Controlador envio de recupecion de contraseña             =
======================================================================*/


     static public function ctrEnvioRecuperarContrasena(){


    if(isset($_POST["nuevoUsuarioRecuperarPassword"])){

      if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoUsuarioRecuperarPassword"]) &&
          preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoCorreoRecuperarPassword"])){  

          $item = "usuario";
          $valor = $_POST["nuevoUsuarioRecuperarPassword"];

          $usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);


      if($_POST["nuevoUsuarioRecuperarPassword"] == $usuario["usuario"] &&  $_POST["nuevoCorreoRecuperarPassword"] == $usuario["correo"]){
 
        $leng = 4;

        $cons = array('b','c','d','f','g','h','j','k','m','n','p','q','r','s','t','w','x','y','z');

        $voca = array('a','e','i','o','u');

        $numero = array(1,2,3,4,5,6,7,8,9,0);
 
        $max = $leng/2;

        $password = '';

          for ($i=0; $i <=$max ; $i++) { 
            
            $password .= $cons[rand(0,count($cons)-1)];

            $password .= $voca[rand(0,count($voca)-1)];

            $password .= $numero[rand(0,count($numero)-1)];

          }

          $tabla = "usuarios";

          $encriptar = crypt($password , '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

          
          $respuesta = ModeloUsuarios::mdlEditarRecuperarClave($tabla, $encriptar, $usuario["id"]);

        date_default_timezone_set("America/Bogota");

        $dia = date('d');
        $mes = date('m');
        $año = date('y');
        $hora = date('H:i:s'); 


        $mail = new PHPMailer(); 
         
        $mail->SMTPDebug = 0; 
        $mail->IsSMTP(); 
        $mail->Host = 'smtp.gmail.com';                
        $mail->SMTPAuth = true;
        $mail->Username = 'totorialespro@gmail.com'; 
        $mail->Password = '1073167005cardoso'; 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Port = 465; 

        $mail->setFrom('totorialespro@gmail.com');

        $mail->addAddress($usuario["correo"]);             
      
        $mail->isHTML(true);                                
            
        $mail->Subject = utf8_decode("¡Solicitud para recuperar contraseña!");

        $mail->Body = '

          <div style="width:100%; background: #eee; position: relative; font-family: sans-serif; padding-bottom: 40px;">
    
              <center>
                
                <img style="padding:20px;width: 20%;" src="https://sites.google.com/a/oxohotel.com/fotos/home/logo-login.png" alt="">
              </center> 

              <div style="position:20px; margin:auto; width: 600px; background:white; padding:20px;">
                
                    <center>
                       

                      <h3 style="font-weight:100; color:#999;">Solicitud para recuperar contraseña | MARKET PLACE</h3>

                      <hr style="border:1px solid #ccc; width: 80%;">

                      <h4 style="font-weight:100; color:#999; padding: 0 20px">

                        Buen día señor(a) <strong>'.$usuario["nombre"].'</strong><br> <br>su solicitud de contraseña fue exitosa.
                        La cual es la siguiente.<br>

                        <strong>'.$password.' </strong> <br>

                        La solicitud se radica el dia <strong>'.$dia.'</strong> del mes de <strong>'.$mes.'</strong> del año <strong>'.$año.'</strong> alas <strong>'.$hora.'

                      <br>

                      <hr style="border:1px solid #ccc; width: 80%;">

                    </center>

              </div>  

          </div>';

        $mail->CharSet = 'UTF-8';
                    
        $envio = $mail->Send();

      }

          if(!$envio){

                 echo '<script>

                          swal({

                            type: "error",
                            title: "¡El correo no se ha enviado por favor verifique que todos los campos esten diligenciados y que sean correctos!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"

                          }).then(function(result){

                            if(result.value){
                            
                              window.location = "ingreso";

                            }

                          });
                    

                    </script>';
              }else{

                echo '<script>

                      swal({

                        type: "success",
                        title: "¡La nueva contraseña se ha enviado al correo registrado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                      }).then(function(result){

                        if(result.value){
                        
                          window.location = "ingreso";

                        }

                      });        

                </script>'; 


                  } 

                    }else{

                  
                   echo '<script>

                              swal({

                                type: "error",
                                title: "¡Los campos no pueden ir vacío o llevar caracteres especiales!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"

                              }).then(function(result){

                                if(result.value){
                                
                                  window.location = "ingreso";

                                }

                              });
                        

                        </script>';

                }

            }

      }
   


}