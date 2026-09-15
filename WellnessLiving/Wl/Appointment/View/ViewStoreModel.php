<?php

namespace WellnessLiving\Wl\Appointment\View;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about amount that must be paid for an appointment.
 *
 * @method WlModelRequest get() Loads information about amounts that must be paid for an appointment.  Checks that the caller may view the appointment - either the client who booked it, or a staff member  with the corresponding privilege - and that the appointment belongs to the specified business. Fills  `a_item` with the price of the service or resource (or its default promotion, if one applies),  a deposit item when only a deposit is charged, and a paid and an unpaid item for every add-on product  of the appointment.
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
   * Appointment key.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>