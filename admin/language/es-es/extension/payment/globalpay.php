<?php
// Heading
$_['heading_title']		= 'Globalpay Redirect';

// Text
$_['text_extension']		= 'Extensiones';
$_['text_success']		= 'Enhorabuena: Ha modificado el módulo Globalpay!';
$_['text_edit']                 = 'Editar Globalpay Redirect';
$_['text_live']			= 'En Vivo';
$_['text_demo']			= 'Demo';
$_['text_card_type'] 		= 'Tipo de tarjeta'; 
$_['text_enabled'] 		= 'Activado'; 
$_['text_use_default'] 		= 'Use por defecto'; 
$_['text_merchant_id'] 		= 'ID Comercio'; 
$_['text_subaccount'] 		= 'Subcuenta'; 
$_['text_secret'] 		= 'Secreto compartido'; 
$_['text_card_visa']		= 'Visa';
$_['text_card_master']		= 'Mastercard';
$_['text_card_amex']		= 'American Express';
$_['text_card_switch']		= 'Switch/Maestro';
$_['text_card_laser']		= 'Laser';
$_['text_card_diners']		= 'Diners';
$_['text_capture_ok'] 		= 'Captura tuvo éxito'; 
$_['text_capture_ok_order'] 	= 'Captura se ha realizado correctamente, el estado del pedido actualiza al éxito - Cerrada'; 
$_['text_rebate_ok']		= 'Descuento correcto';
$_['text_rebate_ok_order'] 	= 'Descuento se ha realizado correctamente, el estado del pedido actualiza para rebajes'; 
$_['text_void_ok']		= 'Correcto, el estado del pedido se actualizo como anulado';
$_['text_settle_auto']		= 'Auto';
$_['text_settle_delayed'] 	= 'Retrasado'; 
$_['text_settle_multi']		= 'Multi';
$_['text_url_message'] 		= 'Debe proporcionar la URL del almacén a su ejecutivo de cuenta Globalpay antes de ir en vivo'; 
$_['text_payment_info'] 	= 'Información de pago'; 
$_['text_capture_status'] 	= 'Pago capturado'; 
$_['text_void_status'] 		= 'Pago anulado'; 
$_['text_rebate_status'] 	= 'Pago rebajado'; 
$_['text_order_ref'] 		= 'Orden ref'; 
$_['text_order_total'] 		= 'Total autorizado'; 
$_['text_total_captured'] 	= 'Total capturado'; 
$_['text_transactions'] 	= 'Operaciones'; 
$_['text_column_amount'] 	= 'Cantidad'; 
$_['text_column_type'] 		= 'Tipo'; 
$_['text_column_date_added'] 	= 'Creado'; 
$_['text_confirm_void'] 	= '¿Está seguro que desea anular el pago?'; 
$_['text_confirm_capture'] 	= '¿Está seguro que desea capturar el pago?'; 
$_['text_confirm_rebate']	= '¿Está seguro que desea descontar el pago?';
$_['text_globalpay']            = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id'] 	= 'ID Comercio'; 
$_['entry_secret'] 		= 'secreto compartido'; 
$_['entry_rebate_password']	= 'Rebate password';
$_['entry_total'] 		= 'Total'; 
$_['entry_sort_order'] 		= 'Orden de aparición'; 
$_['entry_geo_zone']		= 'Geo zone';
$_['entry_status'] 		= 'Estado'; 
$_['entry_debug'] 		= 'El registro de depuración'; 
$_['entry_live_demo'] 		= 'Live / Demo'; 
$_['entry_auto_settle'] 	= 'Tipo de liquidación'; 
$_['entry_card_select'] 	= 'Seleccione la tarjeta'; 
$_['entry_tss_check'] 		= 'TSS comprueba'; 
$_['entry_live_url'] 		= 'URL de conexión en vivo'; 
$_['entry_demo_url'] 		= 'URL de conexión Demo'; 
$_['entry_status_success_settled']	= 'Èxito - resuelto';
$_['entry_status_success_unsettled'] 	= 'Éxito - no resuelto'; 
$_['entry_status_decline'] 		= 'Nula'; 
$_['entry_status_decline_pending'] 	= 'Nula - offline auth'; 
$_['entry_status_decline_stolen'] 	= 'Nula - tarjeta perdida o robada'; 
$_['entry_status_decline_bank'] 	= 'Nula - error del banco'; 
$_['entry_status_void'] 		= 'Anulado'; 
$_['entry_status_rebate'] 		= 'Descontado'; 
$_['entry_notification_url']		= 'Notificación URL';

// Help
$_['help_total'] 		= 'El total que el pedido debe alcanzar antes de que este método de pago se convierta en activo'; 
$_['help_card_select'] 		= 'Preguntar al usuario elegir su tipo de tarjeta antes de que se redirijan'; 
$_['help_notification'] 	= 'Debe proporcionar este URL para Globalpay recibir notificaciones de pago'; 
$_['help_debug'] 		= 'Habilitar depuración escribirá los datos sensibles a un archivo de registro. Siempre debe desactivar menos que se indique lo contrario'; 
$_['help_dcc_settle'] 		= 'Si su subcuenta es DCC habilitado debe utilizar Autosettle'; 

// Tab
$_['tab_api']			= 'Información API';
$_['tab_account']		= 'Cuentas';
$_['tab_order_status'] 		= 'Estado del pedido'; 
$_['tab_payment'] 		= 'Configuración del pago'; 
$_['tab_advanced'] 		= 'Avanzado'; 

// Button
$_['button_capture']		= 'Captura';
$_['button_rebate']		= 'Descuento / reembolso';
$_['button_void'] 		= 'Vacío'; 

// Error
$_['error_merchant_id'] 	= 'Se requiere ID de comercio'; 
$_['error_secret'] 		= 'Se requiere secreto compartido'; 
$_['error_live_url'] 		= 'Se requiere URL Live'; 
$_['error_demo_url'] 		= 'Se requiere demostración URL'; 
$_['error_data_missing'] 	= 'Faltan datos'; 
$_['error_use_select_card'] 	= 'Debe tener "Seleccione tarjeta" habilitada para el enrutamiento subcuenta por tipo de tarjeta para trabajar';
