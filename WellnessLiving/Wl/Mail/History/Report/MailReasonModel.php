<?php

namespace WellnessLiving\Wl\Mail\History\Report;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads a list of email fails reasons.
 *
 * @method WlModelRequest get()
 */
class MailReasonModel extends WlModelAbstract
{
  /**
   * List of reasons.
   *
   * @get result
   * @var array
   */
  public $a_reason = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>