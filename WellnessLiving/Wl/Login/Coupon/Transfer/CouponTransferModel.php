<?php

namespace WellnessLiving\Wl\Login\Coupon\Transfer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Transfer purchased coupon to another user.
 *
 * @method WlModelRequest get() Checks whether users are related.
 * @method WlModelRequest post() Transfers purchased coupon to another user.
 */
class CouponTransferModel extends WlModelAbstract
{
  /**
   * Information about relation between users:
   *
   * <dl>
   *   <dt>string `html_relation`</dt>
   *   <dd>Name of relation type.</dd>
   * 
   *   <dt>string `html_user_name`</dt>
   *   <dd>User name with whom purchased event owner has relation.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_relation;

  /**
   * Key of source mode.
   *
   * @post get
   * @var int|null
   */
  public $id_mode = null;

  /**
   * Key of business.
   * <tt>null</tt> if not initialized.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of login coupon to be transferred.
   * <tt>null</tt> if not initialized.
   *
   * @post get
   * @var string|null
   */
  public $k_login_coupon = null;

  /**
   * User ID to transfer purchased coupon from.
   * <tt>null</tt> if not initialized.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid_from = null;

  /**
   * User ID to transfer purchased coupon to.
   * <tt>null</tt> if not initialized.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid_to = null;
}

?>