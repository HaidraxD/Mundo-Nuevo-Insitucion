<?php

class LoginModel extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function UserSingUp($datos){
        //insert datos de la base de datos
        
        $query = $this->db->connect()->prepare('select * from Usuario where Correo_Insti=:email and aes_decrypt(Contraseña,"hola2")=:pass and Estado = 1;');
        $query->execute(['email'=> $datos['email'], 'pass'=> $datos['pass']]);
        
        if($query->rowCount()){
            header("Location: http://localhost/Mundo-Nuevo-Institucion/course");
            return true;
        }else{
            echo "<script>alert('no');</script>";
            return false;
        }
        

    }
}

?>