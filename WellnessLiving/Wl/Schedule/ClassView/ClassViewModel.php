<?php

namespace WellnessLiving\Wl\Schedule\ClassView;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Schedule\ClassList\ClassListModel;

/**
 * Gets information about a specified class session.
 *
 * A class listing can be retrieved from the {@link ClassListModel} endpoint.
 */
class ClassViewModel extends WlModelAbstract
{
  /**
   * Asset list data.
   *
   * @get result
   * @post result
   * @var array[]|null
   */
  public $a_asset;

  /**
   * Detailed information about the class.
   *
   * This will be `null` if data isn't loaded yet.
   *
   * @get result
   * @post result
   * @var array|null
   */
  public $a_class;

  /**
   * Location data.
   *
   * This will be `null` if data isn't loaded yet.
   *
   * @get result
   * @post result
   * @var array|null
   */
  public $a_location;

  /**
   * A list of sessions to get information for. Every element has the following keys:
   * <dl>
   *   <dt>string <var>dt_date</var></dt>
   *   <dd>The date/time of the session in UTC.</dd>
   *   <dt>string <var>k_class_period</var></dt>
   *   <dd>The session key. 
   * </dl>
   *
   * `null` if requesting a single session.
   *
   * @get get
   * @post get
   * @var array[]|null
   */
  public $a_session_request = null;

  /**
   * A list of sessions with information, received in a multiple session mode.
   *
   * @get result
   * @post result
   * @var array[]
   */
  public $a_session_result;

  /**
   * Staff member list data.
   *
   * This will be `null` if data isn't loaded yet.
   *
   * @get result
   * @post result
   * @var array[]|null
   */
  public $a_staff;

  /**
   * List of other locations where virtual class can be booked.
   * Empty array if class isn't virtual or can't be booked in other locations.
   *
   * @get result
   * @post result
   * @var string[]
   */
  public $a_virtual_location = [];

  /**
   * A list of classes and events that clients should visit before this one.
   *
   * @get result
   * @var array[]
   */
  public $a_visits_required = [];

  /**
   * The date/time of the session.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date = '';

  /**
   * Key of the business in which the action is performed.
   *
   * `null` if key of the business was not passed.
   *
   * Key of the business is required if {@link ClassViewModel} was passed.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The class period key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * A list of sessions to get information for.
   * A serialized array. See {@link ClassViewModel::$a_session_request} for the array structure.
   * Serialization and sending by POST is necessary to send big lists.
   *
   * @post post
   * @var string
   */
  public $s_session_request = '';

  /**
   * The user key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>