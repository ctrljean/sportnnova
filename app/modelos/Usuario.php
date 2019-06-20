<?php
class Usuario
{
    private $password;
    private $nombre;
    private $connection;

    public function __construct()
    {
        $this->connection = new Base();
    }
    public function userExists($userForm, $passForm): bool
    {
        try {
            $this->connection->beginTransaction();
            $sql = "SELECT * FROM usuario WHERE document_number = :documento AND password  = :password";
            $stmn = $this->connection->prepare($sql);
            $stmn->bindParam(":documento", $userForm, PDO::PARAM_STR);
            $stmn->bindParam(":password", $passForm, PDO::PARAM_STR);
            $stmn->execute();
            $this->connection->commit();
            if ($stmn->rowCount()) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->connection->rollBack();
        }
    }
    public function insert_new_user(array $datos):bool
    {
        try {
            $this->connection->beginTransaction();
            $sql = "INSERT INTO usuario (document_number, name, password, birth_date, sports, id_position) VALUES (:document_number, :name, :password, :birth_date, :sports, :id_position)";
            $stmn = $this->connection->prepare($sql);
            $stmn->bindParam(":document_number", $datos['document_number'], PDO::PARAM_STR);
            $stmn->bindParam(":name", $datos['complete_name'], PDO::PARAM_STR);
            $stmn->bindParam(":password", $datos['password'], PDO::PARAM_STR);
            $stmn->bindParam(":birth_date", $datos['birth_date'], PDO::PARAM_STR);
            $stmn->bindParam(":sports", $datos['sports'], PDO::PARAM_STR);
            $stmn->bindParam(":id_position", $datos['position'], PDO::PARAM_STR);
            $stmn->execute();
            $this->connection->commit();
            if ($stmn->rowCount()) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->connection->rollBack();
            return false;
        }
    }
    public function limpiarDatos($datos): string
    {
        $datos = trim($datos);
        $datos = htmlspecialchars($datos);
        $datos = filter_var($datos, FILTER_SANITIZE_STRING);
        return $datos;
    }
}
