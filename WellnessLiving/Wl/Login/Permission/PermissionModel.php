<?php

namespace WellnessLiving\Wl\Login\Permission;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Makes a purchased promotion auto-renewable.
 *
 * The POST method makes the promotion auto-renewable based on the {@link PermissionModel::$is_renew} parameter.
 *
 * @method WlModelRequest post() Saves the auto-renew setting for a purchased promotion.  Validates the purchased promotion, checks profile access, and sets the auto-renew flag to the value of `is_renew`. Returns an error if the promotion does not support auto-renewal or if the client is a debtor.
 */
class PermissionModel extends WlModelAbstract
{
  /**
   * If `true`, the purchased promotion has been made auto-renewable. Otherwise, this will be `false`.
   *
   * @post post
   * @var bool
   */
  public $is_renew = false;

  /**
   * The key of the purchased promotion.
   *
   * @post get
   * @var string
   */
  public $k_login_promotion = '0';
}

?>