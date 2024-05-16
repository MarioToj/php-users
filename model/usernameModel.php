<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once __DIR__ . '/../config/db.php';
            
            $con = new db();
            $this->PDO = $con->conexion();
        }
        // Tarea: Modificar el modelo para que inserte los nuevos campos en la BDD
        public function insertar($nombre, $direccion, $telefono, $correo_electronico, $estado){

            $sql = "INSERT INTO username  
            VALUES(null, :nombre, :direccion, :telefono, :correo_electronico, :estado)";

            $stament = $this->PDO->prepare($sql);
            
            $stament->bindParam(':nombre', $nombre);
            $stament->bindParam(':direccion', $direccion);
            $stament->bindParam(':telefono', $telefono);
            $stament->bindParam(':correo_electronico', $correo_electronico);
            $stament->bindParam(':estado', $estado);

            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM username");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        // Tarea: Modificar el modelo para que actualice los nuevos campos en la BDD
        public function update($id, $nombre, $direccion, $telefono, $correo_electronico, $estado){

            $sql = "UPDATE username 
            SET nombre = :nombre, direccion = :direccion, telefono = :telefono, 
                correo_electronico = :correo_electronico, estado = :estado 
            WHERE id = :id";

            $stament = $this->PDO->prepare($sql);

            $stament->bindParam(':nombre', $nombre);
            $stament->bindParam(':direccion', $direccion);
            $stament->bindParam(':telefono', $telefono);
            $stament->bindParam(':correo_electronico', $correo_electronico);
            $stament->bindParam(':estado', $estado);

            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }

        public function login($nombre, $correo_electronico){
            

            $stament = $this->PDO->prepare("SELECT * FROM username WHERE nombre = :nombre AND correo_electronico = :correo_electronico");
            $stament->bindParam(':nombre', $nombre);
            $stament->bindParam(':correo_electronico', $correo_electronico);

            return ($stament->execute()) ? $stament->fetch() : false;
            
        }
    }

?>