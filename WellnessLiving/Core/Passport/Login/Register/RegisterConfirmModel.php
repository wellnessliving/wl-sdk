<?php

namespace WellnessLiving\Core\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Confirm the user's email and completes the registration process.
 *
 * @method WlModelRequest post() Confirms email of a new user and completes registration.  Accepts the email, login, and verification code obtained from the confirmation link sent by {@link \Core\Passport\Login\Register\RegisterApi}, validates them against the pending registration record, creates the user account, and returns the new user's UID.
 */
class RegisterConfirmModel extends WlModelAbstract
{
  /**
   * The unique registration code.
   *
   * @post get
   * @var string
   */
  public $text_code = '';

  /**
   * The user's login.
   *
   * @post get
   * @var string
   */
  public $text_login = '';

  /**
   * The user's email.
   *
   * @post get
   * @var string
   */
  public $text_mail = '';

  /**
   * The key of the new registered user.
   *
   * @post result
   * @var string
   */
  public $uid;
}

?>