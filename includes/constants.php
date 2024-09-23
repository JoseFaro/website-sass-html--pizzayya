<?php

require_once dirname(__FILE__) . '/../../shared/helpers.php';

defineConstant('FORM_ACTIVATOR_CAPTCHA', 'g3jds38f9shdh23lsqea03jgv9djmdmu4vj8094l8s');
defineConstant('FORM_ACTIVATOR_CAPTCHA_NAME', 'formActivatorCaptcha');
defineConstant('IS_HOME_PAGE', isHomePage($locale));
defineConstant('IS_PRODUCTION', isProduction());
defineConstant('DOMAIN', IS_PRODUCTION ? 'https://pizzayya.com' : 'http://development.pizzayya.com');