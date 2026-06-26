<?php

namespace WellnessLiving\Wl\Postcard;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to manipulate direct mail campaign.
 *
 * @method WlModelRequest get() Retrieves status of the address validation.
 * @method WlModelRequest post() Performs address validation.
 */
class PostcardAddressModel extends WlModelAbstract
{
  /**
   * Whether address is verified and valid.
   *
   * <tt>true</tt> if address verified and valid.
   * <tt>false</tt> if address is not verified yet or not valid.
   *
   * @get result
   * @post result
   * @var bool
   */
  public $is_valid = false;

  /**
   * Whether address already verified.
   *
   * @get result
   * @post result
   * @var bool
   */
  public $is_verified = false;

  /**
   * Address for validation.
   *
   * @get get
   * @post get
   * @var string
   */
  public $json_address = '{}';

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Additional notes for address verification.
   *
   * @get result
   * @post result
   * @var string
   */
  public $text_note = '';
}

?>