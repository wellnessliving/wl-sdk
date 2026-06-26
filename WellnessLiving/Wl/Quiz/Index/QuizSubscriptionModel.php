<?php

namespace WellnessLiving\Wl\Quiz\Index;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to get and update subscription plan of the business for the Forms feature.
 *
 * @method WlModelRequest put()
 */
class QuizSubscriptionModel extends WlModelAbstract
{
  /**
   * New subscription plan.
   *
   * @put post
   * @var int
   */
  public $id_plan = 0;

  /**
   * Business key.
   *
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Redirect URL after subscription is changed.
   *
   * @put result
   * @var string
   */
  public $url_redirect = '';
}

?>