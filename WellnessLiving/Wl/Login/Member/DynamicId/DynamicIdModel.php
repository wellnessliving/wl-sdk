<?php

namespace WellnessLiving\Wl\Login\Member\DynamicId;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get member dynamic ID information.
 *
 * @method WlModelRequest get() Returns the member's barcode and its expiry time for the specified business and user.  If the business uses dynamic barcodes, generates or refreshes a time-limited barcode and returns its value, expiry countdown, and an image URL. If the business uses static barcodes, returns the member's static ID with a zero expiry.  If the business uses QR code as the scan format ({@link \Wl\Login\Member\DynamicId\DynamicIdApi::$is_qr}), also returns the issue timestamp ({@link \Wl\Login\Member\DynamicId\DynamicIdApi::$i_qr_issued}) that the Achieve app uses to build and locally refresh the QR code payload, and does not generate a barcode image URL.
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
   * Unix time in seconds at which {@link DynamicIdModel::$text_barcode} was issued.
   *
   * Only meaningful when {@link DynamicIdModel::$is_qr} is `true`. The Achieve app combines this value with
   * {@link DynamicIdModel::$text_barcode} and a hardcoded 30-second validity window to build the QR code payload,
   * and increments it locally every 30 seconds to refresh the QR code without an additional request to the server.
   *
   * @get result
   * @var int
   */
  public $i_qr_issued = 0;

  /**
   * `true` if the business uses QR code as the client check-in scan format, `false` if it uses the classic barcode.
   *
   * @get result
   * @var bool
   */
  public $is_qr = false;

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