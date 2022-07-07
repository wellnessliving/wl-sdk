<?php

namespace WellnessLiving\Wl\Appointment\Book\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about service categories.
 */
class PurchaseModel extends WlModelAbstract
{
  /**
   * An array with information about available Purchase Options.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_purchase = null;

  /**
   * The date to use to check for expiration of Purchase Options.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The duration of the asset booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * <tt>true</tt> - get all promotions suitable for appointment.
   * <tt>false</tt> - get only promotions available for the client.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The location ID used to select available Purchase Options (Purchase Options the client already owns).
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The promotion ID used to pay for the appointment.
   *
   * <tt>null</tt> if the client doesn't have a suitable promotion.
   *
   * @get result
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * The resource ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * The service ID used to select available Purchase Options.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * The user ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>