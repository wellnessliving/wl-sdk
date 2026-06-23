<?php

namespace WellnessLiving\Core\Passport\User\Email;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks if the email address exists in the system.
 *
 * @method WlModelRequest get() Checks if email address exists.  Used in registration and "forgot password" flows to give immediate feedback before the user submits the full form. Returns `true` if a user account with the given email already exists, so the frontend can prompt to sign in instead of registering.
 */
class EmailExistModel extends WlModelAbstract
{
  /**
   * Determines whether the email address exists.
   *
   * @get result
   * @var bool
   */
  public $is_exist = false;

  /**
   * The email address.
   *
   * @get get
   * @var string
   */
  public $text_email = '';
}

?>