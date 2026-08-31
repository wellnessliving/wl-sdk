<?php

namespace WellnessLiving\Wl\Tuition\Enrollment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Model to get summary of clients and events enrolled for the given tuitions from the microservice.
 *
 * @method WlModelRequest get() Returns summary of clients and events enrolled for the given tuitions.  For each requested tuition, returns the number of unique clients enrolled in at least one not cancelled event, the number of unique events with at least one not cancelled enrollment, and the total number of not cancelled event enrollments.
 */
class TuitionClientsSummaryModel extends WlModelAbstract
{
  /**
   * Summary of clients and events enrolled, per tuition.
   *
   * Keys - tuition IDs from {@link TuitionClientsSummaryModel::$a_tuition_id}. Values - summary information:
   *
   * <dl>
   *   <dt>int `i_clients_enrolled`</dt>
   *   <dd>Number of unique clients having at least one not cancelled enrolled event.</dd>
   * 
   *   <dt>int `i_enrollments_active`</dt>
   *   <dd>Total number of group enrollments with at least one not cancelled enrolled client in the group.</dd>
   * 
   *   <dt>int `i_enrollments_total`</dt>
   *   <dd>Total number of group enrollments.</dd>
   * 
   *   <dt>int `i_enrolled_total`</dt>
   *   <dd>Total number of not cancelled event enrollments.</dd>
   * 
   *   <dt>int `i_events_unique`</dt>
   *   <dd>Number of unique events having at least one not cancelled enrollment.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_summary = [];

  /**
   * Keys of the tuitions in the tuition microservice to get summary for.
   *
   * @get get
   * @var string[]
   */
  public $a_tuition_id = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>