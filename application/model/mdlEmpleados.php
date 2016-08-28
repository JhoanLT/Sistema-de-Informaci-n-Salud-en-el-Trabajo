<?php 
	class mdlEmpleados
	{
		private $nombre;
		private $identificacion;
		private $direccion;
		private $profesion;
		private $cargo;
		private $salario;
		private $nivel_riesgo;
		private $nombre_tipo_incapacidad;
		private $id_tipo_incapacidad;
		private $descripcion_incapacidad;
		private $id_empleado;
		private $id_enfermedad;
		private $id_accidente;
		private $fecha;
		private $valor_total_incapacidad;
		private $valor_total_empresa;
		private $valor_total_eps;
		private $db;

		public function __SET($atributo, $valor)
		{
			$this->$atributo = $valor;
		}

		public function __GET($atributo)
		{
			return $this->$atributo;
		}

		function __construct($db)
		{
			try {
				$this->db = $db;
			} catch (Exception $e) {
				exit("Se a producido un error en la conexión");
			}
		}

		public function registrarEmpleado()
		{
			$sql = "INSERT INTO empleados VALUES (?, ?, ?, ?, ?, ?, ?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->nombre);
			$stm->bindParam(2, $this->identificacion);
			$stm->bindParam(3, $this->direccion);
			$stm->bindParam(4, $this->profesion);
			$stm->bindParam(5, $this->cargo);
			$stm->bindParam(6, $this->salario);
			$stm->bindParam(7, $this->nivel_riesgo);
			$stm->execute();
		}

		public function listarEmpleados()
		{
			$sql = "SELECT nombre, identificacion, direccion, profesion, cargo, salario, nivel_riesgo FROM empleados";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(2);
		}

		public function consultarTipoIncapacidad()
		{
			$sql = "SELECT nombre_tipo_incapacidad, id_tipo_incapacidad FROM tbl_tipo_incapacidad";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(2);
		}

		public function RegistrarIncapacidadEnfermedadLaboral()
		{
			$sql="INSERT INTO tbl_incapacidad VALUES(null,?,?,null,?,?,null,?,?,?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_tipo_incapacidad);
			$stm->bindParam(2, $this->descripcion_incapacidad);
			$stm->bindParam(3, $this->id_empleado);
			$stm->bindParam(4, $this->id_enfermedad);
			$stm->bindParam(5, $this->fecha);
			$stm->bindParam(6, $this->valor_total_empresa);
			$stm->bindParam(7, $this->valor_total_eps);
			$stm->bindParam(8, $this->valor_total_incapacidad);
			return $stm->execute();
		}

		public function RegistrarIncapacidadAccidenteLaboral()
		{
			$sql="INSERT INTO tbl_incapacidad VALUES(null,?,?,?,?,null,?,?,?,?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_tipo_incapacidad);
			$stm->bindParam(2, $this->descripcion_incapacidad);
			$stm->bindParam(3, $this->nivel_riesgo);
			$stm->bindParam(4, $this->id_empleado);
			$stm->bindParam(5, $this->id_accidente);
			$stm->bindParam(6, $this->fecha);
			$stm->bindParam(7, $this->valor_total_empresa);
			$stm->bindParam(8, $this->valor_total_eps);
			$stm->bindParam(9, $this->valor_total_incapacidad);
			return $stm->execute();
		}

		public function consultarEnfermedades()
		{
			$sql="SELECT * FROM tbl_clase_enfermedad";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(2);
		}

		public function consultarAccidentes()
		{
			$sql="SELECT * FROM tbl_clases_accidente";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(2);
		}

		public function consultarIncaEnfermedad()
		{
			$sql="CALL SP_ConsultarIncaEnfermedad()";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(2);
		}

		public function consultarIncaAccidente()
		{
			$sql="CALL SP_ConsultarIncaAccidente()";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(2);
		}
	}
 ?>