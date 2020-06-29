<?php
    inclde 'modelo.php';|
    class BaseDeDatos {
        private $con;
        
        public function __construct() {
            $this->con = new PDO('mysql:host=localhost;dbname=escuela_frida_kahlo','root','');
        }

        public function ConsultaProfesor($id) {
            $sql = $this->con->prepare("SELECT * FROM Profesor WHERE ID_Profesor=".$id);
            $sql->execute();
            $res = $sql->fetchAll();
            $arreglo = array();
            foreach ($res as $dato) {
                $obj = new Profesor();
                $obj->ID_Profesor = $dato['ID_Profesor'];
                $obj->Nombre_Profesor = $dato['Nombre_Profesor'];
                $obj->Apellidos_Profesor = $dato['Apellidos_Profesor'];
                $obj->Curp = $dato['Curp'];
                $obj->Cumpleanos = $dato['Cumpleanos'];
                $obj->Contrasena = $dato['Contrasena'];
                $obj->FK_Plantel = $dato['FK_Plantel'];
                $obj->FK_Tipo_Profesor = $dato['FK_Tipo_Profesor'];
                array_push($arreglo, $obj);
            }
            return $arreglo;
        }

	public function ConsultaPermiso($id) {
            $sql = $this->con->prepare("SELECT * FROM Permiso WHERE ID_Permiso=".$id);
            $sql->execute();
            $res = $sql->fetchAll();
            $arreglo = array();
            foreach ($res as $dato) {
                $obj = new Permiso();
                $obj->Fecha_Solicitud = $dato['Fecha_Solicitud'];
                $obj->Fecha_Inicio = $dato['Fecha_Inicio'];
                $obj->Fecha_Fin = $dato['Fecha_Fin'];
                $obj->Motivo = $dato['Motivo'];
                $obj->FK_Estado_Permiso = $dato['FK_Estado_Permiso'];
                $obj->FK_Horas_Permiso = $dato['FK_Horas_Permiso'];
                $obj->FK_Profesor = $dato['FK_Profesor'];
                $obj->FK_Tipo_Permiso = $dato['FK_Tipo_Permiso'];
                array_push($arreglo, $obj);
            }
            return $arreglo;
        }

	public function ConsultaPlantel($id) {
            $sql = $this->con->prepare("SELECT * FROM Plantel WHERE ID_Plantel=".$id);
            $sql->execute();
            $res = $sql->fetchAll();
            $arreglo = array();
            foreach ($res as $dato) {
                $obj = new Plantel();
                $obj->Nombre_Plantel = $dato['Nombre_Plantel'];
                $obj->Direccion = $dato['Direccion'];
                $obj->Telefono = $dato['Telefono'];
                array_push($arreglo, $obj);
            }
            return $arreglo;
        }

        public function Ingreso($ID_Profesor, $Contrasena) {
            $sql = $this->con->prepare("SELECT * FROM Profesor WHERE BINARY ID_Profesor = '".$ID_Profesor."' AND BINARY Contrasena = '".$Contrasena."'");
            $sql->execute();
            $res = $sql->fetchAll();

            if (count($res) > 0) {
                foreach ($res as $dato) {
                    return $dato['ID_Profesor'];
                }
            }
            return -1;
        }

        public function AltasProfesor($profesor, $id) {
            $data = [
                'ID_Profesor' => $profesor->ID_Profesor,
                'Nombre_Profesor' => $profesor->Nombre_Profesor,
                'Apellidos_Profesor' => $profesor->Apellidos_Profesor,
                'Curp' => $profesor->Curp,
                'Cumpleanos' => $profesor->Cumpleanos,
                'Contrasena' => $profesor->Contrasena,
                'FK_Plantel' => $profesor->FK_Plantel,
                'FK_Tipo_Profesor' => $profesor->FK_Tipo_Profesor
            ];
            $sql = $this->con->prepare("INSERT INTO Profesor values (:ID_Profesor, :Nombre_Profesor, :Apellidos_Profesor, :Curp, :Cumpleanos, :Contrasena, :FK_Plantel, :FK_Tipo_Profesor)");
            $sql->execute($data);
        }

	public function AltasPermiso($permiso, $id) {
            $data = [
                'Fecha_Solicitud' => $permiso->Fecha_Solicitud,
                'Fecha_Inicio' => $permiso->Fecha_Inicio,
                'Fecha_Fin' => $permiso->Fecha_Fin,
                'Motivo' => $permiso->Motivo,
		'FK_Estado_Permiso' => $permiso->FK_Estado_Permiso,
                'FK_Horas_Permiso' => $permiso->FK_Horas_Permiso,
                'FK_Profesor' => $permiso->FK_Profesor,
                'FK_Tipo_Permiso' => $permiso->FK_Tipo_Permiso
            ];
            $sql = $this->con->prepare("INSERT INTO Permiso (Fecha_Solicitud, Fecha_Inicio, Fecha_Fin, Motivo, FK_Estado_Permiso, FK_Horas_Permiso, FK_Profesor, FK_Tipo_Permiso) values (:Fecha_Solicitud, :Fecha_Inicio, :Fecha_Fin, Motivo, :FK_Estado_Permiso, :FK_Horas_Permiso, :FK_Profesor, :FK_Tipo_Permiso)");
            $sql->execute($data);
        }

	public function AltasPlantel($plantel, $id) {
            $data = [
                'Nombre_Plantel' => $plantel->Nombre_Plantel,
                'Direccion' => $plantel->Direccion,
                'Telefono' => $plantel->Telefono
            ];
            $sql = $this->con->prepare("INSERT INTO Permiso (Nombre_Plantel, Direccion, Telefono) values (:Nombre_Plantel, :Direccion, :Telefono)");
            $sql->execute($data);
        }
    }

