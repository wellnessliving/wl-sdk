<?php

namespace WellnessLiving\Wl\Business\Sms\Reads;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for add SMS reads.
 *
 * @method WlModelRequest post() Adds SMS reads for individual reads.
 */
class SmsReadsModel extends WlModelAbstract
{
  /**
   * Key of the business.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * User key with whom you want to read messages.
   *
   * @post post
   * @var string|null
   */
  public $uid = null;
}

?>