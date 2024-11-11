<?php
// Heading
$_['heading_title']                     = 'Productos importados';
$_['text_openbay']                      = 'OpenBay Pro';
$_['text_ebay']                         = 'eBay';

// Text
$_['text_sync_import_line1']            = '<strong>Atención!</strong> Esto importará todos sus productos de eBay y construira una estructura de categorías en su tienda. Se recomienda que elimine todas las categorías y productos antes de ejecutar esta opción. <br /> La estructura de categorías es a partir de las categorías de eBay normales, no sus categorías de la tienda (si usted tiene una tienda eBay). Puede cambiar el nombre, eliminar y editar las categorías importadas sin afectar a sus productos de eBay.';
$_['text_sync_import_line3']            = 'Necesita asegurarse de que su servidor puede aceptar y procesar grandes tamaños de los datos POST. 1.000 artículos de eBay es de unos 40Mb de tamaño, tendrá que calcular lo que usted requiere. Si la llamada falla, entonces es probable que su ajuste es demasiado pequeño. Su límite de memoria de PHP tiene que ser acerca de 128Mb.';
$_['text_sync_server_size']             = 'Actualmente el servidor puede aceptar';
$_['text_sync_memory_size']             = 'Su límite de memoria de PHP';
$_['text_import_confirm']		= 'Esto importará todos sus artículos de eBay como nuevos productos, ¿estás seguro? Esto no se puede deshacer! Asegúrese de tener una copia de seguridad primero!';
$_['text_import_notify']		= 'Su solicitud de importación ha sido enviado para su procesamiento. Una importación dura aproximadamente 1 hora por 1000 unidades.';
$_['text_import_images_msg1']           = 'Las imágenes están pendientes de importación / copia de eBay. Actualizar esta página, si el número no disminuye después';
$_['text_import_images_msg2']           = 'Haga clic aquí';
$_['text_import_images_msg3']           = 'y esperar. Más información acerca de por qué sucedió esto se puede encontrar <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">aquí</a>';

// Entry
$_['entry_import_item_advanced']        = 'Obtener los datos avanzados';
$_['entry_import_categories']         	= 'Importar categorias';
$_['entry_import_description']		= 'Importar descripciónes de productos';
$_['entry_import']			= 'Importar productos eBay';

// Buttons
$_['button_import']			= 'Importar';
$_['button_complete']			= 'Completo';

// Help
$_['help_import_item_advanced']        	= 'Tendrá hasta 10 veces más en importar artículos. Importaciones pesos, tamaños, ISBN y más si está disponible';
$_['help_import_categories']         	= 'Construye una estructura de categorías en su tienda de las categorías de eBay';
$_['help_import_description']         	= 'Esto importará todo, incluyendo HTML, visite contadores etc';

// Error
$_['error_import']                   	= 'Error al cargar';
$_['error_maintenance']			= 'La tienda está en modo de mantenimiento. La importación fallará!';
$_['error_ajax_load']			= 'Error al conectar con el servidor';
$_['error_validation']			= 'Necesita estar registrado para el token de API y activar el módulo.';
