<?php 

		class Otro extends controller
		{
			
			public function index()
			{
				$modelo = $this->loadModel("mdlEmpleados");
				$listarEmp = $modelo->listarEmpleados();

				if (isset($_POST["btnregistrar"])) {
					
					$modelo->__SET("nombre", $_POST["txtnombre"]);
					$modelo->__SET("identificacion", $_POST["txtidentificacion"]);
					$modelo->__SET("direccion", $_POST["txtdireccion"]);
					$modelo->__SET("profesion", $_POST["txtprofesion"]);
					$modelo->__SET("cargo", $_POST["txtcargo"]);
					$modelo->__SET("salario", $_POST["txtsalario"]);
					$modelo->__SET("nivel_riesgo", $_POST["txtnivelriesgo"]);

					if ($modelo->registrarEmpleado()) {
						$msj = "Lobibox.notify('success', {msg: 'El Empleado Se Registro Correctamente!', rounded: true, delay: 3000});";
					}
					else
					{
						$msj = "Lobibox.notify('success', {msg: 'El Empleado Se Registro Correctamente!', rounded: true, delay: 3000});";
					}

				}
				require APP . 'view/_templates/header.php';
		        require APP . 'view/Otro/index.php';
		        require APP . 'view/_templates/footer.php';
			}
		}


 ?>