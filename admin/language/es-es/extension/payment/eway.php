<?php
// Heading
$_['heading_title'] 		= 'eWAY pago';

// Text
$_['text_extension']		= 'Extensiones';
$_['text_success'] 		= 'Éxito: Ha modificado tus datos eWay!';
$_['text_edit'] 		= 'Editar eWAY';
$_['text_eway']         	= '<a target="_blank" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation'] 	= 'Autorización';
$_['text_sale'] 		= 'Venta';
$_['text_transparent'] 		= 'Redirect (forma de pago en el hotel) Transparente';
$_['text_iframe'] 		= 'IFrame (forma de pago en la ventana)';

// Entry
$_['entry_paymode'] 		= 'Modo de pago';
$_['entry_test'] 		= 'Modo de prueba';
$_['entry_order_status'] 	= 'Estado del pedido';
$_['entry_order_status_refund'] = 'Estado del pedido Reembolsado';
$_['entry_order_status_auth'] 	= 'Autorizado estado de la orden';
$_['entry_order_status_fraud'] 	= 'Estado del pedido sospecha de fraude';
$_['entry_status'] 		= 'Estado';
$_['entry_username'] 		= 'eWAY API Key';
$_['entry_password'] 		= 'eWAY contraseña';
$_['entry_payment_type'] 	= 'Tipo de pago';
$_['entry_geo_zone'] 		= 'Zona Geo';
$_['entry_sort_order'] 		= 'Ordenar Pedido';
$_['entry_transaction_method'] 	= 'Método de transacción';

// Error
$_['error_permission'] 		= 'Advertencia: No tiene permiso para modificar el módulo de pago eWAY';
$_['error_username'] 		= 'eWAY API Key se requiere!';
$_['error_password'] 		= 'Se requiere eWAY contraseña!';
$_['error_payment_type'] 	= 'Se requiere al menos un tipo de pago!' ;

// Help hints
$_['help_testmode'] 		= 'Se establece en Sí para utilizar el eWAY Sandbox.';
$_['help_username'] 		= 'Su eWAY API Key de su cuenta MYeWAY.';
$_['help_password'] 		= 'Su eWAY API contraseña de su cuenta MYeWAY.';
$_['help_transaction_method'] 	= 'La autorización sólo está disponible para los bancos australianos';

// Order page - payment tab
$_['text_payment_info'] 	= 'Información de pago';
$_['text_order_total'] 		= 'total autorizado';
$_['text_transactions'] 	= 'Transacciones';
$_['text_column_transactionid'] = 'eWAY ID de transacción';
$_['text_column_amount'] 	= 'Cantidad';
$_['text_column_type'] 		= 'Tipo';
$_['text_column_created'] 	= 'Creado';
$_['text_total_captured'] 	= 'Total capturado';
$_['text_capture_status'] 	= 'Pago capturado';
$_['text_void_status'] 		= 'Pago anulado';
$_['text_refund_status'] 	= 'El pago reembolsado';
$_['text_total_refunded'] 	= 'Total reembolsado';
$_['text_refund_success'] 	= 'Devolución tuvo éxito!';
$_['text_capture_success'] 	= 'Capture sucedió!';
$_['text_refund_failed'] 	= 'El reembolso no:';
$_['text_capture_failed'] 	= 'Captura ha fallado:';
$_['text_unknown_failure'] 	= 'Para no válido o cantidad';

$_['text_confirm_capture'] 	= '¿Está seguro que desea capturar el pago?';
$_['text_confirm_release'] 	= '¿Está seguro que desea liberar el pago?';
$_['text_confirm_refund'] 	= '¿Está seguro que desea devolver el pago?';

$_['text_empty_refund'] 	= 'Por favor introduzca una cantidad a reembolsar';
$_['text_empty_capture'] 	= 'Por favor, introduzca una cantidad para capturar';

$_['btn_refund'] 		= 'Devolución';
$_['btn_capture'] 		= 'Captura';

