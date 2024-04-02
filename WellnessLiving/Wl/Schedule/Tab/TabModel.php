<?php

namespace WellnessLiving\Wl\Schedule\Tab;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of tabs for bookable services specific to the user and the location.
 *
 * The names and contents of these tabs can be customized by the business. For example, a business may have tabs named
 * ‘Appointments’, ‘Group Appointments’, and ‘Room Rentals’.
 */
class TabModel extends WlModelAbstract
{
  /**
   * An array containing information about tabs to present to the user.
   * Each array index corresponds to a tab.
   * Each array element is an array that contains the following fields:
   * <dl>
   *   <dt>
   *     int <var>id_class_tab_object</var>
   *   </dt>
   *   <dd>
   *     The tab type ID which is one of the {@link \WellnessLiving\Wl\Classes\Tab\TabSid} constants.
   *   </dd>
   *   <dt>
   *     int|null <var>id_class_tab_system</var>
   *   </dt>
   *   <dd>
   *     If this tab has redefined a default system Class Tab then it references a constant defined in
   *     {@link \WellnessLiving\Wl\Classes\Tab\TabSid}.
   *
   *     Otherwise, this will be `null`.
   *   </dd>
   *   <dt>
   *     string|null <var>k_class_tab</var>
   *   </dt>
   *   <dd>
   *     The class tab key. This will be `null` if it's a system tab.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     A unique identifier in the list.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The tab title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_tab;

  /**
   * Whether we are inside the widget or not.
   *
   * @get get
   * @var bool
   */
  public $is_widget = false;

  /**
   * The key of the current business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the current location.
   *
   * @get get
   * @var string
   */
  public $k_location;

  /**
   * The key of the current user.
   * This isn't used on the back end as the back end uses the current user to build a list of tabs.
   * Therefore, the model must depend on the current user ID.
   * If changed to a relative (the current user is changed, but the application isn't restarted),
   * information about the booking tabs for this user's relative will be requested.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>