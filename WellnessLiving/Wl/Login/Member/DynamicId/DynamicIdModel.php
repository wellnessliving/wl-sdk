<?php

namespace WellnessLiving\Wl\Login\Member\DynamicId;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get member dynamic ID information.
 *
 * @method WlModelRequest get() Returns the member's barcode and its expiry time for the specified business and user.  If the business uses dynamic barcodes, generates or refreshes a time-limited barcode and returns its value, expiry countdown, and an image URL. If the business uses static barcodes, returns the member's static ID with a zero expiry.
 */
class DynamicIdModel extends WlModelAbstract
{
  /**
   * Number of seconds left until the dynamic ID expires.
   * Zero means that business uses static barcode.
   *
   * @get result
   * @var int
   */
  public $i_expire = 0;

  /**
   * `true` if a new dynamic ID should be generated.
   * `false` if the existing dynamic ID can be used, if it has not expired.
   *   If expired, a new dynamic ID will be generated anyway.
   *
   * @get get
   * @var bool
   */
  public $is_refresh = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Barcode of the member.
   *
   * Dynamic, if business uses barcode as dynamic ID.
   * Or static, if business uses static ID. In this case {@link DynamicIdModel::$i_expire} will be zero.
   *
   * @get result
   * @var string
   */
  public $text_barcode = '';

  /**
   * User unique identifier.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * URL of the barcode image.
   *
   * @get result
   * @var string
   */
  public $url_barcode = '';
}

?>