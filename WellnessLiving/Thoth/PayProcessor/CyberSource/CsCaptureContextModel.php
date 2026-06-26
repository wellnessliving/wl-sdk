<?php

namespace WellnessLiving\Thoth\PayProcessor\CyberSource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Generate a capture context data and key ID to encrypt the card number in the follow-on Tokenize Card request.
 *
 * @method WlModelRequest post()
 */
class CsCaptureContextModel extends WlModelAbstract
{
  /**
   * Key of the business.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the business merchant that should be used to perform the request.
   *
   * @post post
   * @var string
   */
  public $k_business_merchant = '';

  /**
   * Microform Integration JavaScript library integrity property value.
   *
   * `null` until generated.
   *
   * @post result
   * @var string|null
   */
  public $s_client_library_integrity;

  /**
   * Contents of the key.
   *
   * `null` until generated.
   *
   * @post result
   * @var string|null
   */
  public $s_key;

  /**
   * ID of the key.
   *
   * `null` until generated.
   *
   * @post result
   * @var string|null
   */
  public $s_key_id;

  /**
   * Microform Integration JavaScript library url.
   *
   * `null` until generated.
   *
   * @post result
   * @var string|null
   */
  public $url_client_library;
}

?>