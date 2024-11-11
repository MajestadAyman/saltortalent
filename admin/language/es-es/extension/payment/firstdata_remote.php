<?php
// Heading
$_['heading_title']		= 'First Data EMEA Web Service API';

// Text
$_['text_firstdata_remote']	= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']		= 'Extensiones';
$_['text_success']		= 'Enhorabuena: Ha modificado First Data EMEA Web Service API.';
$_['text_edit']                 = 'Editar First Data EMEA Web Service API';
$_['text_card_type']		= 'Tipo de tarjeta';
$_['text_enabled']		= 'Activado';
$_['text_merchant_id']		= 'ID de la tienda';
$_['text_subaccount']		= 'Subcuenta';
$_['text_user_id']		= 'ID de usuario';
$_['text_capture_ok']		= 'La captura tuvo éxito';
$_['text_capture_ok_order']	= 'Captura tuvo éxito, el estado del pedido actualiza para el éxito - se instaló';
$_['text_refund_ok']		= 'Reembolso se ha realizado correctamente';
$_['text_refund_ok_order']	= 'Reembolso se ha realizado correctamente, el estado del pedido actualiza para reembolsado';
$_['text_void_ok']		= 'Nulo tuvo éxito, el estado del pedido actualiza para anulado';
$_['text_settle_auto']		= 'Venta';
$_['text_settle_delayed']	= 'Pre auth';
$_['text_mastercard']		= 'Mastercard';
$_['text_visa']			= 'Visa';
$_['text_diners']		= 'Diners';
$_['text_amex']			= 'American Express';
$_['text_maestro']		= 'Maestro';
$_['text_payment_info']		= 'Información sobre el pago';
$_['text_capture_status']	= 'Pago capturado';
$_['text_void_status']		= 'Pago anulado';
$_['text_refund_status']		= 'Pago reembolsado';
$_['text_order_ref']			= 'Ref. pedido';
$_['text_order_total']			= 'Total autorizado';
$_['text_total_captured']		= 'Total capturado';
$_['text_transactions']			= 'Transacciones';
$_['text_column_amount']		= 'Importe';
$_['text_column_type']			= 'Tipo';
$_['text_column_date_added']		= 'Fecha en que se agregó';
$_['text_confirm_void']			= '¿Seguro que desea anular el pago?';
$_['text_confirm_capture']		= '¿Seguro que desea capturar el pago?';
$_['text_confirm_refund']		= '¿Seguro que deseas reintegrar el pago?';

// Entry
$_['entry_certificate_path']		= 'Ruta del certificado';
$_['entry_certificate_key_path']	= 'Ruta de la clave privada';
$_['entry_certificate_key_pw']		= 'Contraseña de clave privada';
$_['entry_certificate_ca_path']		= 'CA path';
$_['entry_merchant_id']			= 'ID de la tienda';
$_['entry_user_id']			= 'ID de usuario';
$_['entry_password']			= 'Contraseña';
$_['entry_total']			= 'Total';
$_['entry_sort_order']		= 'Orden de aparición';
$_['entry_geo_zone']				= 'Geo zone';
$_['entry_status']		= 'Estado';
$_['entry_debug']		= 'Registro de depuración';
$_['entry_auto_settle']		= 'Tipo de Solución';
$_['entry_status_success_settled']	= 'Éxito - Cerrada';
$_['entry_status_success_unsettled'] = 'Éxito - no resuelta';
$_['entry_status_decline']	= 'Declinación';
$_['entry_status_void']		= 'Anulado';
$_['entry_status_refund']	= 'Devuelto';
$_['entry_enable_card_store']	= 'Habilitar tokens de almacenamiento tarjeta';
$_['entry_cards_accepted']	= 'Tipos de tarjetas aceptadas';

// Help
$_['help_total']		= 'El Total que el pedido debe alcanzar antes de que este método de pago se active.';
$_['help_certificate']		= 'Los certificados y las claves privadas deben almacenarse fuera de sus carpetas web públicas';
$_['help_card_select']		= 'Pida al usuario que elija el tipo de tarjeta';
$_['help_notification']		= 'Deberá proporcionar este URL para First Data para obtener notificaciones de pago';
$_['help_debug']		= 'Depuración Habilitar escribirá los datos sensibles a un archivo de registro. Usted debe desactivar siempre a menos que se indique lo contrario';
$_['help_settle']		= 'Si utiliza pre-auth debe completar una acción posterior a la autenticación dentro de 3-5 días de lo contrario su transacción será dado de baja';

// Tab
$_['tab_account']		= 'API info';
$_['tab_order_status']		= 'Estado del pedido';
$_['tab_payment']		= 'Configuración del pago';

// Button
$_['button_capture']		= 'Captura';
$_['button_refund']		= 'Reembolso';
$_['button_void']		= 'Nulo';

// Error
$_['error_merchant_id']		= 'Se requiere ID tienda';
$_['error_user_id']		= 'Se requiere ID de usuario';
$_['error_password']		= 'Se requiere una contraseña';
$_['error_certificate']		= 'Se requiere ruta del certificado';
$_['error_key']			= 'Se necesita una clave de Certificado';
$_['error_key_pw']		= 'Se requiere Certificado contraseña de clave';
$_['error_ca']			= 'Autoridad de certificación (CA) se requiere';