// Validation Error codes
$_['text_card_message_V6000'] = 'Error Indefinido validación';
$_['text_card_message_V6001'] = 'No válida IP del Cliente';
$_['text_card_message_V6002'] = 'DeviceID no válido';
$_['text_card_message_V6011'] = 'La cantidad no válida';
$_['text_card_message_V6012'] = 'No válida Factura Descripción';
$_['text_card_message_V6013'] = 'No válido Número de factura';
$_['text_card_message_V6014'] = 'No válido la factura de referencia';
$_['text_card_message_V6015'] = 'No válido Código de moneda';
$_['text_card_message_V6016'] = 'Pago requerido';
$_['text_card_message_V6017'] = 'Moneda de Pago Código Requerido';
$_['text_card_message_V6018'] = 'Unknown pago Moneda Código ';
$_['text_card_message_V6021'] = 'Nombre titular de la tarjeta Obligatorio';
$_['text_card_message_V6022'] = 'Número de Tarjeta Requerido';
$_['text_card_message_V6023'] = 'CVN Obligatorio';
$_['text_card_message_V6031'] = 'Número de tarjeta no válido';
$_['text_card_message_V6032'] = 'CVN no válido';
$_['text_card_message_V6033'] = 'Fecha de caducidad no válido';
$_['text_card_message_V6034'] = 'Edición válido';
$_['text_card_message_V6035'] = 'Fecha de inicio no válida';
$_['text_card_message_V6036'] = 'Mes válido';
$_['text_card_message_V6037'] = 'No válida Año';
$_['text_card_message_V6040'] = 'No válida Token Id del Cliente';
$_['text_card_message_V6041'] = 'Cliente Requerido';
$_['text_card_message_V6042'] = 'Cliente Nombre Obligatorio';
$_['text_card_message_V6043'] = 'Cliente Apellido Obligatorio';
$_['text_card_message_V6044'] = 'Cliente País Código Requerido';
$_['text_card_message_V6045'] = 'Título cliente requerido';
$_['text_card_message_V6046'] = 'Requerido simbólico ID de cliente';
$_['text_card_message_V6047'] = 'RedirectUrl Obligatorio';
$_['text_card_message_V6051'] = 'No válido Nombre';
$_['text_card_message_V6052'] = 'No válido Apellido';
$_['text_card_message_V6053'] = 'No válido Country Code';
$_['text_card_message_V6054'] = 'Correo no válido';
$_['text_card_message_V6055'] = 'Teléfono válido';
$_['text_card_message_V6056'] = 'No válida móvil';
$_['text_card_message_V6057'] = 'Fax válido';
$_['text_card_message_V6058'] = 'Título válido';
$_['text_card_message_V6059'] = 'Redirect URL no válido';
$_['text_card_message_V6060'] = 'Redirect URL no válido';
$_['text_card_message_V6061'] = 'Referencia no válida';
$_['text_card_message_V6062'] = 'No válido Nombre de la empresa';
$_['text_card_message_V6063'] = 'No válido Descripción del trabajo';
$_['text_card_message_V6064'] = 'No válida Street1';
$_['text_card_message_V6065'] = 'No válida Street2';
$_['text_card_message_V6066'] = 'No válida City';
$_['text_card_message_V6067'] = 'Estado no válido';
$_['text_card_message_V6068'] = 'No válido Código Postal';
$_['text_card_message_V6069'] = 'Correo no válido';
$_['text_card_message_V6070'] = 'Teléfono válido';
$_['text_card_message_V6071'] = 'No válida móvil';
$_['text_card_message_V6072'] = 'Comentarios no válidos';
$_['text_card_message_V6073'] = 'Fax válido';
$_['text_card_message_V6074'] = 'No válida Url';
$_['text_card_message_V6075'] = 'No válida Dirección de envío Nombre';
$_['text_card_message_V6076'] = 'No válido Dirección Envío Apellido';
$_['text_card_message_V6077'] = 'No válido Dirección Envío Street1';
$_['text_card_message_V6078'] = 'No válido Dirección Envío Street2';
$_['text_card_message_V6079'] = 'Envío válida Dirección Ciudad';
$_['text_card_message_V6080'] = 'Estado Dirección de envío no válido';
$_['text_card_message_V6081'] = 'Dirección PostalCode envío no válido';
$_['text_card_message_V6082'] = 'Dirección de correo electrónico de envío no válido';
$_['text_card_message_V6083'] = 'Dirección Teléfono del envío no válido';
$_['text_card_message_V6084'] = 'Envío dirección no válida País';
$_['text_card_message_V6091'] = 'Unknown Country Code ';
$_['text_card_message_V6100'] = 'Tarjeta no válida Nombre';
$_['text_card_message_V6101'] = 'No válido de tarjeta de caducidad Mes';
$_['text_card_message_V6102'] = 'No válida Tarjeta Caducidad Año';
$_['text_card_message_V6103'] = 'No válida Tarjeta de inicio Mes';
$_['text_card_message_V6104'] = 'No válida Tarjeta de inicio Año';
$_['text_card_message_V6105'] = 'Edición tarjeta no válida';
$_['text_card_message_V6106'] = 'Tarjeta no válida CVN';
$_['text_card_message_V6107'] = 'AccessCode no válido';
$_['text_card_message_V6108'] = 'CustomerHostAddress no válido';
$_['text_card_message_V6109'] = 'UserAgent no válido';
$_['text_card_message_V6110'] = 'Número de tarjeta no válido';
$_['text_card_message_V6111'] = 'No autorizada de acceso API, cuenta no PCI certificadas';
$_['text_card_message_V6112'] = 'Detalles de tarjetas redundantes que no sean años de vencimiento y meses';
$_['text_card_message_V6113'] = 'Transacción no válida para el reembolso';
$_['text_card_message_V6114'] = 'Error de validación de puerta de enlace';
$_['text_card_message_V6115'] = 'No válida DirectRefundRequest, identificación de la transacción';
$_['text_card_message_V6116'] = 'Datos de la tarjeta no válidos en TransactionID original';
$_['text_card_message_V6124'] = 'Elementos de línea no válidos. Las partidas se han proporcionado embargo los totales no coinciden con el ámbito TotalAmount';
$_['text_card_message_V6125'] = 'No Seleccionado Tipo de pago habilitada';
$_['text_card_message_V6126'] = 'Número de tarjeta de cifrado no válida, el descifrado no';
$_['text_card_message_V6127'] = 'cvn cifrado no válida, el descifrado no';
$_['text_card_message_V6128'] = 'Método no válido para el tipo de pago';
$_['text_card_message_V6129'] = 'La transacción no ha sido autorizada para la captura / Cancelación';
$_['text_card_message_V6130'] = 'Error de la información del cliente genérico';
$_['text_card_message_V6131'] = 'Error de información de envío Genérico';
$_['text_card_message_V6132'] = 'Transacción ya se ha completado o anulado, operación no permitida';
$_['text_card_message_V6133'] = 'Checkout no está disponible para el tipo de pago';
$_['text_card_message_V6134'] = 'No válida de Auth ID de transacción para la captura / Void';
$_['text_card_message_V6135'] = 'PayPal Reembolso Procesamiento de error';
$_['text_card_message_V6140'] = 'Cuenta de comerciante se suspende';
$_['text_card_message_V6141'] = 'Detalles válidos cuenta de PayPal o firma de API';
$_['text_card_message_V6142'] = 'Autorizar no está disponible para Banco / Sucursal';
$_['text_card_message_V6150'] = 'Cantidad del reembolso no válido';
$_['text_card_message_V6151'] = 'La cantidad del reembolso mayor de transacción original';
$_['text_card_message_D4406'] = 'Error desconocido';
$_['text_card_message_S5010'] = 'Error desconocido';
