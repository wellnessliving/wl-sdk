<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\Wl\WlRegionSid;
use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information about a given staff member's business.
 */
class BusinessAccessModel extends WlModelAbstract
{
  /**
   * The businesses the staff member belongs to.
   * Note that this field is here for backwards compatibility.
   *
   * @get result
   * @var string[]
   */
  public $a_business = [];

  /**
   * The list of accessible businesses with their corresponding data. Each value is an array with the next structure:
   * <dl>
   *   <dt>int <var>id_region</var></dt>
   *   <dd>The business region. One of the {@link WlRegionSid} constants. This will be `null` if no regions are currently set.</dd>
   *   <dt>string <var>k_business</var></dt>
   *   <dd>The business key.</dd>
   *   <dt>string <var>text_office_address</var></dt>
   *   <dd>The business address.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The business title.</dd>
   *   <dt>string <var>url_logo</var></dt>
   *   <dd>The business logo URL. This will be empty if the business hasn't added a logo.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_business_data = [];

  /**
   * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_backend = true;

  /**
   * The staff member's Facebook ID. This won't be empty if the staff member is logging in with Facebook.
   * This will be empty if the UID is already known or the staff member is logging in another way.
   *
   * @get get
   * @var string
   */
  public $s_facebook_id = '';

  /**
   * The staff member's Microsoft key.
   * This won't be empty if the staff member is logging in with Microsoft.
   *
   * @get get
   * @var string
   */
  public $s_microsoft_id = '';

  /**
   * The staff member's Apple authorization code. This won't be empty if the staff member is logging in with Apple.
   * This will be empty if the UID is already known or the staff member is logging in another way.
   *
   * @get get
   * @var string
   */
  public $text_authorization_apple = '';

  /**
   * The Google Plus user ID. This won't be empty if the staff member is logging in with Google.
   * This will be empty if the UID is already known or the staff member is logging in another way.
   *
   * @get get
   * @var string
   */
  public $text_google_plus = '';

  /**
   * User key. Empty if user is not logged in, but their authorization data is known.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * The staff member's email to determine their UID. This won't be empty if the staff member is logging in with email or with Google.
   * This will be empty if the UID is already known or the staff member is logging in another way.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * The staff member key, determined by their email. This will be empty if the UID isn't empty.
   *
   * @get result
   * @var string
   */
  public $uid_mail = '';
}

?>