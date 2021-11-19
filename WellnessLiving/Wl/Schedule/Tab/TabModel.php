<?php

namespace WellnessLiving\Wl\Schedule\Tab;

use WellnessLiving\WlModelAbstract;

/**
 * List of tabs for "Book now".
 */
class TabModel extends WlModelAbstract
{
  /**
   * List of "Book now" tabs. Every element has next keys:
   * <dl>
   *   <dt>
   *     int <var>id_class_tab_object</var>
   *   </dt>
   *   <dd>
   *     ID of tab type. Member of {@link \WellnessLiving\Wl\Classes\Tab\TabSid}.
   *   </dd>
   *   <dt>
   *     int|null <var>id_class_tab_system</var>
   *   </dt>
   *   <dd>
   *     If this tab redefines default system tab, ID of tab type.
   *     Member of {@link \WellnessLiving\Wl\Classes\Tab\TabSid}.
   *     <tt>null</tt> otherwise.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     Unique identifier in list.
   *   </dd>
   *   <dt>
   *     string|null <var>k_class_tab</var>
   *   </dt>
   *   <dd>
   *     If this tab is system default, <tt>null</tt>.
   *     Tab key otherwise.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     Tab title.
   *   </dd>
   * </dl>
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_tab = null;

  /**
   * Current business ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Current location ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * Current user ID.
   * It is not used on server side.
   * But server side uses current user to build list of tabs.
   * So, model must depend on current user ID.
   * If we change to relative (current user is changed, but application is not restarted),
   * we will request information about book tabs for this user-relative.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>