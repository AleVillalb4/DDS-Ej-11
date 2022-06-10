<?php

require_once 'nacionalidad.php';

class Persona {
    
    public $Nombre;
    public $Direccion;
    public $NumeroDeDocumento;
    public $Edad;
    public $Nacionalidad;

    public function MostrarPersona(){
        echo 'El nombre de la persona es: '. $this->Nombre. '<br>';
        echo 'La direccion de la persona es: '. $this->Direccion. '<br>';
        echo 'El numero de documento de la persona es: '. $this->NumeroDeDocumento. '<br>';
        echo 'La edad de la persona es: '. $this->Edad. '<br>';
        echo 'El id de la persona es: '. $this->Nacionalidad ->Id. '<br>';
        echo 'La descripcion de la nacionalidad es: '. $this->Nacionalidad ->Descripcion. '<br>';
}


}
