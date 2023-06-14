<?php

namespace WellnessLiving\Core\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;

/**
 * Allows new clients to be registered.
 *
 * WellnessLiving recommends using the {@link \WellnessLiving\Wl\Lead\LeadModel} endpoint to register new users.
 * This endpoint is not enabled by default. Contact WellnessLiving to enable this endpoint for your business.
 */
class RegisterModel extends WlModelAbstract
{
  /**
   * The additional data about new users.
   *
   * <dl>
   *   <dt>string <var>[k_business]</var></dt>
   *   <dd>
   *     The key of the business for wellnessliving project to register user in.
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
   * The application ID. This is a business specific ID required to register clients.
   *
   * @post post
   * @var string
   */
  public $s_application = '';

  /**
   * The new client’s email address.
   *
   * @post post
   * @var string
   */
  public $s_mail = '';

  /**
   * The new client’s given name.
   *
   * @post post
   * @var string
   */
  public $s_name_first = '';

  /**
   * The new client’s surname.
   *
   * @post post
   * @var string
   */
  public $s_name_last = '';

  /**
   * The new client’s password.
   *
   * @post post
   * @var string
   */
  public $s_password = '';

  /**
   * The confirm password field (its contents should match s_password).
   *
   * @deprecated Discontinued.
   * @post post
   * @var string
   */
  public $s_password_confirm = '';

  /**
   * The URL to the confirmation page. This link is used in a confirmation email.
   *
   * If empty, URL to default page is used.
   *
   * @post post
   * @var string
   */
  public $url_confirm = '';
}

?>