<?php

namespace WellnessLiving\Wl\Member\Progress\Log;

use WellnessLiving\WlModelAbstract;

/**
 * Performs ajax requests for verify client's progress log.
 */
class VerifyModel extends WlModelAbstract
{
  /**
   * Local date without time of the progress log.
   *
   * @put get
   * @var string
   */
  public $dt_date;

  /**
   * Business key.
   *
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * User key.
   *
   * @put get
   * @var string
   */
  public $uid;
}

?>