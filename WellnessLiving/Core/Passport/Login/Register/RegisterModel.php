<?php

namespace WellnessLiving\Core\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;

/**
 * Signs user up.
 */
class RegisterModel extends WlModelAbstract
{
  /**
   * Additional data about new users.
   *
   * <dl>
   *   <dt>string <var>[k_business]</var></dt>
   *   <dd>
   *     Key of the business for wellnessliving project to register user in.
   *
   *     Behavior is different for different applications. If application is connected to the certain business, this
   *     property can be always empty - all clients will be registered in the connected business. If business is set
   *     for such application and is different from the business from application settings, error occurs.
   *
   *     If application is not connected to the business, any business key can be set. This does not require any special
   *     privileges, as registration is a public available action.
   *   </dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_data = [];

  /**
   * Application ID.
   *
   * @post post
   * @var string
   */
  public $s_application = '';

  /**
   * Email.
   *
   * @post post
   * @var string
   */
  public $s_mail = '';

  /**
   * First name.
   *
   * @post post
   * @var string
   */
  public $s_name_first = '';

  /**
   * Last name.
   *
   * @post post
   * @var string
   */
  public $s_name_last = '';

  /**
   * Password.
   *
   * @post post
   * @var string
   */
  public $s_password = '';

  /**
   * Password confirmation.
   *
   * @post post
   * @var string
   */
  public $s_password_confirm = '';

  /**
   * URL to confirmation page. This link is used in a confirmation email.
   *
   * If empty, URL to default page is used.
   *
   * @post post
   * @var string
   */
  public $url_confirm = '';
}

?>