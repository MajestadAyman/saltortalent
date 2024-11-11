<?php
// Heading
$_['heading_title']     	= 'eWAY Payment';

// Text
$_['text_extension']		= 'Extensione';
$_['text_success']      	= 'Èxit: Ha modificat les seves dades de eWAY!';
$_['text_edit']             	= 'Edita eWAY';
$_['text_eway']         	= '<a target="_blank" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation'] 	= 'Autorització';
$_['text_sale']         	= 'Venda';
$_['text_transparent']      	= 'Redirect transparent (payment form on site)';
$_['text_iframe']         	= 'IFrame (forma de pagament a finestra)';
$_['text_connect_eway']	        = 'eWAY helps businesses to securely process all major credit cards, with built-in fraud prevention, 24/7 technical support and so much more. <a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf">Click Here</a>';
$_['text_eway_image']	        = '<a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf"><img src="view/image/payment/eway_connect.png" alt="eWAY" title="eWAY" class="img-fluid" /></a>';

// Entry
$_['entry_paymode'] 		= 'Mode de pagament';
$_['entry_test'] 		= 'Mode de prova';
$_['entry_order_status'] 	= 'Estat de la comanda';
$_['entry_order_status_refund'] = 'Estat de la comanda reemborsat';
$_['entry_order_status_auth']   = 'Autoritzat estat de l&#039;ordre';
$_['entry_order_status_fraud']  = 'Estat de la comanda sospita de frau';
$_['entry_status'] 		= 'Estat';
$_['entry_username'] 		= 'eWAY API Key';
$_['entry_password'] 		= 'eWAY contrasenya';
$_['entry_payment_type'] 	= 'Tipus de pagament';
$_['entry_geo_zone'] 		= 'Zona Geo';
$_['entry_sort_order'] 		= 'Ordena comanda';
$_['entry_transaction_method'] 	= 'Mètode de transacció';

// Error
$_['error_permission'] 		= 'Avís: No té permís per modificar el mòdul de pagament eWay';
$_['error_username'] 		= 'eWay API Key es requereix!';
$_['error_password'] 		= 'Es requereix eWay contrasenya!';
$_['error_payment_type'] 	= 'Es requereix almenys un tipus de pagament!' ;

// Help hints
$_['help_testmode'] 		= 'S&#039;estableix a Sí per utilitzar el eWay Sandbox.';
$_['help_username'] 		= 'La vostra eWay API Key de la seva compte MYeWAY.';
$_['help_password'] 		= 'La vostra eWay API contrasenya del compte MYeWAY.';
$_['help_transaction_method'] 	= 'L&#039;autorització només està disponible per als bancs australians';

// Order page - payment tab
$_['text_payment_info'] 	= 'Informació de pagament';
$_['text_order_total'] 		= 'Total autoritzat';
$_['text_transactions'] 	= 'Transaccions';
$_['text_column_transactionid'] = 'eWAY ID de transacció';
$_['text_column_amount'] 	= 'Quantitat';
$_['text_column_type'] 		= 'Tipus';
$_['text_column_created'] 	= 'Creat';
$_['text_total_captured'] 	= 'Total capturat';
$_['text_capture_status'] 	= 'Pagament capturat';
$_['text_void_status'] 		= 'Pagament anul·lada';
$_['text_refund_status'] 	= 'El pagament reemborsat';
$_['text_total_refunded'] 	= 'Total reemborsat';
$_['text_refund_success'] 	= 'Devolució va tenir èxit!';
$_['text_capture_success'] 	= 'Capture succeir!';
$_['text_refund_failed'] 	= 'El reemborsament no:';
$_['text_capture_failed'] 	= 'Capture ha fallat:';
$_['text_unknown_failure'] 	= 'Per no vàlid o quantitat';

$_['text_confirm_capture'] 	= 'Està segur que desitja capturar el pagament?';
$_['text_confirm_release'] 	= 'Està segur que desitja alliberar el pagament?';
$_['text_confirm_refund']  	= 'Està segur que desitja tornar el pagament?';

$_['text_empty_refund']  	= 'Si us plau introdueixi una quantitat a reemborsar';
$_['text_empty_capture'] 	= 'Si us plau, introdueixi una quantitat per capturar';

