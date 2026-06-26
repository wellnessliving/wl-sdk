<?php

namespace WellnessLiving\Wl\Insurance\Profile;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Wellness Program membership cancel API.
 *
 * @method WlModelRequest delete() Reactivates cancelled Wellness Program membership.
 * @method WlModelRequest put() Api method to cancel client's Wellness Program membership together with all upcoming visits related to it.
 */
class InsuranceCancelModel extends WlModelAbstract
{
  /**
   * The key of the business where we need to cancel Wellness Program membership.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Key of login promotion to cancel.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_login_promotion;

  /**
   * Reason to cancel Wellness Program membership.
   *
   * @put post
   * @var string
   */
  public $s_reason = '';

  /**
   * The key of the user to cancel Wellness Program membership.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $uid;
}

?>