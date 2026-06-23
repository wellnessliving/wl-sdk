<?php

namespace WellnessLiving\Wl\Member\Progress\Log;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Performs ajax requests for verify client's progress log.
 *
 * @method WlModelRequest put() Verifies client's progress log data.  Marks all unverified progress log entries for the specified user and date as verified by the currently signed-in staff member, then triggers a search index reindex for the user.
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