<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Creates user account for the given email address if email address does not already exist.
 * checks if a user's email address is already used or changes a user’s login email address.
 */
class CreateModel extends WlModelAbstract
{
  /**
   * The key of the business where you're creating new user.
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
   * The key of the user added.
   *
   * @post result
   * @var string
   */
  public $uid = '';
}

?>