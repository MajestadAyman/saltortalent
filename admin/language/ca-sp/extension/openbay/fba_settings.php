<?php
// Headings
$_['heading_title']        		= 'Configuració';
$_['text_openbay'] 			= 'OpenBay Pro';
$_['text_fba'] 				= 'El compliment per part d\'Amazon';

// Text
$_['text_success'] 			= 'La configuració s\'han guardat';
$_['text_status'] 			= 'Estat';
$_['text_account_ok'] 			= 'Connexió al compliment per part d\'Amazon OK';
$_['text_api_ok'] 			= 'Connexió API OK';
$_['text_api_status'] 			= 'Connexió API';
$_['text_edit'] 			= 'Edita Compliment per la configuració d\'Amazon';
$_['text_standard'] 			= 'Estàndard';
$_['text_expedited'] 			= 'Accelerada';
$_['text_priority'] 			= 'Prioritat';
$_['text_fillorkill'] 			= 'Empleneu o Acabi';
$_['text_fillall'] 			= 'Empleneu tots';
$_['text_fillallavailable'] 		= 'Empleneu Tot disponible';
$_['text_prefix_warning'] 		= 'No canviar aquesta opció després que els pediods s\'han enviat a Amazon, només s\'estableix això quan s\'instal·la per primera vegada.';
$_['text_disabled_cancel'] 		= 'Inhabilitat - no cancel·li automàticament compliments';
$_['text_validate_success'] 		= 'Els detalls de la seva API funcionen correctament! Heu de fer clic Desa per assegurar que els ajustos es guarden. ';
$_['text_register_banner'] 		= 'Feu clic aquí si necessita registrar-se per un compte nou';

// Entry
$_['entry_api_key'] 			= 'Clau d\'API';
$_['entry_encryption_key']     = 'Clave de encriptación 1';
$_['entry_encryption_iv']      = 'Clave de encriptación 2';
$_['entry_account_id'] 			= 'Identificador de compte';
$_['entry_send_orders'] 		= 'Envia pediods de forma automàtica';
$_['entry_fulfill_policy'] 		= 'Política de Compliment';
$_['entry_shipping_speed'] 		= 'Per defecte velocitat d\'enviament';
$_['entry_debug_log'] 			= 'Habilitar el registre de depuració';
$_['entry_new_order_status'] 		= 'Nova entrada de compliment';
$_['entry_order_id_prefix'] 		= 'Ordre ID prefix';
$_['entry_only_fill_complete'] 		= 'Tots els articles han de ser FBA';

// Help
$_['help_api_key'] 			= 'Aquesta és la teva clau d\'API, obtenir això des de la seva àrea Pro compta OpenBay';
$_['help_encryption_key']      = 'Esta es su clave de cifrado #1, obtenga esto desde su área de cuenta de OpenBay Pro';
$_['help_encryption_iv']       = 'Esta es su clave de cifrado #2, obtenga esto desde su área de cuenta de OpenBay Pro';
$_['help_account_id'] 			= 'Aquest és l\'ID de compte que coincidix amb el compte d\'Amazon registrat per OpenBay Pro, obtenir això des de la seva àrea Pro compta OpenBay';
$_['help_send_orders'] 			= 'Les comandes que continguin compliment a joc per productes d\'Amazon serà envia a Amazon de forma automàtica';
$_['help_fulfill_policy'] 		= 'La política de compliment per defecte (FillAll -. Tots els articles fulfillable en l\'ordre compliment s\'envien la comanda de compliment roman en un estat de procés fins que tots els articles s\'envien ja sigui per Amazon o cancel·lades pel venedor FillAllAvailable. - tots els articles fulfillable en l\'ordre compliment s\'envien tots els articles irrealitzables en l\'ordre són cancel·lats per Amazon.FillOrKill -. Si un article en una ordre de compliment es determina que és irrealitzable abans de qualsevol enviament de les comandes es mou a l\'estat Pendent (el procés de recollir unitats de l\'inventari ha començat), a continuació, tota l\'ordre es considera irrealitzable. No obstant això, si un element en una comanda de compliment es determina que és irrealitzable després d\'un enviament en l\'ordre es mou a l\'estat Pendent, cancel Amazones com a gran part de l\'ordre de compliment com sigui possible.) ';
$_['help_shipping_speed'] 		= 'Aquesta és la categoria de velocitat d\'enviament per defecte a aplicar les noves comandes, els diferents nivells de servei poden incurr diferents costos';
$_['help_debug_log'] 			= 'Els registres de depuració registraran informació a un fitxer de registre sobre les accions del mòdul fa. Això s\'ha de deixar habilitat per ajudar a trobar la causa de qualsevol problema. ';
$_['help_new_order_status'] 		= 'Aquest és l\'estat de les comandes, el que dispararà l\'ordre que es crearà per al compliment. Assegureu-vos que això és utilitzar un estatut només després d\'haver rebut el pagament. ';
$_['help_order_id_prefix'] 		= 'Tenir un prefix per a ajudarà a identificar les ordres que han vingut de la seva botiga no d\'altres integracions. Això és molt útil quan els comerciants venen en molts mercats i utilitzen FBA ';
$_['help_only_fill_complete'] 		= 'Això només permetrà a les ordres que s\'enviïn per a la seva realització si tots els elements de l\'ordre es fan coincidir amb un compliment per partida Amazon. Si algun article no és llavors tot l\'ordre romandrà sense cobrir '.

// Error
$_['error_api_connect'] 		= 'No s\'ha pogut connectar a lº\'API';
$_['error_account_info'] 		= 'No es pot verificar la connexió API per Compliment per Amazon';
$_['error_api_key'] 			= 'La clau d\'API no és vàlida';
$_['error_api_account_id'] 		= 'El nombre de compte no és vàlid';
$_['error_encryption_key']     = 'La clave de encriptación 1 es invalida';
$_['error_encryption_iv']      = 'La clave de encriptación 2 es invalida';
$_['error_validation'] 			= 'Hi ha hagut un error validant les seves dades';

// Tabs
$_['tab_api_info'] 			= 'Dtalles de l\'API';

// Buttons
$_['button_verify'] 			= 'Comproveu detalls';
