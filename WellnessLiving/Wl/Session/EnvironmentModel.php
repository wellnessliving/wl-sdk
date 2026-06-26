<?php

namespace WellnessLiving\Wl\Session;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns information about current session environment (business ID, user information, etc.).
 *
 * @method WlModelRequest get() Returns current session environment.
 * @method WlModelRequest put() Saves current location of business for current user.
 */
class EnvironmentModel extends WlModelAbstract
{
  /**
   * List of businesses which are available in given application.
   * <tt>null</tt> for default application.
   *
   * @get result
   * @var string[]|null
   */
  public $a_business;

  /**
   * List of businesses keys, which are connected to franchise.
   *
   * <tt>null</tt> if current business is not part of franchise.
   *
   * @get result
   * @var string[]|null
   */
  public $a_business_franchise_all;

  /**
   * List of business franchisee keys.
   *   Can be limited by levels to which a user can view/access in frontend.
   *   <tt>null</tt> if current business is not part of franchise or if 'Allow clients to switch between franchise locations' is OFF.
   *
   * @get result
   * @var string[]|null
   */
  public $a_business_franchisee;

  /**
   * Payment alert data. `null` if user is not logged or none businesses are available for user, or if it's not backend.
   * Otherwise, contains data: 
   *
   * <dl>
   *   <dt>int `i_duration`</dt>
   *   <dd>
   *     Time left in seconds. <var>null</var> if business account is not created
   * or if service interruption dates aren't specified.
   *   </dd>
   * 
   *   <dt>bool `is_alert`</dt>
   *   <dd>Determines whether to show an alert. Alert should be shown only once per session.</dd>
   * 
   *   <dt>bool `is_churn`</dt>
   *   <dd>Determines whether the business is churned.</dd>
   * 
   *   <dt>string `url_billing`</dt>
   *   <dd>Link to business billing page on the web.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_payment_alert = null;

  /**
   * Settings of splash screen customization for business {@link Wl_Session_EnvironmentModel.k_business}:
   * <tt>null</tt> if splash screen in not customized for business.
   *
   * <dl>
   *   <dt>array `a_background`</dt>
   *   <dd>Background image.</dd>
   * 
   *   <dt>array `a_gradient`</dt>
   *   <dd>Background color.</dd>
   * 
   *   <dt>array `a_image`</dt>
   *   <dd>Logo image.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_splash_screen;

  /**
   * Local date with time now in current location {@link EnvironmentModel::$k_location}.
   *
   * @get result
   * @var string
   */
  public $dtl_now;

  /**
   * Whether exists form to confirm during registration process.
   *
   * @get result
   * @var bool
   */
  public $has_form_quiz;

  /**
   * Whether the merchant is configured for the client's home location or for business {@link EnvironmentModel::$k_business}.
   *
   * @get result
   * @var bool
   */
  public $has_merchant;

  /**
   * Currency ID.
   *
   * @get result
   * @var string
   */
  public $id_currency;

  /**
   * Business locale.
   *
   * @get result
   * @var int
   */
  public $id_locale;

  /**
   * Current place ID. For the Web version of the site is determined by the current session.
   *
   * @get result
   * @var int
   */
  public $id_place;

  /**
   * Achieve subscription plan ID.
   *
   * @get result
   * @var int
   */
  public $id_plan_achieve;

  /**
   * Base subscription plan ID.
   *
   * @get result
   * @var int
   */
  public $id_plan_base;

  /**
   * Marketing subscription plan ID.
   *
   * @get result
   * @var int
   */
  public $id_plan_marketing;

  /**
   * Current travel mode ID in business.
   *
   * `null` if travel mode is disabled.
   *
   * @get result
   * @var int|null
   */
  public $id_travel_mode = null;

  /**
   * Whether AI agent chat (CAASI) is available for current business.
   * * `true` if chat is available
   * * `false` if chat is not available
   *
   * @get result
   * @var bool
   */
  public $is_aiagent_chat = false;

  /**
   * Determines current business has custom application. If <tt>true</tt> application has custom application, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_application_custom;

  /**
   * <tt>true</tt> if user must be redirected to billing page to enter credit card; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_billing_required;

  /**
   * <tt>true</tt> if clients must sign in to book an appointment; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_booking_appointment_authorize;

  /**
   * <tt>true</tt> if user must be redirected from booking page to billing page to enter credit card;
   *   <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_booking_required_billing;

  /**
   * Determines if a business has multiple locations.
   *
   * @get result
   * @var bool
   */
  public $is_business_location_multiple;

  /**
   * `true` id profile details can be shared with the new location while adding a client that already has an existing
   *   profile in franchise, `false` - otherwise.
   *
   * * `null` if not franchise.
   *
   * @get result
   * @var bool|null
   */
  public $is_client_profile_share;

  /**
   * If clients are allowed to select a date and time, then the available asset while asset booking.
   *
   * @get result
   * @var bool
   */
  public $is_client_select_date_asset;

  /**
   * <tt>true</tt> - user has unassigned contract(s); <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_contract;

  /**
   * `true` is allowed relationship to display, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_family_relation_display_client;

  /**
   * <tt>true</tt> - if business is franchisor; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_franchisor;

  /**
   * <tt>true</tt> to use page of geographical search of locations (possible for franchise case only); <tt>false</tt> to use simple select of locations from list.
   *
   * @get result
   * @var bool
   */
  public $is_location_geo;

  /**
   * <tt>true</tt> - in backend application user must be redirected to location selection; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_location_redirect;

  /**
   * <tt>true</tt> if user must be redirected to profile page to enter mandatory fields; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_profile_required;

  /**
   * Indicates whether to obtain customer required information such as required profile data and waiver. Mostly used for selenium tests running purposes to avoid creating profile filled with required
   * information. If <tt>true</tt> all required information must be obtained before client will be allowed to use application, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_request_required_information;

  /**
   * `true` if you want the API to switch to staff back office; `false` otherwise.
   *
   * @put post
   * @var bool
   */
  public $is_staff = false;

  /**
   * <tt>true</tt> if user is traveler; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_traveller;

  /**
   * <tt>true</tt> if it is required to sign online waiver, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_waiver_required;

  /**
   * Key of business to be set as current.
   *
   * @get result
   * @put post
   * @var string
   */
  public $k_business = '0';

  /**
   * Not <tt>null</tt> for franchise application only.
   *
   * @get result
   * @var string|null
   */
  public $k_business_franchisor;

  /**
   * Currency key.
   *
   * @get result
   * @var string
   */
  public $k_currency;

  /**
   * Key of location to be set as current.
   *
   * @get result
   * @put post
   * @var string
   */
  public $k_location = '0';

  /**
   * Application ID.
   *
   * @get get
   * @put get
   * @var string
   */
  public $s_application_id = '0';

  /**
   * Key to check session in a case of business change.
   *
   * @put post
   * @var string
   */
  public $s_business_change = '';

  /**
   * @get result
   * @var string
   */
  public $text_country_code = '';

  /**
   * Current user key. <tt>null</tt> if user is not signed in.
   *
   * @get result
   * @var string|null
   */
  public $uid;

  /**
   * Business login URL.
   *
   * `null` if user is not logged in or none businesses are available for user.
   *
   * @get result
   * @var string|null
   */
  public $url_login = '';
}

?>