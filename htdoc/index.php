<?php
	require('../../vendor/autoload.php');

	$app->get('/cowsay', function() use($app) {
	  $app['monolog']->addDebug('cowsay');
	  return "<pre>".\Cowsayphp\Cow::say("Cool beans")."</pre>";
	});
?>