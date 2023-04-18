<?php 

class ControladorFormularios{
    /*      Registro    */
    static public function ctrRegistro(){
        if(isset($_POST["registroNombre"])){
            $tabla = "registros";
            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"]
            );

            $respuesta = ModelosFormularios::mdlregistro($tabla, $datos);
            return $respuesta;
        }
    }
}
