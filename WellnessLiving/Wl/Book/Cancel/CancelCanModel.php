<?php

namespace WellnessLiving\Wl\Book\Cancel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Visit\WlVisitSid;

/**
 * Returns information about whether the given user can cancel an online booking and what
 * consequences the cancellation would have.
 *
 * This API performs a dry run only — no actual cancellation is performed.
 */
class CancelCanModel extends WlModelAbstract
{
  /**
   * Penalty data.
   *
   * `null` if penalty must be not applied.
   *
   * @get result
   * @var array|null
   */
<dl>
  <dt>bool `is_flat`</dt>
  <dd>`true` in a case of flat penalty type; `false` in a case of percentage penalty type.</dd>

  <dt>string `k_currency`</dt>
  <dd>Currency key. 

  <dt>string `m_amount`</dt>
  <dd>Penalty amount.</dd>
</dl>
  public $a_penalty = null;

  /**
   * `true` if the booking can be canceled online by the specified user, `false` otherwise.
   *
   * Cancellation is possible only if the current visit status is {@link WlVisitSid::BOOK} or {@link WlVisitSid::WAIT}.
   *
   * @get result
   * @var bool
   */
  public $can_cancel = false;

  /**
   * `true` if the client's account will be flagged instead of charging a monetary fee, `false` otherwise.
   *
   * Meaningful only when {@link CancelCanModel::$is_late} is `true`.
   *
   * @get result
   * @var bool
   */
  public $is_flag = false;

  /**
   * `true` if the cancellation would be considered a late cancel, `false` otherwise.
   *
   * Late cancel applies only to bookings with status {@link WlVisitSid::BOOK}.
   * Wait-list bookings ({@link WlVisitSid::WAIT}) are never subject to late cancellation rules.
   *
   * @get result
   * @var bool
   */
  public $is_late = false;

  /**
   * `true` if the visit credit (from the purchase option used to book) will be returned
   * to the user's profile after cancellation, `false` otherwise.
   *
   * For regular (non-late) cancellations, the credit is always returned when the booking
   * was made with a purchase option.
   *
   * For late cancellations, return depends on the business's Payment Return Policy.
   *
   * @get result
   * @var bool
   */
  public $is_refund = false;

  /**
   * Key of the business within which the action is performed.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Visit key.
   *
   * @get get
   * @var string
   */
  public $k_visit = '0';
}

?>