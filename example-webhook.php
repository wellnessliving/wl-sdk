<?php

namespace WlSdkExample;

use WellnessLiving\WlRegionSid;
use WellnessLiving\WlWebhook;

require_once __DIR__.'/WellnessLiving/wl-autoloader.php';
require_once __DIR__.'/example-config.php';

$o_config=ExampleConfig::create(WlRegionSid::US_EAST_1);
$o_webhook = new WlWebhook($o_config);

// We check whether the webhook request is authorized or not.
if($o_webhook->isAuthorize())
  echo "Webhook is authorized.".PHP_EOL;
else
{
  echo "ERROR: Webhook is not authorized.".PHP_EOL;
  return;
}

echo "The request body: ".PHP_EOL;
echo var_export($o_webhook->variable(),true);

echo PHP_EOL;

?>