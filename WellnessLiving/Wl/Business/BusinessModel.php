<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;

/**
 * Creates a new business.
 */
class BusinessModel extends WlModelAbstract
{
  /**
   * Empty array means to not create a staff member.
   * Otherwise, information about staff member to be created in the business.
   *
   *  <dl>
   *    <dt>bool <var>is_enter</var></dt>
   *    <dd>Should created staff member be automatically signed in or not.</dd>
   *    <dt>string <var>text_mail</var></dt>
   *    <dd>Email address to be used to sign in.</dd>
   *    <dt>string <var>text_name_first</var></dt>
   *    <dd>The first name of the staff member.</dd>
   *    <dt>string <var>text_name_last</var></dt>
   *    <dd>The last name of the staff member.</dd>
   *  </dl>
   *
   * @post post
   * @var bool
   */
  public $a_staff_member = [];

  /**
   * The business locale.
   *
   * @post post
   * @var int
   * @see LocaleSid
   */
  public $id_locale;

  /**
   * `true` if location should be also created for the business.
   * `false` if otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_location_create = false;

  /**
   * The key of the created business.
   *
   * @post result
   * @var string
   */
  public $k_business;

  /**
   * The key of the business type.
   *
   * @post post
   * @var string
   */
  public $k_business_type;

  /**
   * The city key of the business.
   *
   * @post post
   * @var string
   */
  public $k_office_city;

  /**
   * The address of the business. Optional.
   *
   * @post post
   * @var string
   */
  public $text_office_address = '';

  /**
   * The postal code of the business. Optional.
   *
   * @post post
   * @var string
   */
  public $text_office_postal = '';

  /**
   * The phone number of the business.
   *
   * @post post
   * @var string
   */
  public $text_phone;

  /**
   * The title of the business.
   *
   * @post post
   * @var string
   */
  public $text_title;
}

?>