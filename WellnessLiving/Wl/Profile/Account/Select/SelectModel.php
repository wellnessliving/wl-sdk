<?php

namespace WellnessLiving\Wl\Profile\Account\Select;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about current user and his relationship with sub accounts.
 *
 * @method WlModelRequest get() Retrieves information about user specified in {@link \Wl\Profile\Account\Select\SelectApi::$uid} and his relationship with sub accounts.
 * @method WlModelRequest post() Signs in user specified in {@link \Wl\Profile\Account\Select\SelectApi::$uid_in}.
 */
class SelectModel extends WlModelAbstract
{
  /**
   * Array with information about current user and his relationship with sub accounts.
   *
   * @get result
   * @var array
   */
  public $a_user = [];

  /**
   * Business to retrieve relationship information.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * UID to retrieve relationship information.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';

  /**
   * ID of relative to sign in.
   *
   * @post post
   * @var string
   */
  public $uid_in = '';
}

?>