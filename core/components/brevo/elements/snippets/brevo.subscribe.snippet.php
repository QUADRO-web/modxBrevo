<?php
/*
 * brevoSubscribe
 *
 * Formit Hook to add contact to Brevo
 *
 * Usage examples:
 * [[FormIt? &hooks=`brevoSubscribe` ...]]
 *
 * @author Jan Dähne <jan.daehne@quadro.digital>
 */

$corePath = $modx->getOption('brevo.core_path', null, $modx->getOption('core_path') . 'components/brevo/');
$brevo = $modx->getService('brevo', 'brevo', $corePath . 'model/brevo/', array(
    'core_path' => $corePath
));

// properties
$listIds = array_map('intval', explode(',', $modx->getOption('brevoListIds', $scriptProperties)));
$emailField = $modx->getOption('brevoEmailField', $scriptProperties, 'email');
$attributes = explode(',', $modx->getOption('brevoAttributes', $scriptProperties));
$attributesData = array();


// formatting attributes
foreach ($attributes as $attribute){
    list($fieldname, $key) = explode('=', $attribute);
    $attributesData[$key] = $hook->getValue($fieldname);
}

// init brevo Object
$brv = new Brevo($modx);

// create contact
$brv->createContact($data = array(
    'email' => $hook->getValue($emailField),
    'listIds' => $listIds,
    'attributes' => $attributesData
));

die('test');

return;