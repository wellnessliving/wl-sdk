<?php

namespace WellnessLiving\Wl\Business\Claim;

use WellnessLiving\WlModelAbstract;

/**
 * Business trial verification API.
 */
class BusinessClaimModel extends WlModelAbstract
{
  /**
   * The Self-Setup wizard form data to be saved in the business claim log.
   *
   * The structure is conditionally arbitrary and is used only for logging purposes.
   * No specific keys are required or validated.
   *
   * @put post
   * @var string[]
   */
  public $a_form = [];

  /**
   * The key of the business to be verified.
   *
   * @post post
   * @put post
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the location to be verified.
   *
   * @post post
   * @var string
   */
  public $k_location = '';

  /**
   * The email address of the location.
   *
   * Urlencoded email address is expected.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * The phone number of the business, staff and location.
   *
   * Urlencoded phone number is expected.
   *
   * @get get
   * @var string
   */
  public $text_phone = '';

  /**
   * The key of the user who verified the business.
   *
   * @post post
   * @var string
   */
  public $uid_verified = '';

  /**
   * Location microsite URL.
   *
   * @post result
   * @var string|null
   */
  public $url_microsite = null;
}

?>