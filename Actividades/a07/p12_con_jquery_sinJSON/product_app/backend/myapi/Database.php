<?php
    abstract class Database{
        protected $conexion;

            // SE DEFINE CONSTRUCTOR
        public function __construct($user, $pass, $db) {
            $conexion = @mysqli_connect(
                'localhost',
                $user,
                $pass,
                $db
            );
        }

    }
?>