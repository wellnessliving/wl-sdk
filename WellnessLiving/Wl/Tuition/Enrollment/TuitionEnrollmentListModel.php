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
   * @get result
   * @var TuitionEnrollmentEntity[]
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