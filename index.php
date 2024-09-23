<?php

	include dirname(__FILE__) . '/includes/strapi.php';

	$locale = isset($_GET['locale']) ? $_GET['locale'] : 'es';
	$page = strapiGet($locale);

	include dirname(__FILE__) . '/tpl-home.php';

	