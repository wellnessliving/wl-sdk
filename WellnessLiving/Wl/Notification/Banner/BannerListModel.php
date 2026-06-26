<?php

namespace WellnessLiving\Wl\Notification\Banner;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages a list of banners.
 *
 * @method WlModelRequest get() Loads all banners that should be shown to the client.
 * @method WlModelRequest put() Stores that user closes the banner.
 */
class BannerListModel extends WlModelAbstract
{
  /**
   * List of banners.
   *
   * @get result
   * @var array
   */
  public $a_banner_list;

  /**
   * The key of the business where the list of available banners will be loaded.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the banner to be closed.
   *
   * @put post
   * @var string
   */
  public $k_notification_banner = '';

  /**
   * User for which available banners will be loaded.
   *
   * @get get
   * @put get
   * @var string
   */
  public $uid = '';
}

?>