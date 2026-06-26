<?php

namespace WellnessLiving\Wl\Login\Promotion;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for controlling cancelled promotion options.
 *
 * @method WlModelRequest put() Updates a cancelled promotion's options.
 */
class PromotionPayCancelModel extends WlModelAbstract
{
  /**
   * Whether the client may use remaining visits after promotion cancellation.
   *
   * @put post
   * @var bool
   */
  public $is_use;

  /**
   * The key of the business to which the promotion belongs.
   *
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Key of login promotion to update options for.
   *
   * @put get
   * @var string
   */
  public $k_login_promotion;

  /**
   * Key of the user performing the request.
   *
   * @put get
   * @var string
   */
  public $uid;
}

?>