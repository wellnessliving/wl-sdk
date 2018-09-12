<?php

namespace WellnessLiving\Wl\Event\Book\EventList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of events.
 */
class ListModel extends WlModelAbstract
{

  /**
   * List of event identifiers.
   *
   * Order of items in this array is the order in which elements should be shown.
   *
   * @get result
   * @var array
   */
  public $a_event = [];

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business=null;

  /**
   * ID of category tab.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;
}

?>