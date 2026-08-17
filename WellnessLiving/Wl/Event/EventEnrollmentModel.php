<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of clients enrolled in the specified event instances.
 *
 * @method WlModelRequest get() Returns a list of clients enrolled in the specified event classes.  An enrollment is considered to exist for any client that has an active (not canceled, not missed) visit, past or future, for one of the specified classes.
 */
class EventEnrollmentModel extends WlModelAbstract
{
  /**
   * List of event classes for which enrollment must be retrieved.
   *
   * @get get
   * @var string[]
   */
  public $a_class = [];

  /**
   * A list of clients enrolled in the specified event classes.
   *
   * Key is the class key.
   *
   * Value is a list of clients enrolled in that class. Each element contains:
   *
   * <dl>
   *   <dt>bool `is_enrolled_full`</dt>
   *   <dd>
   *     <tt>true</tt> if the client has a block event enrollment record set for this class
   *   (booked the whole event); <tt>false</tt> otherwise.
   *   </dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>Key of the client who attended or will attend the event.</dd>
   * </dl>
   * @get result
   * @var array[][]
   */
  public $a_enrollments = [];

  /**
   * Key of the business to which the event classes belong.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>