<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/model/usuarioModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/model/dbConnection.php';

class UsuarioDAO{

    private $connection;

    public function __construct(){
        $database = new BaseDeDatos;
        $this->connection = $database->connect();
    }

    public function iudUser($opc, $us){

        $idUsuarioNuevo = 0;

        try{
            $sql = 'CALL SP_Usuarios(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);';

            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1,$opc);
            $statement->bindParam(2,$us->Id_Usuario);
            $statement->bindParam(3,$us->Tipo);
            $statement->bindParam(4,$us->Nombre);
            $statement->bindParam(5,$us->Apellido_P);
            $statement->bindParam(6,$us->Apellido_M);
            $statement->bindParam(7,$us->Genero);
            $statement->bindParam(8,$us->Fecha_Nac);
            $statement->bindParam(9,$us->Foto);
            $statement->bindParam(10,$us->Email);
            $statement->bindParam(11,$us->Contrasena);
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $idUsuarioNuevo = $row['ID'];
            }
            
        }
        catch(Exception $e){
            echo "Error";
        }

        return $idUsuarioNuevo;
    }

    public function getUser($opc, $us){

        $listaUsuarios = [];
        
        try{
            $sql = 'CALL SP_Usuarios(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);';

            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1,$opc);
            $statement->bindParam(2,$us->Id_Usuario);
            $statement->bindParam(3,$us->Tipo);
            $statement->bindParam(4,$us->Nombre);
            $statement->bindParam(5,$us->Apellido_P);
            $statement->bindParam(6,$us->Apellido_M);
            $statement->bindParam(7,$us->Genero);
            $statement->bindParam(8,$us->Fecha_Nac);
            $statement->bindParam(9,$us->Foto);
            $statement->bindParam(10,$us->Email);
            $statement->bindParam(11,$us->Contrasena);
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                
                $Id_Usuario = $row['Id_Usuario'];
                $Tipo = $row['Tipo'];
                $Nombre = $row['Nombre'];
                $Apellido_P = $row['Apellido_P'];
                $Apellido_M = $row['Apellido_M'];
                $Genero = $row['Genero'];
                $Fecha_Nac = $row['Fecha_Nac'];
                $Foto = $row['Foto'];
                $Email = $row['Email'];
                $Contrasena = $row['Contrasena'];
                $Fecha_Registro = $row['Fecha_Registro'];
                $Activo = $row['Activo'];
                $Edad = $row['Edad'];

                $user = new UsuarioModel();
                $user->addUser($Id_Usuario, $Tipo, $Nombre, $Apellido_P, $Apellido_M, $Genero, $Fecha_Nac, $Foto, $Email, $Contrasena, $Fecha_Registro, $Activo, $Edad);
                $listaUsuarios[] = $user;

            }
        }
        catch(Exception $e){
            echo "Error";
        }

        return $listaUsuarios;
    }
}



?>