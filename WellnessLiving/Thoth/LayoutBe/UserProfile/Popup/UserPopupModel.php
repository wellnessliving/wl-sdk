<?php

namespace WellnessLiving\Thoth\LayoutBe\UserProfile\Popup;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API with data for user profile popup.
 *
 * @method WlModelRequest get()
 */
class UserPopupModel extends WlModelAbstract
{
  /**
   * List of businesses for switching. One element contains:
   *
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Business title.</dd>
   * </dl>
   * @get result
   * @var string[][]
   */
  public $a_business = [];

  /**
   * List of locations for switching. One element contains:
   *
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Location business key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Location title.</dd>
   * </dl>
   * @get result
   * @var string[][]
   */
  public $a_location = [];

  /**
   * List of related profiles. One element contains:
   *
   * <dl>
   *   <dt>string `s_name`</dt>
   *   <dd>Name of the related profile.</dd>
   * 
   *   <dt>string `url_login`</dt>
   *   <dd>Login link for this profile.</dd>
   * </dl>
   * @get result
   * @var string[][]
   */
  public $a_user = [];

  /**
   * Whether this is a backend context.
   * `true` if backend, `false` if frontend.
   *
   * @get get,result
   * @var bool
   */
  public $is_backend = false;

  /**
   * Flag indicating general mode without a selected business.
   *
   * @get result
   * @var bool
   */
  public $is_general = false;

  /**
   * Flag indicating that the current user has staff access.
   *
   * @get result
   * @var bool
   */
  public $is_staff = false;

  /**
   * Current frontend business key.
   *
   * @get get,result
   * @var string
   */
  public $k_business = '';

  /**
   * Show business/location switching selects.
   *
   * @get result
   * @var bool
   */
  public $show_select = false;

  /**
   * Current user ID.
   *
   * @get result
   * @var string
   */
  public $uid = '0';

  /**
   * Logout link.
   *
   * @get result
   * @var string
   */
  public $url_logout = '';

  /**
   * Link to the profile page.
   *
   * @get result
   * @var string
   */
  public $url_profile = '';

  /**
   * Link to schedule (backend access).
   *
   * @get result
   * @var string
   */
  public $url_schedule = '';

  /**
   * Link to staff profile in backend popup.
   *
   * @get result
   * @var string
   */
  public $url_staff = '';
}

?>