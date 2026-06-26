<?php

namespace WellnessLiving\Thoth\ProgressLog\ProfilePage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Provides an endpoint to get pre-rendered progress log profile page.
 *
 * @method WlModelRequest get()
 */
class ProgressLogProfilePageViewModel extends WlModelAbstract
{
  /**
   * Date to compare progress log with.
   * `null` to only display latest values without comparison.
   *
   * @get get
   * @var string|null
   */
  public $dl_compare = null;

  /**
   * Rendered progress log profile page.
   *
   * @get result
   * @var string
   */
  public $html_view;

  /**
   * Key of the business, in which profile page is rendered.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the user who is viewing the profile page.
   *
   * @get get
   * @var string
   */
  public $uid_actor = '';

  /**
   * Key of the user, whose progress log profile page to render.
   *
   * @get get
   * @var string
   */
  public $uid_client = '';
}

?>