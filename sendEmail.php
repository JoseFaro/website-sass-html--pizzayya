<?php

require_once dirname(__FILE__) . '/../shared/mailing/index.php';
require_once dirname(__FILE__) . '/../shared/mailing/config.php';
require_once dirname(__FILE__) . '/../shared/helpers.php';
require_once dirname(__FILE__) . '/includes/constants.php';

$formActivatorCaptcha = $_POST[getConstant('FORM_ACTIVATOR_CAPTCHA_NAME')];
$isValidCaptcha = $formActivatorCaptcha === getConstant('FORM_ACTIVATOR_CAPTCHA');

if ($isValidCaptcha) {
    $ownerEmailParams = $emailParams;
    $ownerEmailParams['to'] = 'contacto@pizzayya.com';
    $ownerEmailParams['from'] = 'contacto@pizzayya.com';
    $ownerEmailParams['fromName'] = 'Pizzayya';
    $ownerEmailParams['subject'] = 'Contacto';
    $ownerEmailParams['siteName'] = 'Pizzayya';
    $ownerEmailParams['printJson'] = false;
    $ownerEmailParams['body'] = 
        'Nombre: ' . $_POST['contactName'] . 
        '<br>Correo electrónico: ' . $_POST['contactEmail'] . 
        '<br><br>Mensaje: ' . $_POST['contactMessage'];
    
    $clientEmailParams = $emailParams;
    $clientEmailParams['to'] = $_POST['contactEmail'];
    $clientEmailParams['from'] = 'contacto@pizzayya.com';
    $clientEmailParams['fromName'] = 'Pizzayya';
    $clientEmailParams['subject'] = 'Confirmación de recepción de mensaje';
    $clientEmailParams['siteName'] = 'Pizzayya';
    $clientEmailParams['printJson'] = true;
    $clientEmailParams['body'] = 'Hola, <br><br>Queríamos informarte que hemos recibido tu mensaje. Estamos revisándolo y te responderemos lo más pronto posible. Gracias por ponerte en contacto con nosotros. <br><br><b>Pizzayya</b>';
    
    sendEmail($ownerEmailParams, $smtpConfig, $adminEmail);
    sendEmail($clientEmailParams, $smtpConfig, $adminEmail);
} else {
    sendJsonSuccessStatus(false);
}