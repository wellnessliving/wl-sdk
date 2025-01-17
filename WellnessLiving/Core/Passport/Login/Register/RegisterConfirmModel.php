<?php

namespace WellnessLiving\Core\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;

/**
 * Confirm the user's email and completes the registration process.
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
     *
     */
  public $uid;
}

?>