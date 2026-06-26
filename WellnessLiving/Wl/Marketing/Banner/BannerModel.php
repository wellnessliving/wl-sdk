<?php

namespace WellnessLiving\Wl\Marketing\Banner;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to check Marketing Suite banner visibility and handle dismissals.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 */
class BannerModel extends WlModelAbstract
{
  /**
   * List of banner feature pills.
   *
   * Each element: 
   *
   * <dl>
   *   <dt>string `sid_icon`</dt>
   *   <dd>CSS class suffix for the feature icon.</dd>
   * 
   *   <dt>string `text_label`</dt>
   *   <dd>Feature label text.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_banner_feature = [];

  /**
   * Banner type identifier to display.
   * `null` if not specified by the caller.
   *
   * @get get
   * @var int|null
   */
  public $id_banner_type = null;

  /**
   * The business key within which the request is made.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Whether the promotional banner should be shown.
   *
   * @get result
   * @var bool
   */
  public $show_banner = false;

  /**
   * Banner description line.
   *
   * @get result
   * @var string
   */
  public $text_banner_description = '';

  /**
   * Banner title.
   *
   * @get result
   * @var string
   */
  public $text_banner_title = '';

  /**
   * Current user key.
   *
   * @get result
   * @var string
   */
  public $uid = '';

  /**
   * URL for the "Learn more" help article link in the banner.
   *
   * @get result
   * @var string
   */
  public $url_learn_more = '';

  /**
   * URL to the Marketing Suite subscription/upgrade page.
   *
   * @get result
   * @var string
   */
  public $url_upgrade = '';
}

?>