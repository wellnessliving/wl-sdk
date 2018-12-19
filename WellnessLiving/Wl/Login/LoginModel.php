<?php

namespace WellnessLiving\Wl\Login;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about Wellnessliving user.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * Gender.
   *
   * @get result
   * @var int
   */
  public $id_gender = AGenderSid::FEMALE;

  /**
   * ID of business.
   *
   * <tt>null</tt> if not set yet or if we need system-wide information.
   *
   * @get get
   * @car string|null
   */
  public $k_business = null;

  /**
   * User's ID as staff member.
   *
   * @get result
   * @var string
   */
  public $k_staff = '0';

  /**
   * User first name.
   *
   * @get result
   * @var string
   */
  public $s_first_name = '';

  /**
   * User last name.
   *
   * @get result
   * @var string
   */
  public $s_last_name = '';

  /**
   * ID of user.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;

  /**
   * Photo URL of a user that is currently signed in.
   *
   * @get result
   * @var string
   */
  public $url_photo='';
}

?>