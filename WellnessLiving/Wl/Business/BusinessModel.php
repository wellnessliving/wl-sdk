<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Creates a new business.
 *
 * @method WlModelRequest post() Creates new business.  Used during the self-onboarding flow when a new client signs up for WellnessLiving. Creates the business with its default integrations, optional first location, default service categories, and an optional owner staff account - all in a single transaction. Rate-limited per IP and globally to prevent abuse.
 * @method WlModelRequest put() Claims business.  Used when a prospective client claims an existing unclaimed business record during onboarding. Activates trial features, updates the location contact details, and optionally creates an owner staff account. The business must not already be claimed and the location must belong to it.
 */
class BusinessModel extends WlModelAbstract
{
  /**
   * Empty array means to not create a staff member.
   * Otherwise, information about staff member to be created in the business.
   *
   * <dl>
   *   <dt>bool `is_enter`</dt>
   *   <dd>Should created staff member be automatically signed in or not.</dd>
   * 
   *   <dt>string `text_mail`</dt>
   *   <dd>Email address to be used to sign in.</dd>
   * 
   *   <dt>string `text_name_first`</dt>
   *   <dd>The first name of the staff member.</dd>
   * 
   *   <dt>string `text_name_last`</dt>
   *   <dd>The last name of the staff member.</dd>
   * </dl>
   * @post post
   * @put post
   * @var array
   */
  public $a_staff_member = [];

  /**
   * The business locale.
   *
   * @post post
   * @var int
   * @see LocaleSid
   */
  public $id_locale = 0;

  /**
   * `true` if location should be also created for the business.
   * `false` if otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_location_create = false;

  /**
   * @post post
   * @put post
   * @var bool
   */
  public $is_mail_send = false;

  /**
   * The key of the business.
   *
   * @post result
   * @put post,result
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the business type.
   *
   * @post post
   * @var string
   */
  public $k_business_type = '';

  /**
   * The key of the location for update or after creating.
   * `null` if location is not created.
   *
   * @post result
   * @put post,result
   * @var string|null
   */
  public $k_location = null;

  /**
   * The city key of the business.
   * Optional.
   *
   * @post post
   * @var string
   */
  public $k_office_city = '0';

  /**
   * Microsoft Clarity session ID associated with the business claim session.
   *
   * @post post
   * @put post
   * @var string
   */
  public $s_clarity_session_id = '';

  /**
   * The email address of the location.
   * Optional.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_mail = '';

  /**
   * The address of the business.
   * Optional.
   *
   * @post post
   * @var string
   */
  public $text_office_address = '';

  /**
   * The postal code of the business.
   * Optional.
   *
   * @post post
   * @var string
   */
  public $text_office_postal = '';

  /**
   * The phone number of the business, staff and location.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_phone = '';

  /**
   * The title of the business.
   *
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * The UID of the created staff member or `null` if no staff member should be created.
   *
   * @post result
   * @put result
   * @var string|null
   */
  public $uid = null;

  /**
   * Url for password change page.
   *
   * Filled only when creating staff member, otherwise `null`.
   *
   * @post result
   * @put result
   * @var string|null
   */
  public $url_password_change = null;

  /**
   * The URL of the business website.
   * Optional.
   *
   * @post post
   * @var string
   */
  public $url_site = '';
}

?>