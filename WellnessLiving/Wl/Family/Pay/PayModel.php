<?php

namespace WellnessLiving\Wl\Family\Pay;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get and set data about "who pays for who".
 *
 * @method WlModelRequest get() Gets data about who pays for a given user.  Checks that the current user has access to the target user's profile, either through general  profile access or through store-sell privilege combined with business access, and that neither  user is restricted from this operation by franchise rules. Returns the current payer for the  user, or an empty value if the user pays for themself.
 * @method WlModelRequest post() Sets that user {@link \Wl\Family\Pay\PayApi::$uid_payer} pays for user {@link \Wl\Family\Pay\PayApi::$uid}.  Validates that the current user has access to the target user's profile and that the payer and  the target user are family relatives. Rejects the request if the payer already pays for another  user, if another user already pays for the target user, or if either user is restricted by  franchise rules. Persists the new payer relationship in a database transaction.
 */
class PayModel extends WlModelAbstract
{
  /**
   * ID of business to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * ID of user to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid;

  /**
   * ID of user who will pay for user {@link PayModel::$uid}.
   * 
   * Empty if {@link PayModel::$uid} will pay for self.
   *
   * @get result
   * @post post
   * @var string
   */
  public $uid_payer;
}

?>