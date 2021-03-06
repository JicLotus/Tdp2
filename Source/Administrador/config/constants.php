<?php
//file : app/config/constants.php

return [
    'TABLA_PRODUCTOS' => 'productos',
    'TABLA_PRODUCTOS_ID' => 'id',
    'TABLA_PRODUCTOS_NOMBRE' => 'nombre',
    'TABLA_PRODUCTOS_CODIGO' => 'codigo',
    'TABLA_PRODUCTOS_CARACTERISTICAS' => 'caracteristicas',
    'TABLA_PRODUCTOS_IMAGEN' => 'imagen',
    'TABLA_PRODUCTOS_STOCK' => 'stock',
    'TABLA_PRODUCTOS_MARCA' => 'marca',
    'TABLA_PRODUCTOS_ESTADO' => 'estado',
    'TABLA_PRODUCTOS_CATEGORIA' => 'categoria',
    'TABLA_PRODUCTOS_PRECIO' => 'precio',    
	
	'TABLA_NOTIFICACIONES' => 'notificaciones',
	'TABLA_NOTIFICACIONES_TIPO' => 'tipo_notificacion',
	'TABLA_NOTIFICACIONES_VALOR' => 'valor',
	'TABLA_NOTIFICACIONES_PORCENTAJE' => 'porcentaje',
	'TABLA_NOTIFICACIONES_VENDEDOR' => 'id_usuario',
	'TIPO_NOTIFICACION_AGENDA' => 'AGENDA',
	'TIPO_NOTIFICACION_CANTIDAD' => 'CANTIDAD',
	'TIPO_NOTIFICACION_MARCA' => 'MARCA',
	'TIPO_NOTIFICACION_CATEGORIA' => 'CATEGORIA',
	
	'TABLA_ESTADISTICAS' => 'estadisticas',
	'ESTADISTICAS_VISITADOS_HOY' => 'visitados_hoy',
	'ESTADISTICAS_ID' => 'id',
	'ESTADISTICAS_ID_VENDEDOR' => 'id_usuario',
	'ESTADISTICAS_A_VISITAR' => 'a_visitar',
	'ESTADISTICAS_VISITADOS_FUERA_RUTA' => 'fuera_ruta',
	'ESTADISTICAS_VENDIDO_FUERA_RUTA' => 'vendido_fuera_ruta',
	'ESTADISTICAS_VENDIDO_CLIENTES_DIA' => 'vendido_clientes',
	'ESTADISTICAS_DIA' => 'dia',
		
    'TABLA_CLIENTES' => 'clientes',
    'TABLA_CLIENTES_ID' => 'id',
    'TABLA_CLIENTES_NOMBRE' => 'nombre',
    'TABLA_CLIENTES_EMAIL' => 'email',
    'TABLA_CLIENTES_DIRECCION' => 'direccion',
    'TABLA_CLIENTES_RAZON_SOCIAL' => 'razon_social',
    'TABLA_CLIENTES_TELEFONO_1' => 'telefono_movil',
    'TABLA_CLIENTES_TELEFONO_2' => 'telefono_laboral',
    
    'TABLA_USUARIOS' => 'usuarios',
    'TABLA_USUARIOS_ID' => 'id',
    'TABLA_USUARIOS_NOMBRE' => 'nombre',
    'TABLA_USUARIOS_EMAIL' => 'email',
    'TABLA_USUARIOS_PASSWORD' => 'password',
    'TABLA_USUARIOS_PRIVILEGIO' => 'privilegio',
    'TABLA_USUARIOS_TELEFONO' => 'telefono',
        
    'TABLA_AGENDAS' => 'agendas',
    'TABLA_AGENDAS_ID' => 'id',
    'TABLA_AGENDAS_FECHA' => 'fecha',
    'TABLA_AGENDAS_ORDEN' => 'orden',
    'TABLA_AGENDAS_DIA' => 'dia',
    
    'TABLA_PEDIDOS' => 'pedidos',
    'TABLA_COMPRAS' => 'compras',
    'TABLA_PEDIDOS_ID' => 'id',
	'TABLA_PEDIDOS_ID_COMPRA' => 'id_compra',
	'TABLA_COMPRAS_ID_COMPRA' => 'id_compra',
	'TABLA_COMPRAS_ESTADO' => 'estado',
    
    'ESTADO_VISITA_VISITADO' => 'Visitado',
    'ESTADO_VISITA_PENDIENTE' => 'Pendiente',
    'ESTADO_VISITA_NOVISITADO' => 'No Visitado'
    
    

];
