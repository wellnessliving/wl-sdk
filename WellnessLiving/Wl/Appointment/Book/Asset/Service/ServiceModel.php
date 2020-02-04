<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Model of assets which are required for service booking.
 */
class ServiceModel extends WlModelAbstract
{
  /**
   * List of busy assets.
   *
   * Keys of 1st level - asset keys; keys 2nd level - asset numbers;
   * values - keys of appointment books that occupy this asset.
   *
   * For example, if you want to check if 10th asset with key '15' is busy,
   * you have to check if <tt>a_resource_busy['15']['10']</tt> is not empty.
   *
   * If you are making rebook of appointment check value of <tt>a_resource_busy['15']['10']</tt>.
   * If it is equal to key of your current appointment book, consider it available.
   *
   * @get result
   * @var array
   */
  public $a_resource_busy = [];

  /**
   * List of categories of required assets.
   *
   * @get result
   * @var array
   */
  public $a_resource_type = [];

  /**
   * Appointment booking date selected by user.
   *
   * @get get
   * @var string
   */
  public $dt_start = '';

  /**
   * <tt>true</tt> for a case of backend mode.
   * In this mode list of asset categories must be returned even asset selection is disabled for clients.
   *
   * <tt>false</tt> for a case of frontend mode.
   * In this mode list of asset categories must not be returned if asset selection is disabled for clients.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Selected location ID.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Selected service ID.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';
}

?>