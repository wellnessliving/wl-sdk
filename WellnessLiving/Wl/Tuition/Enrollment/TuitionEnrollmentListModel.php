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
   *   <dt>array[] `a_events`</dt>
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
   *   <dt>string|null `dl_next`</dt>
   *   <dd>Next payment date in local business timezone and MySQL format.
   * 
   * `null` for membership-based tuition.</dd>
   * 
   *   <dt>string `dtl_enrollment`</dt>
   *   <dd>Date and time of the enrollment in local business timezone.</dd>
   * 
   *   <dt>int `i_payments_done`</dt>
   *   <dd>Number of payments done.</dd>
   * 
   *   <dt>int|null `i_payments_left`</dt>
   *   <dd>Number of payments left.
   * 
   * `null` for membership-based tuition.</dd>
   * 
   *   <dt>int `i_payments_total`</dt>
   *   <dd>Number of payments total at the moment of enrollment.</dd>
   * 
   *   <dt>int|null `id_installment_status`</dt>
   *   <dd>Installment plan status.
   * 
   * `null` if tuition paid in full without installment.</dd>
   * 
   *   <dt>string `k_purchase_item_tuition`</dt>
   *   <dd>
   *     Key of the tuition purchase item. This is enrollment key, which can be used to modify and cancel the enrollment.
   *   </dd>
   * 
   *   <dt>string `m_paid`</dt>
   *   <dd>Rest amount has been already paid.</dd>
   * 
   *   <dt>string `m_payment`</dt>
   *   <dd>One payment amount.</dd>
   * 
   *   <dt>string|null `m_rest`</dt>
   *   <dd>Rest amount to be paid.
   * 
   * `null` for membership-based tuition.</dd>
   * 
   *   <dt>string|null `m_total`</dt>
   *   <dd>Total initial amount to be paid.
   * 
   * `null` for membership-based tuition.</dd>
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
   * Filters.
   *
   * List includes enrollments to the tuition. And enrollments to the tuition include enrollment to the event.
   * If any part of the enrollment to the tuition is valid, according to the given filter, full enrollment is included.
   *
   * For example.
   * Client A is payer for two tuition enrollments. One is for client B and events E1, E2. Another for clients C and D.
   * Both for E1. And Client W pays for one tuition enrollment - for client X.
   *
   * If we filter list by enrolled client D, for example. List will return two tuition enrollments. Both paid with Client A.
   * Because we think that these enrollments are combined in single family and should both be returned.
   *
   * All filters are optional. And added as AND. If you send certain events and certain statues, both conditions should be met.
   *
   * <dl>
   *   <dt>string[] `a_event`</dt>
   *   <dd>Leave only enrollments with the given events enrolled.</dd>
   * 
   *   <dt>int[] `a_statuses`</dt>
   *   <dd>List of tuition statuses.</dd>
   * 
   *   <dt>string[] `a_purchase_item_tuition`</dt>
   *   <dd>List of tuition enrollments ids to leave only.</dd>
   * 
   *   <dt>string[] `a_uid_any`</dt>
   *   <dd>Leave only enrollments with the given payers or enrolled clients.</dd>
   * 
   *   <dt>string[] `a_uid_enrolled`</dt>
   *   <dd>Leave only enrollments with the given enrolled clients.</dd>
   * 
   *   <dt>string[] `a_uid_payer`</dt>
   *   <dd>Leave only enrollments with the given payers.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_filter = [];

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