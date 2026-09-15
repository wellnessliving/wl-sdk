<?php

namespace WellnessLiving\Wl\Login\Add;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint that retrieves information about user's active purchase options able to be used cross-regionally.
 *
 * @method WlModelRequest get() Retrieves information about users by email.  Validates that the business and the user exist and that the current user has access to view the user's profile, then loads the user's active purchase options and returns them as a JSON-encoded string.
 */
class ProfilePurchaseOptionModel extends WlModelAbstract
{
  /**
 * User's active purchase options data.
 * For more details see .
 *
 * Serialized with JSON.
 *
 * @get result
 * @var string
 */
  public $json_promotion_active = '';

  /**
 * The key of the business.
 *
 * @get get
 * @var string
 */
  public $k_business = '0';

  /**
 * UID of a user.
 *
 * @get get
 * @var string
 */
  public $uid = '0';
}

?>