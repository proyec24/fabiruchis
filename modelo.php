<?php
class Persona {
    public $ID_Profesor;
    public $Nombre_Profesor;
    public $Apellidos_Profesor;
    public $Curp;
    public $Cumpleanos;
    public $Contrasena;
    public $FK_Plantel;
    public $FK_Tipo_Profesor;
}
class Permiso {
    public $Fecha_Solicitud;
    public $Fecha_Inicio;
    public $Fecha_Fin;
    public $Motivo;
    public $FK_Estado_Permiso;
    public $FK_Horas_Permiso;
    public $FK_Profesor;
    public $FK_Tipo_Permiso;
}
class Plantel {
    public $Nombre_Plantel;
    public $Direccion;
    public $Telefono;
}