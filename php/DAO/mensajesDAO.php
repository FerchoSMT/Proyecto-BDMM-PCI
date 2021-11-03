<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/model/usuarioModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/model/mensajeModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/model/chatModel.php';
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
            $sql = 'Insert into mensajes(Fecha_Hora,Contenido,Id_Usuario_Envia,Id_Usuario_Recibe) Values(curdate(),?,?,?)';

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

    
    public function getChatsUser($opc, $us,$tipo){

        $listaChats = [];

        try{

            $sql = "Select DISTINCT CONCAT(u.Nombre, ' ', u.Apellido_P, ' ', u.Apellido_M) AS 'Nombre_Contacto', u.Id_Usuario,u.Foto" +
            "FROM Mensaje m" +
            "INNER JOIN Usuario u ON u.Id_Usuario = m.Id_Usuario_Recibe OR u.Id_Usuario = m.Id_Usuario_Envia" +
            "WHERE Id_Usuario_Envia = ? OR Id_Usuario_Recibe = ?;";



            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1,$us);
            $statement->bindParam(2,$us);
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){

                $Id_Usuario = $row["Nombre_Contacto"];
                $Nombre = $row["u.Id_Usuario"];
                $Foto = $row["u.Id_Usuario"];

                $chat = new chatModel();
                $chat->addChat($Id_Usuario, $Nombre,$Foto);
                $listaChat[] = $chat;
            }
        }
        catch(PDOException $e){
            error_log($e->getMessage());
        }
        finally{
            $statement->closeCursor();
        }

        return $listaChats;

    }

    public function getMessagesUser($opc, $us,$ous,$tipo){
        $listaMessages = [];
        try{

            $sql = "Select * From Mensaje Where Id_Usuario_Recibe = ? and Id_Usuario_Envia = ? or Id_Usuario_Envia = ? and Id_Usuario_Recibe = ?";


            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1,$us);
            $statement->bindParam(2,$ous);
            $statement->bindParam(3,$ous);
            $statement->bindParam(4,$us);
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                    $Id_Usuario_A = $row["Id_Usuario_Recibe"];
                    $Id_Usuario_E = $row["Id_Usuario_Envia"];
                    $Contenido = $row["Contenido"];
                    $Fecha_Hora = $row["Fecha_Hora"];
                    $Id_Mensaje = $row["Id_Mensaje"];

                    $msg = new mensajeModel();
                    $msg->addaddMessageChat($Id_Mensaje,$Fecha_Hora,$Contenido, $Id_Usuario_E,$Id_Usuario_A);
                    $listaMessages[] = $msg;
            }
        }
        catch(PDOException $e){
            error_log($e->getMessage());
        }
        finally{
            $statement->closeCursor();
        }

        return $listaMessages;
    }

}
