<?php

namespace WellnessLiving\Wl\Tuition\Enrollment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Model to get list of tuition, which gives access to a certain event from the microservice.
 *
 * @method WlModelRequest put() Allows canceling certain event enrollments within tuition.  Send all users and events, which should be canceled to reduce tuition payment, cancel visits, and deactivate even pass.
 */
class TuitionEnrollmentCancelModel extends WlModelAbstract
{
  /**
   * List of users and events to be canceled.
   *
   * Each element has two keys: `uid` and `k_class`.
   *
   * <dl>
   *   <dt>string `k_class`</dt>
   *   <dd>Enrolled event ID.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>Enrolled user ID.</dd>
   * </dl>
   * @put post
   * @var array[]
   */
  public $a_event_cancel = [];

  /**
   * Whether upcoming visits should be canceled or not.
   *
   * @put post
   * @var bool
   */
  public $is_cancel_visits = false;

  /**
   * Whether even pass should be deactivated or not.
   *
   * @put post
   * @var bool
   */
  public $is_pass_deactivate = false;

  /**
   * Key of the business.
   *
   * @put post
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the tuition purchase item. This is enrollment key, which can be got from {@link TuitionEnrollmentListModel}.
   *
   * @put post
   * @var string
   */
  public $k_purchase_item_tuition = '';
}

?>