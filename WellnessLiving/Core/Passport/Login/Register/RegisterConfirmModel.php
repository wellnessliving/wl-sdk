<?php

namespace WellnessLiving\Core\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;

/**
 * Confirm user's email and completes registration process.
 */
class RegisterConfirmModel extends WlModelAbstract
{
  /**
   * Unique registration code.
   *
   * @post get
   * @var string
   */
  public $text_code = '';

  /**
   * User's login.
   *
   * @post get
   * @var string
   */
  public $text_login = '';

  /**
   * User's email.
   *
   * @post get
   * @var string
   */
  public $text_mail = '';

  /**
   * Key of new registered user.
   *
   * @post result
   * @var string
   */
  public $uid;
}

?>