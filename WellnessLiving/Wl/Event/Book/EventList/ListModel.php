<?php

namespace WellnessLiving\Wl\Event\Book\EventList;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a list of events for a given class tab.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of event identifiers.
   *
   * The order of items in this array matches the order in which elements should be displayed.
   *
   * @get result
   * @var array
   */
  public $a_event = [];

  /**
   * The ID of the business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business=null;

  /**
   * The ID of the category tab.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * The user's key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>