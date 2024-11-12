<?php
namespace myAPI\DataBase;
abstract class DataBase {
    // Objeto de conexión protegido, accesible por las subclases
    protected $conexion;
    protected $response;

    // Constructor de la clase
    public function __construct($user, $password, $dbName) {
        $host = 'localhost';
        $this->conexion = @mysqli_connect($host, $user, $password, $dbName);
        // Verifica si la conexión fue exitosa
        if (!$this->conexion) {
            die('¡Base de datos NO conectada!');
        }
    }

    // Método abstracto para que las subclases implementen sus propias consultas
    abstract protected function query($sql);

    // Destructor para cerrar la conexión
    public function __destruct() {
        if ($this->conexion) {
            mysqli_close($this->conexion);
        }
    }

    public function getData() {
        // Convierte el array de response a un string JSON y lo retorna
        return json_encode($this->response, JSON_PRETTY_PRINT);
    }
}
?>
