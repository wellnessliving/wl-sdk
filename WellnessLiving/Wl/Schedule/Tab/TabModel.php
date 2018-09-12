<?php

namespace WellnessLiving\Wl\Schedule\Tab;

use WellnessLiving\WlModelAbstract;

/**
 * List of tabs for "Book now".
 */
class TabModel extends WlModelAbstract
{
  /**
   * List of tabs.
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