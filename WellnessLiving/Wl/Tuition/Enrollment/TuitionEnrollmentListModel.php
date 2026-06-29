<?php

namespace WellnessLiving\Wl\Tuition\Enrollment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Model to get list of tuition, which gives access to a certain event from the microservice.
 *
 * @method WlModelRequest get() Returns list of enrollments for the tuition.  Get a full list of users who purchased the tuition. For each enrollment, returns the list of events and the users have been enrolled in.
 */
class TuitionEnrollmentListModel extends WlModelAbstract
{
  /**
   * List of tuition enrollments.
   *
   * <dl>
   *   <dt>Wl\Tuition\Enrollment\TuitionEnrollmentEventEntity[] `a_events`</dt>
   *   <dd>
   *     Events for this enrollment.
   *     <dl>
   *       <dt>bool `is_cancelled`</dt>
   *       <dd>Whether this enrollment is cancelled or not.</dd>
   * 
   *       <dt>string `k_class`</dt>
   *       <dd>Event ID.</dd>
   * 
   *       <dt>string `m_event_discount`</dt>
   *       <dd>Login type and shopping cart discounts.</dd>
   * 
   *       <dt>string `m_event_subtotal`</dt>
   *       <dd>Price of the event before login type and shopping cart discounts.</dd>
   * 
   *       <dt>string `m_event_tax`</dt>
   *       <dd>Taxes amount.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>Enrolled client.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dtl_enrollment`</dt>
   *   <dd>Date and time of the enrollment in local business timezone.</dd>
   * 
   *   <dt>int `i_payments_left`</dt>
   *   <dd>Number of payments left.</dd>
   * 
   *   <dt>string `k_purchase_item_tuition`</dt>
   *   <dd>
   *     Key of the tuition purchase item. This is enrollment key, which can be used to modify and cancel the enrollment.
   *   </dd>
   * 
   *   <dt>string `m_payment`</dt>
   *   <dd>One payment amount.</dd>
   * 
   *   <dt>string `m_rest`</dt>
   *   <dd>Rest amount to be paid.</dd>
   * 
   *   <dt>string `m_total`</dt>
   *   <dd>Total initial amount to be paid.</dd>
   * 
   *   <dt>string `uid_payer`</dt>
   *   <dd>Payer for this enrollment.
   * 
   * This user can be enrolled or not, but he pays for the entire enrollment.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_enrollment = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the tuition in tuition microservice.
   *
   * @get get
   * @var string
   */
  public $s_tuition_id = '';
}

?>