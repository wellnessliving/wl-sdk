<?php

namespace WellnessLiving\Wl\Announcement;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete announcement.
 *
 * @method WlModelRequest delete() Deletes announcement.  {@inheritdoc}
 * @method WlModelRequest get() Returns information about the announcement.  {@inheritdoc}
 * @method WlModelRequest post() Creates/updates announcement.  {@inheritdoc}
 * @method WlModelRequest put() Sets announcement 'pinned' status. Only one announcement can be pinned for business.  {@inheritdoc}
 */
class AnnouncementElementModel extends WlModelAbstract
{
  /**
   * List of locations keys.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_location = [];

  /**
   * The date and time when the announcement was published.
   *
   * This will be `null` if the published date is not set yet.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $dtl_publish = null;

  /**
   * The date and time when the announcement was unpublished.
   *
   * This will be `null` if the unpublished date is not set yet.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $dtl_unpublish = null;

  /**
   * Announcement description.
   *
   * @get result
   * @var string
   */
  public $html_description;

  /**
   * Order to sort announcements.
   *
   * This will be `null` if sort order is not set yet (announcement is not pinned).
   *
   * @get result
   * @var int|null
   */
  public $i_order = null;

  /**
   * Announcement status ID.
   *
   * @get result
   * @var int
   */
  public $id_status;

  /**
   * If `true`, the API is being used from backend. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * `true` to pin the announcement, `false` to unpin.
   *
   * @put post
   * @var bool
   */
  public $is_pin = false;

  /**
   * Announcement key.
   *
   * @delete get
   * @get get,result
   * @post get,result
   * @put get
   * @var string
   */
  public $k_announcement = '';

  /**
   * The string representation of the announcement's image key.
   *
   * `null` if the announcement doesn't have an image.
   *
   * @get result
   * @var string|null
   */
  public $k_announcement_image = null;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * The action that must be performed to the announcement image.
   *
   * @post post
   * @var string
   */
  public $s_command = '';

  /**
   * The date and time when the announcement was published in human format.
   *
   * @get result
   * @var string
   */
  public $text_publish_date = '';

  /**
   * The date when the announcement was published in human format.
   *
   * @get result
   * @var string
   */
  public $text_publish_date_short = '';

  /**
   * Title of announcement.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * Announcement image url.
   *
   * @get result
   * @var string
   */
  public $url_image = '';

  /**
   * Description of announcement.
   *
   * @get result
   * @post post
   * @var string
   */
  public $xml_description = '';
}

?>