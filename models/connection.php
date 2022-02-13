<?php
    class Conexion{

        private $con;

        public function __construct()
        {
            $this->con = new mysqli('localhost', 'root', '','mvc');
        }

        public function getUsers(){
            $query = $this->con->query('SELECT * FROM persona');

            $data = [];

            $i = 0;
            while($fila = $query->fetch_assoc()){
                $data[$i] = $fila;
                $i++;    
            }

            return $data;
        }
    }
?>