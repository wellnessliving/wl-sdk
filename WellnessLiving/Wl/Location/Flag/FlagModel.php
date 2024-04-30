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
   *   <dd>Key:</dd>
   *   <dt>bool <var>is_flag</var></dt>
   *   <dd>Value: <tt>true</tt> if user is flagged; <tt>false</tt> otherwise.</dd>
   * </dl>
   * <tt>null</tt> until loaded or when <var>a_uid</var> was not set.
   *
   * @get result
   * @var array
   */
  public $a_flag;

  /**
   * User keys. Each element is a primary key in the {@link \PassportLoginSql} table.
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid;

  /**
   * <tt>true</tt> if the user is flagged, <tt>false</tt> if otherwise.
   *
   * <tt>null</tt> until loaded or when {@link \WellnessLiving\Wl\Location\Flag\FlagModel::$a_uid} was not set.
   *
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