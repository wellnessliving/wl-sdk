<?php

namespace WellnessLiving\Wl\Schedule\Tab;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of tabs for bookable services specific to the user and the location.
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
   *     The tab type’s ID which is one of the {@link \WellnessLiving\Wl\Classes\Tab\TabSid} constants.
   *   </dd>
   *   <dt>
   *     int|null <var>id_class_tab_system</var>
   *   </dt>
   *   <dd>
   *     If this tab has redefined a default system Class Tab then it references a constant defined in
   *     {@link \WellnessLiving\Wl\Classes\Tab\TabSid}.
   *
   *     It is `null` otherwise.
   *   </dd>
   *   <dt>
   *     string|null <var>k_class_tab</var>
   *   </dt>
   *   <dd>
   *     The Class Tab key. It is `null` if it is a system Tab.
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
   *     Tab title.
   *   </dd>
   * </dl>
   *
   * It is `null` if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_tab = null;

  /**
   * The key of the current business.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The key of the current location.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The key of the current user.
   * It is not used on server side as the server side uses the current user to build a list of tabs.
   * So the model must depend on the current user ID.
   * If we change to a relative (the current user is changed, but the application is not restarted),
   * we will request information about the booking tabs for this user's relative.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>