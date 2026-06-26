<?php

namespace WellnessLiving\Studio\Personnel\Detail;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for gets information about user.
 *
 * @method WlModelRequest post() Gets information about user.
 */
class DetailModel extends WlModelAbstract
{
  /**
   * Bot password of the user.
   *
   * @post result
   * @var string
   */
  public $s_bot_password = '';

  /**
   * User login.
   *
   * @post post
   * @var string
   */
  public $s_login = '';

  /**
   * One time password for user.
   *
   * @post post
   * @var string
   */
  public $s_user_password = '';

  /**
   * Mail of the user.
   *
   * @post result
   * @var string
   */
  public $text_mail;
}

?>