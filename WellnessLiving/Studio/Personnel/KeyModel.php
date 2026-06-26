<?php

namespace WellnessLiving\Studio\Personnel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for gets repository key for user.
 *
 * @method WlModelRequest post() Gets repository key for user.
 */
class KeyModel extends WlModelAbstract
{
  /**
   * User login.
   *
   * @post post
   * @var string
   */
  public $s_login = '';

  /**
   * Password for repository key.
   *
   * @post result
   * @var string
   */
  public $s_password;

  /**
   * Private repository key.
   *
   * @post result
   * @var string
   */
  public $s_private;

  /**
   * Repository name.
   *
   * @post post
   * @var string
   */
  public $s_repository = '';

  /**
   * One time password for user.
   *
   * @post post
   * @var string
   */
  public $s_user_password = '';
}

?>