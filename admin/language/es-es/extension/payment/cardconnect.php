<?php
// Heading
$_['heading_title']             = 'CardConnect';

// Tab
$_['tab_settings'] 		= 'Configuración';
$_['tab_order_status'] 		= 'Estado del pedido';

// Text
$_['text_extension'] 		= 'Extensiones';
$_['text_success'] 		= 'Éxito: Ha modificado módulo de pago CardConnect';
$_['text_edit'] 		= 'Editar CardConnect';
$_['text_cardconnect']          = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']              = 'Pago';
$_['text_authorize'] 		= 'Autorizar';
$_['text_live'] 		= 'Live';
$_['text_test'] 		= 'Prueba';
$_['text_no_cron_time']		= 'El cron aún no se ha ejecutado';
$_['text_payment_info'] 	= 'Información de pago';
$_['text_payment_method'] 	= 'Forma de pago';
$_['text_card'] 		= 'Tarjeta';
$_['text_echeck'] 		= 'Cheque electrónico';
$_['text_reference'] 		= 'Referencia';
$_['text_update'] 		= 'Actualizar';
$_['text_order_total'] 		= 'Total pedido';
$_['text_total_captured'] 	= 'Total Capturado';
$_['text_capture_payment'] 	= 'Captura de Pago';
$_['text_refund_payment'] 	= 'Reembolso Pago';
$_['text_void'] 		= 'Vacío';
$_['text_transactions'] 	= 'Transacciones';
$_['text_column_type'] 		= 'Tipo';
$_['text_column_reference'] 	= 'Referencia';
$_['text_column_amount'] 	= 'Cantidad';
$_['text_column_status'] 	= 'Estado';
$_['text_column_date_modified'] = 'Fecha de modificación';
$_['text_column_date_added'] 	= 'Fecha Alta';
$_['text_column_update'] 	= 'Actualizar';
$_['text_column_void'] 		= 'Vacío';
$_['text_confirm_capture'] 	= '¿Está seguro que desea capturar el pago?';
$_['text_confirm_refund'] 	= '¿Está seguro que desea reintegrar el pago?';
$_['text_inquire_success'] 	= 'Preguntar fue exitosa';
$_['text_capture_success'] 	= 'La solicitud de captura se ha realizado correctamente';
$_['text_refund_success'] 	= 'La solicitud de reembolso se ha realizado correctamente';
$_['text_void_success'] 	= 'Void solicitud fue exitosa';

// Entry
$_['entry_merchant_id'] 	= 'ID del comerciante';
$_['entry_api_username'] 	= 'API nombre de usuario';
$_['entry_api_password'] 	= 'API contraseña';
$_['entry_token'] 		= 'Token secreto';
$_['entry_transaction'] 	= 'Transacción';
$_['entry_environment'] 	= 'Entorno';
$_['entry_site'] 		= 'Sitio';
$_['entry_store_cards'] 	= 'Tarjetas de la tienda';
$_['entry_echeck'] 		= 'Cheque electrónico';
$_['entry_total'] 		= 'Total';
$_['entry_geo_zone'] 		= 'Zona Geo';
$_['entry_status'] 		= 'Estado';
$_['entry_logging'] 		= 'Registro de depuración';
$_['entry_sort_order'] 		= 'Pedido';
$_['entry_cron_url'] 		= 'Cron URL de trabajo';
$_['entry_cron_time'] 		= 'Cron trabajo Última ejecución';
$_['entry_order_status_pending'] = 'Pendiente';
$_['entry_order_status_processing'] = 'Procesando';

// Help
$_['help_merchant_id'] 		= 'Su CardConnect personal cuenta de vendedor ID.';
$_['help_api_username'] 	= 'Su nombre de usuario para acceder a la API CardConnect.';
$_['help_api_password'] 	= 'Su contraseña para acceder a la API CardConnect.';
$_['help_token'] 		= 'Introduzca un testigo aleatorio para la seguridad o utilizar el generado';
$_['help_transaction'] 		= 'Seleccione \' Pago \' para capturar el pago inmediato o \' Autorizar \'para que lo apruebe.';
$_['help_site'] 		= 'Esto determina la primera parte de la URL de la API. Sólo cambiar si se le ordena. ';
$_['help_store_cards'] 		= 'Si desea almacenar tarjetas usando tokenización.';
$_['help_echeck'] 		= 'Si usted quiere ofrecer la posibilidad de pagar con un cheque electrónico.';
$_['help_total'] 		= 'El total de la orden de pago y envío debe llegar antes de que esta forma de pago se activa. Debe ser un valor sin signo de moneda. ';
$_['help_logging'] 		= 'Habilitar depuración va a escribir los datos sensibles a un archivo de registro. Siempre se debe desactivar a menos que se indique lo contrario. ';
$_['help_cron_url'] 		= 'Establecer una tarea programada para llamar a esta URL para que las órdenes son de auto-actualización. Está diseñado para ser corrió un par de horas después de la última captura de un día hábil. ';
$_['help_cron_time'] 		= 'Esta es la última vez que la URL de trabajo cron fue ejecutado.';
$_['help_order_status_pending'] = 'El estado de la orden cuando la orden tiene que ser autorizada por el comerciante';
$_['help_order_status_processing'] = 'El estado de la orden cuando la orden es capturada automáticamente';

// Button
$_['button_inquire_all'] 	= 'Investigar todos';
$_['button_capture'] 		= 'Captura';
$_['button_refund'] 		= 'Reembolso';
$_['button_void_all'] 		= 'Void Todos';
$_['button_inquire'] 		= 'Preguntar';
$_['button_void'] 		= 'Vacío';

// Error
$_['error_permission'] 		= 'Advertencia: Usted no tiene permiso para modificar CardConnect pago';
$_['error_merchant_id'] 	= 'ID del comerciante requerida!';
$_['error_api_username'] 	= 'Nombre de usuario API requerida!';
$_['error_api_password'] 	= 'API contraseña requerida!';
$_['error_token'] 		= 'Secreto de emergencia requerido!';
$_['error_site'] 		= 'Sitio Requerido!';
$_['error_amount_zero'] 	= 'La cantidad debe ser mayor que cero!';
$_['error_no_order'] 		= 'No hay información de orden a juego!';
$_['error_invalid_response'] 	= 'Respuesta no válida recibida!';
$_['error_data_missing'] 	= 'Los datos que faltaban!';
$_['error_not_enabled'] 	= 'El módulo no está activado!';
