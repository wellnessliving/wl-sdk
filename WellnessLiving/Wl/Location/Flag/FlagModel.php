<?php

namespace WellnessLiving\Wl\Location\Flag;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information if a user is flagged in a location.
 */
class FlagModel extends WlModelAbstract
{
  /**
   * Array with structure:<dl>
   *   <dt>string <var>uid</var></dt>
   *   <dd>Key is passport login ID.</dd>
   *   <dt>bool <var>is_flag</var></dt>
   *   <dd>Value: <tt>true</tt> if user is flagged; <tt>false</tt> otherwise.</dd>
   * </dl>
   * <tt>null</tt> until loaded or when <var>a_uid</var> was not set.
   *
   * @depreated This is old property, which is left for back-compatibility. Use {@link FlagModel::$a_restrictions_multiple} instead.
   * @get result
   * @var array
   */
  public $a_flag;

  /**
   * Array, where keys are UIDs to be checked and values are same as {@link FlagModel::$a_restrictions_single}.
   * <tt>null</tt> if user is not flagged in the location.
   *
   * This field is set, if API gets {@link FlagModel::$a_uid} and not {@link FlagModel::$uid} properties.
   *
   * @get result
   * @var array|null
   */
  public $a_restrictions_multiple = null;

  /**
   * <dl>
   *   <dt>bool <var>is_book</var></dt>
   *   <dd>`true` if client cannot make new reservations.</dd>
   *   <dt>bool <var>is_purchase</var></dt>
   *   <dd>`true` if client cannot make new purchases.</dd>
   * </dl>
   *
   * <tt>null</tt> if user is not flagged in the location.
   *
   * This field is set, if API gets {@link FlagModel::$uid} and not {@link FlagModel::$a_uid} properties.
   *
   * @get result
   * @var array|null
   */
  public $a_restrictions_single = null;

  /**
   * User keys.
   * <tt>null</tt> if not set.
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
   * @depreated This is old property, which is left for back-compatibility. Use {@link FlagModel::$a_restrictions_single} instead.
   * @get result
   * @var bool
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