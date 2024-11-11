<?php
// Heading
$_['heading_title']             = 'CardConnect ';

// Tab
$_['tab_settings'] = 'Configuració';
$_['tab_order_status'] = 'Estat de la comanda';

// Text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Èxit: Ha modificat mòdul de pagament CardConnect';
$_['text_edit'] = 'Edita CardConnect';
$_['text_cardconnect'] = '<a href="http://www.cardconnect.com" target="_blank"> <img src = "view / image / payment / cardconnect.png" alt = "CardConnect" title = "CardConnect"> </a> ';
$_['text_payment'] = 'Pagament';
$_['text_authorize'] = 'Autoritzar';
$_['text_live'] = 'Live';
$_['text_test'] = 'Prova';
$_['text_no_cron_time'] = 'El cron encara no s&#039;ha executat';
$_['text_payment_info'] = 'Informació de pagament';
$_['text_payment_method'] = 'Forma de pagament';
$_['text_card'] = 'Targeta';
$_['text_echeck'] = 'Xec electrònic';
$_['text_reference'] = 'Referència';
$_['text_update'] = 'Actualitzar';
$_['text_order_total'] = 'Total demanat';
$_['text_total_captured'] = 'Total Capturat';
$_['text_capture_payment'] = 'Captura de Pagament';
$_['text_refund_payment'] = 'Reemborsament Pagament';
$_['text_void'] = 'Buit';
$_['text_transactions'] = 'Transaccions';
$_['text_column_type'] = 'Tipus';
$_['text_column_reference'] = 'Referència';
$_['text_column_amount'] = 'Quantitat';
$_['text_column_status'] = 'Estat';
$_['text_column_date_modified'] = 'Data de modificació';
$_['text_column_date_added'] = 'Data d&#039;alta';
$_['text_column_update'] = 'Actualitzar';
$_['text_column_void'] = 'Buit';
$_['text_confirm_capture'] = 'Està segur que desitja capturar el pagament?';
$_['text_confirm_refund'] = 'Està segur que desitja reintegrar el pagament?';
$_['text_inquire_success'] = 'Preguntar va ser reeixida';
$_['text_capture_success'] = 'La sol·licitud de captura s&#039;ha realitzat correctament';
$_['text_refund_success'] = 'La sol·licitud de reemborsament s&#039;ha realitzat correctament';
$_['text_void_success'] = 'Void sol·licitud va ser reeixida';

// Entry
$_['entry_merchant_id'] = 'ID del comerciant';
$_['entry_api_username'] = 'API nom d&#039;usuari';
$_['entry_api_password'] = 'API contrasenya';
$_['entry_token'] = 'Token secret';
$_['entry_transaction'] = 'Transacció';
$_['entry_environment'] = 'Entorn';
$_['entry_site'] = 'Lloc';
$_['entry_store_cards'] = 'Targetes de la botiga';
$_['entry_echeck'] = 'Xec electrònic';
$_['entry_total'] = 'Total';
$_['entry_geo_zone'] = 'Zona Geo';
$_['entry_status'] = 'Estat';
$_['entry_logging'] = 'Registre de depuració';
$_['entry_sort_order'] = 'Comanda';
$_['entry_cron_url'] = 'Cron URL de treball';
$_['entry_cron_time'] = 'Cron treball última execució';
$_['entry_order_status_pending'] = 'Pendent';
$_['entry_order_status_processing'] = 'En procés';

// Help
$_['help_merchant_id'] = 'La vostra CardConnect personal compte de venedor ID.';
$_['help_api_username'] = 'El seu nom d&#039;usuari per accedir a l&#039;API CardConnect.';
$_['help_api_password'] = 'La vostra contrasenya per accedir a l&#039;API CardConnect.';
$_['help_token'] = 'Introduïu un testimoni aleatori per a la seguretat o utilitzar el generat';
$_['help_transaction'] = 'Seleccioneu &#039; Pagament  &#039;per capturar el pagament immediat o \' Autoritzar \'perquè l&#039;aprovi.';
$_['help_site'] = 'Això determina la primera part de la URL de l&#039;API. Només canviar si se li ordena. ';
$_['help_store_cards'] = 'Si voleu emmagatzemar targetes usant tokenització.';
$_['help_echeck'] = 'Si vostè vol oferir la possibilitat de pagar amb un xec electrònic.';
$_['help_total'] = 'El total de l&#039;ordre de pagament i enviament ha d&#039;arribar abans que aquesta forma de pagament s&#039;activa. Ha de ser un valor sense signe de moneda. ';
$_['help_logging'] = 'Habilitar depuració va escriure les dades sensibles a un fitxer de registre. Sempre s&#039;ha de desactivar a menys que s&#039;indiqui el contrari. ';
$_['help_cron_url'] = 'Establir una tasca programada per trucar a aquest URL perquè les ordres són d&#039;auto-actualització. Està dissenyat per a ser córrer un parell d&#039;hores després de l&#039;última captura d&#039;un dia hàbil. ';
$_['help_cron_time'] = 'Aquesta és l&#039;última vegada que la URL de treball cron va ser executat.';
$_['help_order_status_pending'] = 'L&#039;estat de l&#039;ordre quan l&#039;ordre ha de ser autoritzada pel comerciant';
$_['help_order_status_processing'] = 'L&#039;estat de l&#039;ordre quan l&#039;ordre és capturada automàticament';

// Button
$_['button_inquire_all'] = 'Fer recerca tots';
$_['button_capture'] = 'Captura';
$_['button_refund'] = 'Reemborsament';
$_['button_void_all'] = 'Void Tots';
$_['button_inquire'] = 'Preguntar';
$_['button_void'] = 'Buit';

// Error
$_['error_permission'] = 'Avís: No té permís per a modificar CardConnect pagament';
$_['error_merchant_id'] = 'ID del comerciant requerida!';
$_['error_api_username'] = 'Nom d&#039;usuari API requerida!';
$_['error_api_password'] = 'API contrasenya requerida!';
$_['error_token'] = 'Secret d&#039;emergència requerit!';
$_['error_site'] = 'Lloc Requerit!';
$_['error_amount_zero'] = 'La quantitat ha de ser més gran que zero!';
$_['error_no_order'] = 'No hi ha informació d&#039;ordre a joc!';
$_['error_invalid_response'] = 'Resposta no vàlida rebuda!';
$_['error_data_missing'] = 'Les dades que faltaven!';
$_['error_not_enabled'] = 'El mòdul no està activat!';