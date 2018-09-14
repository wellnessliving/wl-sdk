<?php

namespace WellnessLiving\Wl\Appointment\Book\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves an information about service categories.
 */
class PurchaseModel extends WlModelAbstract
{
  /**
   * Array with information about purchase available purchase options.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_purchase = null;

  /**
   * Date to check purchase options expiration.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * Duration of the asset.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * <tt>true</tt> - get all promotions suitable for appointment;
   * <tt>false</tt> - get only promotions available for client.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Location ID to select available purchase options.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * Promotion ID to pay for the appointment.
   *
   * <tt>null</tt> if client does not have suitable promotion.
   *
   * @get result
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * Resource ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * Service ID to select available purchase options.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>