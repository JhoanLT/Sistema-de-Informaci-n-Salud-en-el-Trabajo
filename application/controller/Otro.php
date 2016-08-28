<?php 

		class Otro extends controller
		{
			
			public function index()
			{
				$modelo = $this->loadModel("mdlEmpleados");
				$listarEmp = $modelo->listarEmpleados();
				$listartipoIncapacidad = $modelo->consultarTipoIncapacidad();
				$listarEnfermedades = $modelo->consultarEnfermedades();
				$listaraccidentes = $modelo->consultarAccidentes();
				$listarIncaEnfer = $modelo->consultarIncaEnfermedad();
				$listarIncaAcci = $modelo->consultarIncaAccidente();

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
						$msj = "Lobibox.notify('success', {msg: 'Error En El Registro!', rounded: true, delay: 3000});";
					}

				}


				if (isset($_POST["btnRegistrarInca"])) {
					
					$modelo->__SET("id_tipo_incapacidad",$_POST["txttipo"]);
					$modelo->__SET("descripcion_incapacidad",$_POST["txtdefinicion"]);
					$modelo->__SET("id_empleado",$_POST["txtIdentificacion"]);
					$modelo->__SET("id_enfermedad",$_POST["txttipoenfermedad"]);
					$modelo->__SET("fecha",date("Y-m-d",strtotime($_POST["txtfecha"])));
					$modelo->__SET("valor_total_empresa",$_POST["txtempres"]);
					$modelo->__SET("valor_total_eps",$_POST["txteps"]);
					$modelo->__SET("valor_total_incapacidad",$_POST["txttotal"]);

					if ($modelo->RegistrarIncapacidadEnfermedadLaboral()) {
						$msj = "Lobibox.notify('success', {msg: 'La Incapacidad Se Registro Correctamente!', rounded: true, delay: 3000});";
					}
					else
					{
						$msj = "Lobibox.notify('error', {msg: 'Erro En El Registro!', rounded: true, delay: 3000});";
					}
				}

				if (isset($_POST["btnRegistrarIncapacidad"])) {
					
					$modelo->__SET("id_tipo_incapacidad",$_POST["txttipo"]);
					$modelo->__SET("descripcion_incapacidad",$_POST["txtdefinicion"]);
					$modelo->__SET("nivel_riesgo",$_POST["txtnivelderiesgo"]);
					$modelo->__SET("id_empleado",$_POST["txtIdentificacion"]);
					$modelo->__SET("id_accidente",$_POST["txttipoaccidente"]);
					$modelo->__SET("fecha",date("Y-m-d",strtotime($_POST["txtfecha"])));
					$modelo->__SET("valor_total_empresa",$_POST["txtempres"]);
					$modelo->__SET("valor_total_eps",$_POST["txteps"]);
					$modelo->__SET("valor_total_incapacidad",$_POST["txttotal"]);

					if ($modelo->RegistrarIncapacidadAccidenteLaboral()) {
						$msj = "Lobibox.notify('success', {msg: 'La Incapacidad Se Registro Correctamente!', rounded: true, delay: 3000});";
					}
					else
					{
						$msj = "Lobibox.notify('error', {msg: 'Erro En El Registro!', rounded: true, delay: 3000});";
					}
				}
				require APP . 'view/_templates/header.php';
		        require APP . 'view/Otro/index.php';
		        require APP . 'view/_templates/footer.php';
			}

			public function ContipoIncapacidad()
			{

				$modelo = $this->loadModel("mdlEmpleados");
				$listartipoIncapacidad = $modelo->consultarTipoIncapacidad();
				$listarEnfermedades = $modelo->consultarEnfermedades();
				$listaraccidentes = $modelo->consultarAccidentes();

				require APP . 'view/_templates/header.php';
		        require APP . 'view/Otro/index.php';
		        require APP . 'view/_templates/footer.php';
		     }
		}


 ?>