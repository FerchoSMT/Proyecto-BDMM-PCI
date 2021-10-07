<?php

require_once $_SERVER ["DOCUMENT_ROOT"].'/Proyecto-BDMM-PCI/php/model/userClass.php';
require_once $_SERVER ["DOCUMENT_ROOT"].'/Proyecto-BDMM-PCI/php/model/dbConnection.php';

class UsuarioDAO{
    private $connection;

    public function __construct (){
        $database = new BaseDeDatos;
        $this->connection = $database->connect();
    }

    public function getUser ($idUser){
        $user=[];
        try{
            $sql = 'SELECT * FROM usuario WHERE Id_Usuario = ?;';

            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1,$idUser);
            $statement->execute();

            if($row = $statement->fetch()){
                
                $user['Id_Usuario'] = $row['Id_Usuario'];
                $user['Tipo'] = $row['Tipo'];
                $user['Nombre'] = $row['Nombre'];
                $user['Apellido_P'] = $row['Apellido_P'];
                $user['Apellido_M'] = $row['Apellido_M'];
                $user['Genero'] = $row['Genero'];
                $user['Fecha_Nac'] = $row['Fecha_Nac'];
                $user['Foto'] = $row['Foto'];
                $user['Email'] = $row['Email'];
                $user['Contrasena'] = $row['Contrasena'];
                $user['Fecha_Registro'] = $row['Fecha_Registro'];
                $user['Activo'] = $row['Activo'];



            }
            else{
                return null;
            }

        }
        catch(Exception $e){

        }

        return $user;
    }
}



?>