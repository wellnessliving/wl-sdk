<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint that manages client ID.
 *
 * @method WlModelRequest get() Gets client ID for a specific client in a business.  Validates the business key and user key, checks profile access, and returns the member ID string assigned to the client in the specified business. Returns an empty string if the user has no member ID set.
 * @method WlModelRequest post() Updates client ID for a specific client in a business.  Validates and saves the new member ID for the given client in the specified business, reindexes the user for search, and returns the date the user originally became a member.
 */
class LoginMemberModel extends WlModelAbstract
{
  /**
   * The date when client became a member.
   *
   * @post result
   * @var string
   */
  public $dt_member = '';

  /**
   * The business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The user's ID to get/set.
   *
   * @get result
   * @post get
   * @var string
   */
  public $s_member = '';

  /**
   * The user's key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>