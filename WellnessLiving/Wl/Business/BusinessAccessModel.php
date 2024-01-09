<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\Wl\WlRegionSid;
use WellnessLiving\WlModelAbstract;

/**
 * Information about business of given staff member.
 */
class BusinessAccessModel extends WlModelAbstract
{
  /**
   * Businesses where giver user is a staff member. Primary keys in table {@link \RsBusinessSql}.
   * Leaving this field for backwards compatibility.
   *
   * @get result
   * @var string[]
   */
  public $a_business = [];

  /**
   * The list of accessible businesses with their corresponding data, each value is an array of structure:
   * <dl>
   *   <dt>int <var>id_region</var></dt>
   *   <dd>Business region, one of {@link WlRegionSid} constants, `null` if no regions are set as current.</dd>
   *   <dt>string <var>k_business</var></dt>
   *   <dd>Business key.</dd>
   *   <dt>string <var>text_office_address</var></dt>
   *   <dd>Business address.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Business title.</dd>
   *   <dt>string <var>url_logo</var></dt>
   *   <dd>Business logo url. Empty if there is no logo in business.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_business_data = [];

  /**
   * `true` if API is being used from backend, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_backend = true;

  /**
   * User Facebook id. Not empty if user is logging with facebook.
   * Empty if uid is already known or user is logging in another way.
   *
   * @get get
   * @var string
   */
  public $s_facebook_id = '';

  /**
   * Key of Microsoft user.
   * Not empty if user is logging with Microsoft.
   *
   * @get get
   * @var string
   */
  public $s_microsoft_id = '';

  /**
   * User apple authorization code. Not empty if user is logging with apple.
   * Empty if uid is already known or user is logging in another way.
   *
   * @get get
   * @var string
   */
  public $text_authorization_apple = '';

  /**
   * Google plus user id. Not empty if user is logging with Google.
   * Empty if uid is already known or user is logging in another way.
   *
   * @get get
   * @var string
   */
  public $text_google_plus = '';

  /**
   * User's email to determine uid. Not empty if user is logging with email or with Google.
   * Empty if uid is already known or user is logging in another way.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * User key. Empty if user is not logged in, but their authorization data is known.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * User key, determined by user email. Empty if uid is not empty.
   *
   * @get result
   * @var string
   */
  public $uid_mail = '';
}

?>