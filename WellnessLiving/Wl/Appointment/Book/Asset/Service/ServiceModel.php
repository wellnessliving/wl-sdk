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
   * List of assets which are required for service booking. Keys - asset category ID; primary key in {@link \RsResourceTypeSql} table. Values - sub arrays with next keys:
   * <dl>
   *   <dt>
   *     array[] <var>a_resource</var>
   *   </dt>
   *   <dd>
   *     List of resources. Every element has keys:
   *     <dl>
   *       <dt>
   *         array <var>a_image</var>
   *       </dt>
   *       <dd>
   *         Asset image data.
   *       </dd>
   *       <dt>
   *         bool <var>is_available</var>
   *       </dt>
   *       <dd>
   *         <tt>true</tt> - this asset has at least one free unit; <tt>false</tt> - asset has no free units.
   *       </dd>
   *       <dt>
   *         string <var>k_resource</var>
   *       </dt>
   *       <dd>
   *         Asset key.
   *       </dd>
   *       <dt>
   *         string <var>s_resource</var>
   *       </dt>
   *       <dd>
   *         Asset title.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string|null <var>k_resource_layout</var>
   *   </dt>
   *   <dd>
   *     Assets' layout key. <tt>null</tt> if asset category has no layout.
   *   </dd>
   *   <dt>
   *     string <var>s_resource_type</var>
   *   </dt>
   *   <dd>
   *     Title of asset category.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_resource_type = [];

  /**
   * Can staff booked unavailable assets.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var bool
   */
  public $can_book_unavailable_assets = null;

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