<?php
// Text
$_['text_new_card']                     = '+ Agregar nueva tarjeta';
$_['text_loading']                      = 'Cargando ... Espera ...';
$_['text_card_details']                 = 'Detalles de la tarjeta';
$_['text_saved_card']                   = 'Usar tarjeta guardada:';
$_['text_card_ends_in']                 = 'Pagar con la tarjeta %s existente que termina en XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Número de tarjeta:';
$_['text_card_expiry']                  = 'Vencimiento de la tarjeta (MM/YY):';
$_['text_card_cvc']                     = 'Código de seguridad de la tarjeta (CVC):';
$_['text_card_zip']                     = 'Código postal de la tarjeta:';
$_['text_card_save']                    = '¿Guardar tarjeta para uso futuro?';
$_['text_trial']                        = '%s cada %s %s para %s pagos entonces';
$_['text_recurring']                    = '%s cada %s %s';
$_['text_length']                       = ' para pagos de %s';
$_['text_cron_subject']                 = 'Resumen de trabajo de Square CRON';
$_['text_cron_message']                 = 'Aquí hay una lista de todas las tareas CRON realizadas por su extensión Square:';
$_['text_squareup_profile_suspended']   = 'Tus pagos recurrentes han sido suspendidos. Por favor, póngase en contacto con nosotros para más detalles.';
$_['text_squareup_trial_expired']       = 'Tu período de prueba ha caducado.';
$_['text_squareup_recurring_expired']   = 'Tus pagos recurrentes han caducado. Este fue tu último pago.';
$_['text_cron_summary_token_heading']   = 'Actualizar token de acceso:';
$_['text_cron_summary_token_updated']   = '¡Token de acceso actualizado correctamente!';
$_['text_cron_summary_error_heading']   = 'Errores de transacción:';
$_['text_cron_summary_fail_heading']    = 'Transacciones fallidas (perfiles suspendidos):';
$_['text_cron_summary_success_heading'] = 'Transacciones correctas:';
$_['text_cron_fail_charge']             = 'No se pudo cargar el perfil <strong> #%s </strong> con <strong>%s </strong>';
$_['text_cron_success_charge']          = 'El perfil <strong> #%s </strong> fue acusado de <strong>%s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Tarjeta de crédito / débito';
$_['text_token_issue_customer_error']   = 'Estamos experimentando una interrupción técnica en nuestro sistema de pago. Por favor, inténtalo de nuevo más tarde.';
$_['text_token_revoked_subject']        = '¡Tu token de acceso Square ha sido revocado!';
$_['text_token_revoked_message']        = "El acceso de la extensión de pago de Square a tu cuenta de Square se ha revocado a través del Panel de Datos de Square. Debes verificar las credenciales de tu aplicación en la configuración de la extensión y volver a conectarte.";
$_['text_token_expired_subject']        = '¡Tu token de acceso Square ha caducado!';
$_['text_token_expired_message']        = "El token de acceso de la extensión de pago de Square que lo conecta a tu cuenta de Square ha caducado. Debes verificar las credenciales de su aplicación y el trabajo de CRON en la configuración de la extensión y conectarte nuevamente.";

// Error
$_['error_browser_not_supported']       = 'Error: ¡El sistema de pago ya no es compatible con tu navegador web. Actualiza o usa uno diferente.!';
$_['error_card_invalid']                = 'Error: ¡La tarjeta no es válida.!';
$_['error_squareup_cron_token']         = 'Error: ¡No se pudo actualizar el token de acceso. Conecta tu extensión de Square Payment a través del panel de administración de OpenCart.!';

// Warning
$_['warning_test_mode']                 = 'Advertencia: ¡el modo Sandbox está habilitado! Las transacciones parecerán llevarse a cabo, pero no se realizarán cargos.!';

// Statuses
$_['squareup_status_comment_authorized']    = 'La transacción de la tarjeta se ha autorizado pero aún no se ha registrado.';
$_['squareup_status_comment_captured']      = 'La transacción de la tarjeta fue autorizada y posteriormente registrada (es decir, completada).';
$_['squareup_status_comment_voided']        = 'La transacción de la tarjeta fue autorizada y posteriormente anulada (es decir, cancelada). ';
$_['squareup_status_comment_failed']        = 'La transacción de la tarjeta falló';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'El país de la dirección de pago no es válido. Modifícalo e intenta de nuevo. ';
$_['squareup_override_error_shipping_address.country']      = 'La dirección de envío del país no es válida. Modifícalo e intenta de nuevo. ';
$_['squareup_override_error_email_address']                 = 'La dirección de correo electrónico de su cliente no es válida. Modifícalo e intenta de nuevo. ';
$_['squareup_override_error_phone_number']                  = 'Tu número de teléfono del cliente no es válido. Modifícalo e intenta de nuevo. ';
$_['squareup_error_field']                                  = ' Campo: %s';