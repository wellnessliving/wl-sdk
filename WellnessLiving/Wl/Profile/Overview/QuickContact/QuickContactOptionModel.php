<?php

namespace WellnessLiving\Wl\Profile\Overview\QuickContact;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns notification availability flags for a client on the quick contact panel.
 *
 * Exposes whether Welcome email, Password Reset email and Brivo mobile pass invitation
 * actions are available for a given client in a given business.
 *
 * @method WlModelRequest get() Returns notification availability flags for the specified client.  Checks whether the Welcome email, Password Reset email and Brivo mobile pass invitation actions are available for the client identified by {@link \Wl\Profile\Overview\QuickContact\QuickContactOptionApi::$k_business} and {@link \Wl\Profile\Overview\QuickContact\QuickContactOptionApi::$uid}.
 */
class QuickContactOptionModel extends WlModelAbstract
{
  /**
 * Whether the Brivo mobile pass invitation action is available for this client.
 * `true` if Brivo invitation is available, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_brivo = false;

  /**
 * Whether the Password Reset email action is available for this client.
 * `true` if the password reset template is enabled, the client login is not disabled
 * and the client is not a virtual user, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_password_reset = false;

  /**
 * Whether the Welcome email action is available for this client.
 * `true` if the Welcome email template is enabled for this business and the client has
 * an email address, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_welcome = false;

  /**
 * Whether the Welcome email has already been sent to this client.
 * `true` if a Welcome email was sent previously, `false` otherwise.
 * Only meaningful when {@link QuickContactOptionModel::$is_welcome} is `true`.
 *
 * @get result
 * @var bool
 */
  public $is_welcome_sent = false;

  /**
 * Business key.
 *
 * @get get
 * @var string
 */
  public $k_business = '';

  /**
 * Client user key.
 *
 * @get get
 * @var string
 */
  public $uid = '';
}

?>