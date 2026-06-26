<?php

namespace WellnessLiving\Wl\Profile\Timezone;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to get and update timezone in user's profile.
 *
 * @method WlModelRequest get() Gets a list of timezones with currently selected user's timezone and the business policy adjustment whether  clients are allowed to adjust timezone.
 * @method WlModelRequest put() Updates selected timezone for the site visitor in the given business.
 */
class ProfileTimezoneModel extends WlModelAbstract
{
  /**
   * List of timezones. Keys - timezone keys;
   * Values - sub array with next keys:
   *
   * <dl>
   *   <dt>string `k_geo_timezone`</dt>
   *   <dd>Timezone key.</dd>
   * 
   *   <dt>int `i_shift`</dt>
   *   <dd>Shift time zone.</dd>
   * 
   *   <dt>string `s_file`</dt>
   *   <dd>File name.</dd>
   * 
   *   <dt>int `i_order`</dt>
   *   <dd>Order.</dd>
   * 
   *   <dt>string `text_abbr`</dt>
   *   <dd>Timezone abbreviation.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Timezone title.</dd>
   * 
   *   <dt>string `k_timezone`</dt>
   *   <dd>Timezone key.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_timezone = [];

  /**
   * If a timezone deprecation validation is needed.
   *
   * `true` if required, `false` - otherwise.
   *
   * @put post
   * @var bool
   */
  public $is_deprecate_restrict = false;

  /**
   * Whether clients are allowed to adjust timezone.
   *
   * `true` if allowed, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_profile_timezone;

  /**
   * Key of the business, in which user selected timezone.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of the timezone, which user selected to see site in.
   *
   * @put post
   * @var string
   */
  public $k_timezone = '0';

  /**
   * Key of the timezone which is currently selected.
   *
   * @get result
   * @var string
   */
  public $k_timezone_select = '0';
}

?>