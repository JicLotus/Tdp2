<?php
	$con = mysql_connect("localhost", "root","123456") or die("Sin conexion");
	mysql_query("SET NAMES 'utf8'");
	mysql_select_db("orderTracker");

	$vendedor = $_REQUEST['id'];

	$fecha  = $_REQUEST['fecha'];

	$dt = new DateTime();
		
	// set object to Monday
	$dt->setISODate($dt->format('o'), $dt->format('W'));

	// get all 1day periods from Monday to Friday
	$periods = new DatePeriod($dt, new DateInterval('P1D'), 4);
		
	$days = iterator_to_array($periods);
	// convert DatePeriod object to array
	$lunes = "'".$days[0]->format ('Y-m-d')."'";
	$viernes = "'".$days[4]->format ('Y-m-d')."'";	
	
	
	$sql= "(select agendas.id as id_agenda, clientes.id, clientes.nombre, clientes.direccion, clientes.razon_social, clientes.telefono_movil, 
	clientes.telefono_laboral, clientes.email, agendas.fecha, agendas.estado_visita 
	from clientes, agendas 
	where clientes.id = agendas.id_cliente and agendas.id_usuario = $vendedor";
	
	
	if ($fecha){
		
		 //Lo hago asi, porq mysql responde mas rapido a este tipo de consulta, la alternativa es mandar DATE(fecha) asi de una 
		 $sql.= " and agendas.dia="."'".$fecha."'"." and date_format(agendas.fecha, '%Y-%m-%d') between ".$lunes." and ".$viernes." order by agendas.orden asc";
	}		
		
		
	$sql.= ")";
	

	$rs = mysql_query($sql,$con);
	
	while($row=mysql_fetch_object($rs)){
		$datos[] = $row;
	}

	

	echo json_encode($datos);
?>
