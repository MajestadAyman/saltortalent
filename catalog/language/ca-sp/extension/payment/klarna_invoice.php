<?php
// Text
$_['text_title'] 		= 'Klarna Invoice - Pago dentro de 14 días';
$_['text_terms_fee'] 		= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee'] 	= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional'] 		= 'Klarna Factura requiere alguna información adicional antes de poder procesar tu pedido.';
$_['text_male'] 		= 'Masculino';
$_['text_female'] 		= 'Femenino';
$_['text_year'] 		= 'Año';
$_['text_month'] 		= 'Mes';
$_['text_day'] 			= 'Dia';
$_['text_comment'] 		= 'Klarna Invoice ID: %s' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender'] 		= 'Género';
$_['entry_pno'] 		= 'Número personal';
$_['entry_dob'] 		= 'Fecha de nacimiento';
$_['entry_phone_no'] 		= 'Número de teléfono';
$_['entry_street'] 		= 'Dirección';
$_['entry_house_no'] 		= 'Nº de casa.';
$_['entry_house_ext'] 		= 'Casa Ext.';
$_['entry_company'] 		= 'Número de registro';

// Help
$_['help_pno'] 			= 'Por favor, introduce tu número de Seguro Social aquí.';
$_['help_phone_no'] 		= 'Por favor, introduce tu número de teléfono.';
$_['help_street'] 		= 'Ten en cuenta que la entrega sólo puede tener lugar a la dirección registrada al pagar con Klarna.';
$_['help_house_no'] 		= 'Por favor, introduce tu número de casa.';
$_['help_house_ext'] 		= 'Por favor, introduce tu extensión casa. Por ejemplo, A, B, C, Rojo, Azul ect.';
$_['help_company'] 		= 'Por favor, introduce tu número de registro.';

// Error
$_['error_deu_terms'] 		= 'Debe aceptar la política de privacidad Klarna.';
$_['error_address_match'] 	= 'Las direcciones de facturación y envío deben coincidir si deseas utilizar Klarna Factura';
$_['error_network'] 		= 'Se produjo un error al conectar con Klarna. Por favor, inténtelo de nuevo más tarde.';
