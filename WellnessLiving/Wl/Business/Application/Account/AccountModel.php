<?php

namespace WellnessLiving\Wl\Business\Application\Account;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to save data of accounts for application distribution.
 *
 * @method WlModelRequest post() Saves account data of provider {@link \Wl\Business\Application\Account\AccountApi::$id_os} for business {@link \Wl\Business\Application\Account\AccountApi::$k_business}.
 */
class AccountModel extends WlModelAbstract
{
  /**
   * ID of distribution provider (is directly related to operation system) to save data for.
   *
   * @post post
   * @var int
   */
  public $id_os = 0;

  /**
   * ID of business to save data for.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * Account login to be saved.
   *
   * @post post
   * @var string
   */
  public $s_login = '';

  /**
   * Account password to be saved.
   *
   * @post post
   * @var string
   */
  public $s_password = '';
}

?>