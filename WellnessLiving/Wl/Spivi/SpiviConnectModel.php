<?php

namespace WellnessLiving\Wl\Spivi;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Spivi connect API.
 *
 * @method WlModelRequest delete() Disconnecting with Spivi, remove a token.
 * @method WlModelRequest get() Retrieves Spivi account information.
 * @method WlModelRequest post() Connecting with Spivi, getting a token.
 */
class SpiviConnectModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '';

  /**
   * Facility ID.
   *
   * @get result
   * @post post
   * @var string
   */
  public $s_facility_id = '';

  /**
   * Password.
   *
   * @post post
   * @var string
   */
  public $s_password = '';

  /**
   * Username.
   *
   * @get result
   * @post post
   * @var string
   */
  public $s_username = '';
}

?>