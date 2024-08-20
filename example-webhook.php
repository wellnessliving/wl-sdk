<?php

namespace WlSdkExample;

use WellnessLiving\WlWebhook;

require_once __DIR__.'/WellnessLiving/wl-autoloader.php';
require_once __DIR__.'/example-config.php';

$o_config=ExampleConfig::create(\WellnessLiving\Wl\WlRegionSid::US_EAST_1,'example.com');
$o_webhook = new WlWebhook($o_config);

// We check whether the webhook request is authorized or not.
if($o_webhook->isAuthorize())
  echo "Webhook is authorized.".PHP_EOL;
else
{
  echo "ERROR: Webhook is not authorized.".PHP_EOL;
  echo "Diagnostic information:".PHP_EOL;
  echo var_export($o_webhook->a_diagnostic,true).PHP_EOL;

  return;
}

$a_variable = $o_webhook->variable();
echo "The request variables: ".PHP_EOL;
echo var_export($a_variable,true);

echo PHP_EOL;

?>