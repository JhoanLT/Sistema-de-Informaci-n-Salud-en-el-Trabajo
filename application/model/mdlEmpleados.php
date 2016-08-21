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
	}
 ?>