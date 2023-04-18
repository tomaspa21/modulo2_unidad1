<?php

require_once "conexion.php";

class ModelosFormularios{
    ///  Insertar Registro  ///
    static public function mdlregistro($tabla, $datos){

        $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES(:nombre, :email, :password)");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            print(Conexion::conectar()->errorInfo());
        }
        $stmt->closeCursor();
        $stmt = null;
    }
}