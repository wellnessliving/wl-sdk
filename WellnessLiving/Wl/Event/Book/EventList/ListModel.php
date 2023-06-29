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
   * @var string[]
   */
  public $a_event;

  /**
   * <tt>true</tt> if exist at least one virtual event
   * by specific {@link \WellnessLiving\Wl\Event\Book\EventList\ListModel::$k_business} and
   * {@link \WellnessLiving\Wl\Event\Book\EventList\ListModel::$k_class_tab},
   * <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_virtual_service;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the category tab.
   * If empty, select only elements with not specified book tab.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * The user's key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>