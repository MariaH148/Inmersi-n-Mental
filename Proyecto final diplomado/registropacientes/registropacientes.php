
<?php  

include_once('../config/config.php');
include('../config/Database.php');


class registropacientes {
    public $conexion;

    function __construct() {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }

    function save($params) {
        $edad = $params['edad'];
        $nombre = $params['nombre'];
        $correo = $params['correo'];
        $celular = $params['celular'];
        $motivodeconsulta = $params['motivodeconsulta'];

        $insert = "INSERT INTO registropacientes VALUES (NULL,'$edad', '$nombre', '$correo', '$celular', '$motivodeconsulta')";
        return mysqli_query($this->conexion, $insert);
    }

function getAll(){
    $sql="SELECT * FROM registropacientes";
    return mysqli_query($this->conexion, $sql);
}

function getOne($id)

    {
        $sql="SELECT * FROM registropacientes WHERE id=$id";
      
        return mysqli_query($this->conexion, $sql);

    }
    function update($params){
        $edad = $params['edad'];
        $nombre = $params['nombre'];
        $correo = $params['correo'];
        $celular = $params['celular'];
        $motivodeconsulta = $params['motivodeconsulta'];
        $id = $params['id'];

        $update="UPDATE registropacientes SET edad='$edad',nombre='$nombre',correo='$correo',celular='$celular',motivodeconsulta='$motivodeconsulta' WHERE id=$id";
        return mysqli_query($this->conexion,$update);
    }

    function delete($id){
        $delete="DELETE FROM registropacientes WHERE id=$id";
        return mysqli_query($this->conexion,$delete);
    }


}

?>