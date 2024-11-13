<?php

namespace WellnessLiving\Wl\Announcement;

use WellnessLiving\Core\Sid\SortOrderSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of announcements.
 */
class AnnouncementListModel extends WlModelAbstract
{
  /**
   * List of announcements.
   *
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * Order ID for list of announcements.
   *
   * Used only when {@link AnnouncementListModel::$is_backend} is `true`.
   *
   * `null` in case when use default order.
   *
   * @get get,result
   * @var int|null
   * @see SortOrderSid
   */
  public $id_order = null;

  /**
   * Sort field ID for list of announcements.
   *
   * Used only when {@link AnnouncementListModel::$is_backend} is `true`.
   *
   * `null` in case when use default field.
   *
   * @get get,result
   * @var int|null
   */
  public $id_sort_field = null;

  /**
   * If `true`, the API is being used from backend. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key for which need show announcement.
   *
   * `null` in case when need show location for all locations in business.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The filter phrase to filter announcements by name.
   *
   * @get get
   * @var string
   */
  public $text_search = '';
}

?>