<?php

namespace WellnessLiving\Wl\Profile\PurchaseList\PaymentScheduleModal;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about purchase.
 *
 * @method WlModelRequest get() Return information about payment schedule.
 */
class PaymentScheduleElementModel extends WlModelAbstract
{
  /**
   * Information about On Hold schedule item in future.
   *
   * @get result
   * @var array
   */
  public $a_onhold_future;

  /**
   * Information about On Hold schedule item in past.
   *
   * @get result
   * @var array
   */
  public $a_onhold_past;

  /**
   * Schedule item information.
   *
   * @get result
   * @var array
   */
  public $a_schedule;

  /**
   * @get get
   * @var string
   */
  public $k_business = null;

  /**
   * @get get
   * @var string
   */
  public $k_login_promotion = null;

  /**
   * Note message about promotion cancelled due to sent to collections.
   *
   * @get result
   * @var string
   */
  public $text_collected_note = '';
}

?>