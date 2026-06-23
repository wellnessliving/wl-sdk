<?php

namespace WellnessLiving\Wl\Announcement;

use WellnessLiving\Core\Sid\SortOrderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of announcements.
 *
 * @method WlModelRequest get() Returns a list of announcements for the given business and location.  Retrieves published announcements visible to the current user, optionally filtered to a single location.  In backend mode the caller can also sort the results by column and direction, and the chosen sort  preference is persisted per user so the backend grid remembers  it across requests. Access is validated against announcement editor permissions for the business.
 */
class AnnouncementListModel extends WlModelAbstract
{
  /**
   * List of announcements. Each element has the following keys: 
   *
   * <dl>
   *   <dt>string[] `a_location`</dt>
   *   <dd>Location keys where the announcement is published. </dd>
   * 
   *   <dt>string `dtl_create`</dt>
   *   <dd>Creation date in local MySQL format.</dd>
   * 
   *   <dt>string|null `dtl_publish`</dt>
   *   <dd>Local date and time the announcement is published in MySQL format. `null` if not set.</dd>
   * 
   *   <dt>string|null `dtl_unpublish`</dt>
   *   <dd>Local date and time the announcement is unpublished in MySQL format. `null` if not set.</dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Announcement description as HTML.</dd>
   * 
   *   <dt>string `html_description_clear`</dt>
   *   <dd>Announcement description text stripped of HTML tags.</dd>
   * 
   *   <dt>int|null `i_order`</dt>
   *   <dd>Sort order. `null` if the announcement is not pinned.</dd>
   * 
   *   <dt>int `id_status`</dt>
   *   <dd>Announcement status ID.</dd>
   * 
   *   <dt>bool `is_pin`</dt>
   *   <dd>`true` if the announcement is pinned, `false` otherwise.</dd>
   * 
   *   <dt>string `k_announcement`</dt>
   *   <dd>Announcement key. </dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key. </dd>
   * 
   *   <dt>string `text_create_date`</dt>
   *   <dd>Formatted creation date.</dd>
   * 
   *   <dt>string `text_publish_date`</dt>
   *   <dd>Formatted publish date.</dd>
   * 
   *   <dt>string `text_publish_date_short`</dt>
   *   <dd>Formatted publish date with month name but without day of week.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Announcement title.</dd>
   * 
   *   <dt>string `text_unpublish_date`</dt>
   *   <dd>Formatted unpublish date.</dd>
   * 
   *   <dt>string `uid_create`</dt>
   *   <dd>Key of the user who created the announcement. </dd>
   * 
   *   <dt>string `url_detail`</dt>
   *   <dd>URL of the announcement detail page.</dd>
   * 
   *   <dt>string `url_image`</dt>
   *   <dd>URL of the announcement image.</dd>
   * 
   *   <dt>string `xml_description`</dt>
   *   <dd>Announcement description as XML.</dd>
   * </dl>
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