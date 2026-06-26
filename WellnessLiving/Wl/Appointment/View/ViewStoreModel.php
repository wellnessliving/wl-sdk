<?php

namespace WellnessLiving\Wl\Appointment\View;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about amount that must be paid for an appointment.
 *
 * @method WlModelRequest get() Loads information about amounts that must be paid for an appointment.
 */
class ViewStoreModel extends WlModelAbstract
{
  /**
   * List of amounts that must be paid. Each element contains keys:
   *
   * <dl>
   *   <dt>string `m_price`</dt>
   *   <dd>Item price.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Item title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_item;

  /**
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>