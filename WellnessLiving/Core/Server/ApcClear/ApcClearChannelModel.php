<?php

namespace WellnessLiving\Core\Server\ApcClear;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * When processing a GET request:
 * * connecting to the {@link ApcClearChannel} channel;
 * *
 * For each php-fpm service, at least one running GET request is always supported.
 *
 * @method WlModelRequest get() Deletes a key from APC cache.
 */
class ApcClearChannelModel extends WlModelAbstract
{
  }

?>