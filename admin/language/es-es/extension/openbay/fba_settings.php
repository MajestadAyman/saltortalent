<?php
// Headings
$_['heading_title']        		= 'Configuración';
$_['text_openbay'] 			= 'OpenBay Pro';
$_['text_fba'] 				= 'El cumplimiento por parte de Amazon';

// Text
$_['text_success'] 			= 'La configuración se han guardado';
$_['text_status'] 			= 'Estado';
$_['text_account_ok'] 			= 'Conexión al cumplimiento por parte de Amazon OK';
$_['text_api_ok'] 			= 'Conexión API OK';
$_['text_api_status'] 			= 'Conexión API';
$_['text_edit'] 			= 'Editar Cumplimiento por la configuración de Amazon';
$_['text_standard'] 			= 'Estándar';
$_['text_expedited'] 			= 'Acelerada';
$_['text_priority'] 			= 'Prioridad';
$_['text_fillorkill'] 			= 'Rellene o Acabe';
$_['text_fillall'] 			= 'Rellene todos';
$_['text_fillallavailable'] 		= 'Rellene Todo disponible';
$_['text_prefix_warning'] 		= 'No cambiar este ajuste después de que los pediods se han enviado a Amazon, sólo se establece esto cuando se instala por primera vez.';
$_['text_disabled_cancel'] 		= 'Desactivado - no cancele automáticamente cumplimientos';
$_['text_validate_success'] 		= 'Los detalles de su API funcionan correctamente! Debe pulsar Guardar para asegurarse que los ajustes se guardan. ';
$_['text_register_banner'] 		= 'Haga clic aquí si necesita registrarse para una cuenta nueva';

// Entry
$_['entry_api_key'] 			= 'Clave de API';
$_['entry_encryption_key']     = 'Clave de encriptación 1';
$_['entry_encryption_iv']      = 'Clave de encriptación 2';
$_['entry_account_id'] 			= 'ID de cuenta';
$_['entry_send_orders'] 		= 'Enviar pediods de forma automática';
$_['entry_fulfill_policy'] 		= 'Política de Cumplimiento';
$_['entry_shipping_speed'] 		= 'Por defecto velocidad de envío';
$_['entry_debug_log'] 			= 'Habilitar el registro de depuración';
$_['entry_new_order_status'] 		= 'Nueva entrada de cumplimiento';
$_['entry_order_id_prefix'] 		= 'Orden ID prefijo';
$_['entry_only_fill_complete'] 		= 'Todos los artículos deben ser FBA';

// Help
$_['help_api_key'] 		= 'Esta es tu clave de API, obtener esto desde su área Pro cuenta OpenBay';
$_['help_encryption_key']      = 'Esta es su clave de cifrado #1, obtenga esto desde su área de cuenta de OpenBay Pro';
$_['help_encryption_iv']       = 'Esta es su clave de cifrado #2, obtenga esto desde su área de cuenta de OpenBay Pro';
$_['help_account_id'] 		= 'Este es el ID de cuenta que coincide con la cuenta de Amazon registrado para OpenBay Pro, obtener esto desde su área Pro cuenta OpenBay';
$_['help_send_orders'] 		= 'Los pedidos que contengan cumplimiento a juego por productos de Amazon será envía a Amazon de forma automática';
$_['help_fulfill_policy'] 	= 'La política de cumplimiento por defecto (FillAll -. Todos los artículos fulfillable en el orden cumplimiento se envían el pedido de cumplimiento permanece en un estado de proceso hasta que todos los artículos se envían ya sea por Amazon o cancelados por el vendedor FillAllAvailable. - Todos los artículos fulfillable en el orden cumplimiento se envían todos los artículos irrealizables en el orden son cancelados por Amazon.FillOrKill -. Si un artículo en una orden de cumplimiento se determina que es irrealizable antes de cualquier envío de los pedidos se mueve al estado Pendiente (el proceso de recoger unidades del inventario ha comenzado), a continuación, toda la orden se considera irrealizable. Sin embargo, si un elemento en un pedido de cumplimiento se determina que es irrealizable después de un envío en la Orden se mueve al estado Pendiente, cancela Amazonas como gran parte de la orden de cumplimiento como sea posible.)';
$_['help_shipping_speed'] 	= 'Esta es la categoría de velocidad de envío por defecto a aplicar a los nuevos pedidos, los diferentes niveles de servicio pueden incurr diferentes costos';
$_['help_debug_log'] 		= 'Los registros de depuración registrarán información a un archivo de registro acerca de las acciones del módulo hace. Esto se debe dejar habilitado para ayudar a encontrar la causa de cualquier problema. ';
$_['help_new_order_status'] 	= 'Este es el estado de los pedidos, lo que disparará el orden que se creará para el cumplimiento. Asegúrese de que esto es usar un estatus sólo después de haber recibido el pago. ';
$_['help_order_id_prefix'] 	= 'Tener un prefijo para ayudará a identificar las órdenes que han venido de su tienda no de otras integraciones. Esto es muy útil cuando los comerciantes venden en muchos mercados y utilizan FBA ';
$_['help_only_fill_complete'] 	= 'Esto sólo permitirá a las órdenes que se envíen para su realización si todos los elementos de la orden se hacen coincidir con un cumplimiento por partida Amazon. Si algún artículo no es entonces todo el orden permanecerá sin cubrir'.

// Error
$_['error_api_connect'] 	= 'No se pudo conectar a la API';
$_['error_account_info'] 	= 'No se puede verificar la conexión API para Cumplimiento por Amazon';
$_['error_api_key'] 		= 'La clave de API no es válida';
$_['error_api_account_id'] 	= 'El número de cuenta no es válido';
$_['error_encryption_key']     = 'La clave de encriptación 1 es invalida';
$_['error_encryption_iv']      = 'La clave de encriptación 2 es invalida';
$_['error_validation'] 		= 'Hubo un error validando sus datos';

// Tabs
$_['tab_api_info'] 		= 'Dtalles de la API';

// Buttons
$_['button_verify'] 		= 'Compruebe detalles';
