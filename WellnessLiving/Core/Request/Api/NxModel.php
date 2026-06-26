<?php

namespace WellnessLiving\Core\Request\Api;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * This class is used when an API request to an unexisting endpoint is performed.
 *
 * @method WlModelRequest delete() Only throws exception.
 * @method WlModelRequest get() Only throws exception.
 * @method WlModelRequest post() Only throws exception.
 * @method WlModelRequest put() Only throws exception.
 */
class NxModel extends WlModelAbstract
{
  }

?>