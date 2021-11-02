<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/model/usuarioModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/model/mensajeModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/model/dbConnection.php';

class MensajeDAO{
    private $connection;

    public function __construct(){
        $database = new BaseDeDatos;
        $this->connection = $database->connect();
    }

    public function __destruct(){
        $this->connection = null;
    }

    public function iudMensaje($opc, $msg){

        $idMensajeNuevo = -1;
        try{
            $sql = 'Insert into mensajes(Fecha_Hora,Contenido,Id_Usuario_E,Id_Usuario_A) Values(curdate(),?,?,?)';

            $statement = $this->connection->prepare($sql);
            //$statement->bindParam(1,$opc);
            //$statement->bindParam(2,"");
            $statement->bindParam(1,$msg->$Contenido);
            $statement->bindParam(2,$msg->$Id_Usuario_E);
            $statement->bindParam(3,$msg->$Id_Usuario_A);
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $idMensajeNuevo = $row['ID'];
            }
            
        }
        catch(PDOException $e){
            echo($e->getMessage());
        }
        finally{
            $statement->closeCursor();
        }

        return $idMensajeNuevo;
    }

    
    public function getChatsUser($opc, $us){

        $listaChats = [];

        try{
            if(_SESSION["Tipo" == "E"]){
                
            }
            $sql = 'Select * from mensaje where Id_Usuario_E = ? or Id_Usuario_A = ?';

            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1,$us);
            $statement->bindParam(2,$us);
            /*$statement->bindParam(1,$opc);
            $statement->bindValue(2,NULL);
            $statement->bindValue(3,NULL);
            $statement->bindValue(4,NULL);
            $statement->bindValue(5,NULL);
            $statement->bindParam(6,$id);*/
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $Id_Mensaje = $row['Id_Mensaje'];
                $Fecha_Hora = $row['Fecha_Hora'];
                $Contenido = $row['']
                if ($tipo == "E"){
                    
                    $Titulo = $row['Titulo'];
                    $Cant_Niveles = $row['Cant_Niveles'];
                    $Descripcion = $row['Descripcion'];
                    $Imagen = $row['Imagen'];
    
                    $curso = new CursoModel();
                    $curso->addCursoE($Titulo, $Cant_Niveles, $Descripcion, $Imagen);
                    $listaCursos[] = $curso;
                }

                if ($tipo == "A"){
                    $Titulo = $row['Titulo'];
                    $Nivel_Actual = $row['Nivel_Actual'];
                    $Cant_Niveles = $row['Cant_Niveles'];
                    $Fecha_Inicio = $row['Fecha_Inicio'];
                    $Fecha_Reciente = $row['Fecha_Reciente'];
                    $Fecha_Fin = $row['Fecha_Fin'];
                    $Imagen = $row['Imagen'];
    
                    $curso = new CursoModel();
                    $curso->addCursoA($Titulo, $Nivel_Actual, $Cant_Niveles, $Fecha_Inicio, $Fecha_Reciente, $Fecha_Fin, $Imagen);
                    $listaCursos[] = $curso;
                }

            }
        }
        catch(PDOException $e){
            error_log($e->getMessage());
        }
        finally{
            $statement->closeCursor();
        }

    }

    public function sendMessage($opc,$id,$us){

    }

    public function getMensajesUser($opc, $id, $tipo){
        
        $listaCursos = [];
        
        try{
            $sql = 'CALL SP_Cursos(?, ?, ?, ?, ?, ?, ?, ?);';

            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1,$opc);
            $statement->bindValue(2,NULL);
            $statement->bindValue(3,NULL);
            $statement->bindValue(4,NULL);
            $statement->bindValue(5,NULL);
            $statement->bindValue(6,NULL);
            $statement->bindValue(7,NULL);
            $statement->bindParam(8,$id);
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                
                if ($tipo == "E"){
                    $Titulo = $row['Titulo'];
                    $Cant_Niveles = $row['Cant_Niveles'];
                    $Descripcion = $row['Descripcion'];
                    $Imagen = $row['Imagen'];
    
                    $curso = new CursoModel();
                    $curso->addCursoE($Titulo, $Cant_Niveles, $Descripcion, $Imagen);
                    $listaCursos[] = $curso;
                }

                if ($tipo == "A"){
                    $Titulo = $row['Titulo'];
                    $Nivel_Actual = $row['Nivel_Actual'];
                    $Cant_Niveles = $row['Cant_Niveles'];
                    $Fecha_Inicio = $row['Fecha_Inicio'];
                    $Fecha_Reciente = $row['Fecha_Reciente'];
                    $Fecha_Fin = $row['Fecha_Fin'];
                    $Imagen = $row['Imagen'];
    
                    $curso = new CursoModel();
                    $curso->addCursoA($Titulo, $Nivel_Actual, $Cant_Niveles, $Fecha_Inicio, $Fecha_Reciente, $Fecha_Fin, $Imagen);
                    $listaCursos[] = $curso;
                }

            }
        }
        catch(PDOException $e){
            error_log($e->getMessage());
        }
        finally{
            $statement->closeCursor();
        }

        return $listaCursos;
    }
}
