<?php

namespace WellnessLiving\Core\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that allows new clients to be registered.
 *
 * The {@link \WellnessLiving\Wl\Lead\LeadModel} endpoint is recommended for registering new users. However, this RegisterModel
 * endpoint isn't enabled by default. To enable this endpoint, use the contact form in the developer portal.
 */
class RegisterModel extends WlModelAbstract
{
  /**
   * The additional data about new users.
   *
   * <dl>
   *   <dt>string <var>[k_business]</var></dt>
   *   <dd>
   *     The key of the business for the WellnessLiving project to register the user in.
   *
   *     The behavior may vary for different applications. If the application is connected to a given business, this
   *     property can always be empty (all clients will be registered in the connected business). If the business is set
   *     for such an application and is different from the business from the application settings, an error will occur.
   *
   *     If the application isn't connected to the business, any business key can be set. This doesn't require any special
   *     privileges, as registration is a publicly available action.
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
   * The new client email address.
   *
   * @post post
   * @var string
   */
  public $s_mail = '';

  /**
   * The new client given name.
   *
   * @post post
   * @var string
   */
  public $s_name_first = '';

  /**
   * The new client surname.
   *
   * @post post
   * @var string
   */
  public $s_name_last = '';

  /**
   * The new client password.
   *
   * @post post
   * @var string
   */
  public $s_password = '';

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