$_['btn_refund']         	= 'Devolució';
$_['btn_capture']        	= 'Captura';

// Validation Error codes
$_['text_card_message_V6000'] = 'Error Indefinit validació';
$_['text_card_message_V6001'] = 'No vàlida IP del Client';
$_['text_card_message_V6002'] = 'Deviceid no vàlid';
$_['text_card_message_V6011'] = 'La quantitat no vàlida';
$_['text_card_message_V6012'] = 'No vàlida Factura Descripció';
$_['text_card_message_V6013'] = 'No vàlid Número de factura';
$_['text_card_message_V6014'] = 'No vàlid la factura de referència';
$_['text_card_message_V6015'] = 'No vàlid Codi de moneda';
$_['text_card_message_V6016'] = 'Pagament requerit';
$_['text_card_message_V6017'] = 'Diner de Pagament Codi Requerit';
$_['text_card_message_V6018'] = 'Unknown pagament Moneda Codi';
$_['text_card_message_V6021'] = 'Nom titular de la targeta Obligatori';
$_['text_card_message_V6022'] = 'Nombre de Targeta Requerit';
$_['text_card_message_V6023'] = 'CVN Obligatori';
$_['text_card_message_V6031'] = 'Nombre de targeta no vàlid';
$_['text_card_message_V6032'] = 'CVN no vàlid';
$_['text_card_message_V6033'] = 'Data de caducitat no vàlid';
$_['text_card_message_V6034'] = 'Edició vàlid';
$_['text_card_message_V6035'] = 'Data d&#039;inici no vàlida';
$_['text_card_message_V6036'] = 'Mes vàlid';
$_['text_card_message_V6037'] = 'No vàlida Any';
$_['text_card_message_V6040'] = 'No vàlida Token Id de l&#039;Client';
$_['text_card_message_V6041'] = 'Client Requerit';
$_['text_card_message_V6042'] = 'Client Nom Obligatori';
$_['text_card_message_V6043'] = 'Client Cognom Obligatori';
$_['text_card_message_V6044'] = 'Client País Codi Requerit';
$_['text_card_message_V6045'] = 'Títol client requerit';
$_['text_card_message_V6046'] = 'Requerit simbòlic ID de client';
$_['text_card_message_V6047'] = 'RedirectUrl Obligatori';
$_['text_card_message_V6051'] = 'No vàlid Nom';
$_['text_card_message_V6052'] = 'No vàlid Cognom';
$_['text_card_message_V6053'] = 'No vàlid Country Code';
$_['text_card_message_V6054'] = 'Correu invàlid';
$_['text_card_message_V6055'] = 'Telèfon vàlid';
$_['text_card_message_V6056'] = 'No vàlida mòbil';
$_['text_card_message_V6057'] = 'Fax vàlid';
$_['text_card_message_V6058'] = 'Títol vàlid';
$_['text_card_message_V6059'] = 'Redirect URL no vàlid';
$_['text_card_message_V6060'] = 'Redirect URL no vàlid';
$_['text_card_message_V6061'] = 'Referència no vàlida';
$_['text_card_message_V6062'] = 'No vàlid Nom de l&#039;empresa';
$_['text_card_message_V6063'] = 'No vàlid Descripció del treball';
$_['text_card_message_V6064'] = 'No vàlida Street1';
$_['text_card_message_V6065'] = 'No vàlida Street2';
$_['text_card_message_V6066'] = 'No vàlida City';
$_['text_card_message_V6067'] = 'Estat no vàlid';
$_['text_card_message_V6068'] = 'No vàlid Codi Postal';
$_['text_card_message_V6069'] = 'Correu invàlid';
$_['text_card_message_V6070'] = 'Telèfon vàlid';
$_['text_card_message_V6071'] = 'No vàlida mòbil';
$_['text_card_message_V6072'] = 'Comentaris no vàlids';
$_['text_card_message_V6073'] = 'Fax vàlid';
$_['text_card_message_V6074'] = 'No vàlida Url';
$_['text_card_message_V6075'] = 'No vàlida Adreça d&#039;enviament Nom';
$_['text_card_message_V6076'] = 'No vàlid Adreça Transport Cognom';
$_['text_card_message_V6077'] = 'No vàlid Adreça Transport Street1';
$_['text_card_message_V6078'] = 'No vàlid Adreça Transport Street2';
$_['text_card_message_V6079'] = 'Enviament vàlida Adreça Ciutat';
$_['text_card_message_V6080'] = 'Estat Adreça d&#039;enviament no vàlid';
$_['text_card_message_V6081'] = 'Adreça PostalCode enviament no vàlid';
$_['text_card_message_V6082'] = 'Adreça de correu electrònic d&#039;enviament no vàlid';
$_['text_card_message_V6083'] = 'Adreça Telèfon de l&#039;enviament no vàlid';
$_['text_card_message_V6084'] = 'Enviament direcció no vàlida País';
$_['text_card_message_V6091'] = 'Unknown Country Code ';
$_['text_card_message_V6100'] = 'Targeta no vàlida Nom';
$_['text_card_message_V6101'] = 'No vàlid de targeta de caducitat Mes';
$_['text_card_message_V6102'] = 'No vàlida Targeta Caducitat Any';
$_['text_card_message_V6103'] = 'No vàlida Targeta d&#039;inici Mes';
$_['text_card_message_V6104'] = 'No vàlida Targeta d&#039;inici Any';
$_['text_card_message_V6105'] = 'Edició targeta no vàlida ';
$_['text_card_message_V6106'] = 'Targeta no vàlida CVN';
$_['text_card_message_V6107'] = 'AccessCode no vàlid';
$_['text_card_message_V6108'] = 'CustomerHostAddress no vàlid';
$_['text_card_message_V6109'] = 'UserAgent no vàlid';
$_['text_card_message_V6110'] = 'Nombre de targeta no vàlid';
$_['text_card_message_V6111'] = 'No autoritzada d&#039;accés API, compte no PCI certificades';
$_['text_card_message_V6112'] = 'Detalls de targetes redundants que no siguin anys de venciment i mesos';
$_['text_card_message_V6113'] = 'Transacció no vàlida per al reemborsament';
$_['text_card_message_V6114'] = 'Error de validació de porta d&#039;enllaç';
$_['text_card_message_V6115'] = 'No vàlida DirectRefundRequest, identificació de la transacció';
$_['text_card_message_V6116'] = 'Dades de la targeta no vàlids a TransactionID original';
$_['text_card_message_V6124'] = 'Elements de línia no vàlids. Les partides s&#039;han proporcionat això els totals no coincideixen amb l&#039;àmbit TotalAmount ';
$_['text_card_message_V6125'] = 'No Seleccionat Tipus de pagament habilitada';
$_['text_card_message_V6126'] = 'Número de targeta de xifrat no vàlida, l&#039;desxifrat no';
$_['text_card_message_V6127'] = 'Cvn xifrat no vàlida, el desxifrat no';
$_['text_card_message_V6128'] = 'Mètode no vàlid per al tipus de pagament';
$_['text_card_message_V6129'] = 'La transacció no ha estat autoritzada per a la captura / Cancel·lació';
$_['text_card_message_V6130'] = 'Error de la informació del client genèric';
$_['text_card_message_V6131'] = 'Error d&#039;informació d&#039;enviament Genèric';
$_['text_card_message_V6132'] = 'Transacció ja s&#039;ha completat o anul·lat, operació no permesa';
$_['text_card_message_V6133'] = 'Checkout no està disponible per al tipus de pagament';
$_['text_card_message_V6134'] = 'No vàlida de Auth ID de transacció per a la captura / Void';
$_['text_card_message_V6135'] = 'PayPal Reemborsament Processament d&#039;error';
$_['text_card_message_V6140'] = 'Compte de comerciant se suspèn';
$_['text_card_message_V6141'] = 'Detalls vàlids compte de PayPal o signatura d&#039;API';
$_['text_card_message_V6142'] = 'Autoritzar no està disponible per a Banc / Sucursal';
$_['text_card_message_V6150'] = 'Quantitat del reemborsament no vàlid';
$_['text_card_message_V6151'] = 'La quantitat del reemborsament major de transacció original';
$_['text_card_message_D4406'] = 'Error desconegut';
$_['text_card_message_S5010'] = 'Error desconegut';
