<?php
    class Clase_sql{
        # ATRIBUTOS |  privados
        private $bd;
        # CONSTRUCTOR - permite dar un valor inicial a los atributos
        public function __construct(){
            $this->bd = new mysqli(SERVIDOR,USUARIO,CLAVE,BDD);
            # Definir caracteres
            $this->bd -> set_charset('utf8');
        }

        # FUNCIONES
        # Funcion para consultar Vehiculo
        public function ConsultaVehiculoGeneral(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT * FROM vehiculos");
            return $resultado;
        }
        # Funcion para Insertar vehiculo
        public function InsertarVehiculo($nummatricula,$nommodelo,$kvehiculo,$cvehiculo,$vimage1){
            $resultado = $this->bd->query("INSERT INTO  vehiculos ( NUM_MAT_VE,NOM_MOD,KM_VE,COLOR_VE,IMG_VE) VALUES ('$nummatricula','$nommodelo','$kvehiculo','$cvehiculo','$vimage1')");
            return true;
            }
        # Funcion para eliminar Vehiculo
        public function EliminarVehiculo($id){
            $resultado = $this->bd->query("DELETE FROM vehiculos WHERE NUM_MAT_VE = '$id'");
            return $resultado;
        }
        
        # Funcion para Visualizar Paralelos Unico
        public function ConsultarVehiculoUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM vehiculos WHERE NUM_MAT_VE = '$cod'");
            return $resultado;
        }
        
        # Funcion para Actualizar Paralelos
        public function ActualizarVehiculo($cod, $nummatricula,$nommodelo,$kvehiculo,$cvehiculo,$vimage1){
            $resultado = $this->bd->query("UPDATE vehiculos set NUM_MAT_VE= '$nummatricula', NOM_MOD ='$nommodelo' ,KM_VE = '$kvehiculo',COLOR_VE ='$cvehiculo' ,IMG_VE ='$vimage1' WHERE NUM_MAT_VE = '$cod'");
            return true;
        }
        public function ConsultaModelos(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT NOM_MOD FROM model_v");
            return $resultado;   
        }
        #Funcion para Consultar Modelo
        public function ConsultaModeloGeneral(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT * FROM model_v");
            return $resultado;
     }
     public function ConsulTipoCliente(){
        # Consultas Sql
        # query "es la consulta" ("consulta sql")
        $resultado = $this->bd->query("SELECT * FROM tipo_cliente");
        return $resultado;
    }
 public function ConsultaClienteGeneral(){
    # Consultas Sql
    # query "es la consulta" ("consulta sql")
    $resultado = $this->bd->query("SELECT * FROM clientes");
    return $resultado;
}
# Funcion para Insertar Cliente
public function InsertarCliente($nummident,$Tcliente,$Inombres,$Iapellidos,$Idireccion,$Numtelef){
    $resultado = $this->bd->query("INSERT INTO  clientes ( CED_CLI, COD_TCLI, NOM_CLI, APE_CLI, DIR_CLI,TELF_CLIF) VALUES ('$nummident','$Tcliente','$Inombres','$Iapellidos','$Idireccion','$Numtelef')");
    return true;
        }
        # Funcion para Insertar Modelo
        public function InsertarModelo($nommodelo,$marmodel,$premodel,$combustible,$trasnmision,$capacidad){
            $resultado = $this->bd->query("INSERT INTO  model_v ( NOM_MOD,MARCA_MOD,PRECIO_MOD,CONBUSTIBE,TRANSMISION,CAPACIDAD) VALUES ('$nommodelo','$marmodel','$premodel','$combustible','$trasnmision','$capacidad')");
            return true;
            }
        # Funcion para eliminar Modelo
        public function EliminarModelo($id){
            $resultado = $this->bd->query("DELETE FROM model_v WHERE NOM_MOD = '$id'");
            return $resultado;
        }
        # Funcion para Visualizar Modelo Unico
        public function ConsultarModeloUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM model_v WHERE NOM_MOD = '$cod'");
            return $resultado;
        }
        
        # Funcion para Actualizar Modelo
        public function ActualizarModelo($cod,$nommodelo,$marmodel,$premodel,$combustible,$trasnmision,$capacidad){
            $resultado = $this->bd->query("UPDATE model_v set NOM_MOD ='$nommodelo' ,MARCA_MOD ='$marmodel',PRECIO_MOD = '$premodel',CONBUSTIBE ='$combustible',TRANSMISION = '$trasnmision',CAPACIDAD ='$capacidad' WHERE NOM_MOD = '$cod'");
            return true;
        }
    }
# Funcion para eliminar Cliente
public function EliminarCliente($id){
    $resultado = $this->bd->query("DELETE FROM clientes WHERE CED_CLI = '$id'");
    return $resultado;
}
 # Funcion para Visualizar Cliente Unico
 public function ConsultarClienteUnico($cod){
    $resultado = $this->bd->query("SELECT * FROM clientes WHERE CED_CLI = '$cod'");
    return $resultado;
}

# Funcion para Actualizar Cliente
public function ActualizarCliente($cod,$nummident,$Tcliente,$Inombres,$Iapellidos,$Idireccion,$Numtelef){
    $resultado = $this->bd->query("UPDATE clientes set CED_CLI= '$nummident', COD_TCLI='$Tcliente' , NOM_CLI='$Inombres',APE_CLI ='$Iapellidos' ,DIR_CLI ='$Idireccion' ,TELF_CLIF='$Numtelef'  WHERE CED_CLI = '$cod'");
    return true;
}
    
}
?>