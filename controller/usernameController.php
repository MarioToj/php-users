<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            //require_once("../../proyecto/model/usernameModel.php");

            require_once __DIR__ . '/../model/usernameModel.php';

            $this->model = new usernameModel();
        }
        // Recibimos los parametros para insertarlo en la funcion "insertar()" donde esta la query a la BDD
        public function guardar($nombre, $direccion, $telefono, $correo_electronico, $estado){
            $id = $this->model->insertar($nombre, $direccion, $telefono, $correo_electronico, $estado);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre, $direccion, $telefono, $correo_electronico, $estado){
            return ($this->model->update($id, $nombre, $direccion, $telefono, $correo_electronico, $estado) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
        

        public function login($nombre, $correo_electronico) {

            $usuario = $this->model->login($nombre, $correo_electronico);

            return ($usuario != false) ? header("Location:index.php") : header("Location:noAuth.php");
        }
    }

?>