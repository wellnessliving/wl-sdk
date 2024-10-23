<?php

namespace WellnessLiving\Wl\Profile;

use WellnessLiving\WlModelAbstract;

/**
 * Creates user profile with minimum fields.
 *
 * @sdk
 */
class ProfileCreateModel extends WlModelAbstract
{
  /**
   * Date of the user's birthday in MySQL format.
   *
   * @post post
   * @var string
   */
  public $dt_birthday = '';

  /**
   * The key of the business.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * First name of the user.
   *
   * @post post
   * @var string
   */
  public $text_firstname = '';

  /**
   * Last name of the user.
   *
   * @post post
   * @var string
   */
  public $text_lastname = '';

  /**
   * Email of the user.
   *
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * Phone of the user.
   *
   * @post post
   * @var string
   */
  public $text_phone = '';

  /**
   * The key of the user.
   *
   * @post result
   * @var string
   */
  public $uid = '';
}

?>