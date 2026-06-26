<?php

namespace WellnessLiving\Wl\Sms\History;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manage actions of sms history report.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 */
class ResendModel extends WlModelAbstract
{
  /**
   * A sms history ID.
   *
   * @post get
   * @var string
   */
  public $k_sms_history;
}

?>