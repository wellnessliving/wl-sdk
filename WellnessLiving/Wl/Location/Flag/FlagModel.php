<?php

namespace WellnessLiving\Wl\Location\Flag;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information if a user is flagged in a location.
 */
class FlagModel extends WlModelAbstract
{
  /**
   * Array with structure:
   * <tt>null</tt> until loaded or when <var>a_uid</var> was not set.
   *
   * <dl>
   *   <dt>string `uid`</dt>
   *   <dd>Key is passport login ID. </dd>
   * 
   *   <dt>bool `is_flag`</dt>
   *   <dd>Value: <tt>true</tt> if user is flagged; <tt>false</tt> otherwise.</dd>
   * </dl>
   * @get result
   * @var array
   * @deprecated This is old property, which is left for back-compatibility. Use {@link FlagModel::$a_restrictions_multiple} instead.
   */
  public $a_flag;

  /**
   * Array, where keys are UIDs to be checked and values are same as {@link FlagModel::$a_restrictions_single}.
   * `null` if user is not flagged in the location.
   *
   * This field is set, if API gets {@link FlagModel::$a_uid} and not {@link FlagModel::$uid} properties.
   *
   * Keys are user keys. 
   * Values are flag restriction arrays: 
   *
   * <dl>
   *   <dt>bool `is_book`</dt>
   *   <dd>`true` if the user cannot make new reservations.</dd>
   * 
   *   <dt>bool `is_purchase`</dt>
   *   <dd>`true` if the user cannot make new purchases.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_restrictions_multiple = null;

  /**
   *
   * <tt>null</tt> if user is not flagged in the location.
   *
   * This field is set, if API gets {@link FlagModel::$uid} and not {@link FlagModel::$a_uid} properties.
   *
   * <dl>
   *   <dt>bool `is_book`</dt>
   *   <dd>`true` if client cannot make new reservations.</dd>
   * 
   *   <dt>bool `is_purchase`</dt>
   *   <dd>`true` if client cannot make new purchases.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_restrictions_single = null;

  /**
   * User keys.
   * `null` if not set.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid;

  /**
   * <tt>true</tt> if the user is flagged and can make purchases, but cannot make new reservations, <tt>false</tt> if otherwise.
   *
   * <tt>null</tt> until loaded or when {@link FlagModel::$a_uid} was not set.
   *
   * @get result
   * @var bool
   * @deprecated This is old property, which is left for back-compatibility. Use {@link FlagModel::$a_restrictions_single} instead.
   */
  public $is_flag;

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location;

  /**
   * The user's key.
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var string|null
   */
  public $uid;
}

?>