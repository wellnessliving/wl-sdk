<?php

namespace WellnessLiving\Wl\Profile\Edit\Email;

use WellnessLiving\WlModelAbstract;

/**
 * Entry point to check or edit a user's email.
 */
class EditEmailModel extends WlModelAbstract
{
  /**
   * Information about user who already occupies specified email.
   * Empty if email is free or if quantity of requests is exhausted.
   *
   * @get result
   * @var array
   */
  public $a_user = [];

  /**
   * Quantity of request is exhausted.
   * <tt>true</tt> - yes; <tt>false</tt> - no.
   *
   * @get result
   * @var bool
   */
  public $is_limit = false;

  /**
   * Specified email is occupied.
   * <tt>true</tt> - yes; <tt>false</tt> - no.
   *
   * @get result
   * @var bool
   */
  public $is_use = false;

  /**
   * Business where check must be performed.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Email to be checked.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * ID of user who occupies specified email.
   * <tt>0</tt> if email is free or if quantity of requests is exhausted.
   *
   * @get result
   * @var string
   */
  public $uid_result = '0';

  /**
   * ID of user whose email we try to edit.
   * <tt>0</tt> for a case of new user creation.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_want = '0';
}

?>